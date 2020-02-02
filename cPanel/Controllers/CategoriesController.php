<?php
require_once(__DIR__."/../class_db.php");
require_once(__DIR__.'/../Models/CategoriesModel.php');

class CategoriesController
{
    private $site_db;
    private $categoryModel;
    private $feedback;


    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->categoryModel = new Categories();

    }

    public function getAllCategories()
    {
        $sql = $this->categoryModel::GET_ALL_CATEGORIES;
        $categories_data = $this->site_db->getData($sql);
        return $categories_data;
    }

    public function getAllActiveCategories()
    {
        try {
            $sql = $this->categoryModel::GET_ACTIVE_CATEGORIES;
            $sub_categories_data = $this->site_db->getData($sql);
            return $sub_categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getAllNotActiveCategories()
    {
        try {
            $sql = $this->categoryModel::GET_NOT_ACTIVE_CATEGORIES;
            $sub_categories_data = $this->site_db->getData($sql);
            return $sub_categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getParentCategories()
    {
        $sql = $this->categoryModel::GET_PARENT_CATEGORIES;
        $categories_data = $this->site_db->getData($sql);
        return $categories_data;

    }

    public function getActiveParentCategories()
    {
        $sql = $this->categoryModel::GET_PARENT_ACTIVE_CATEGORIES;
        $categories_data = $this->site_db->getData($sql);
        return $categories_data;

    }

    public function getNotActiveParentCategories()
    {
        $sql = $this->categoryModel::GET_PARENT_NOT_ACTIVE_CATEGORIES;
        $categories_data = $this->site_db->getData($sql);
        return $categories_data;

    }

    public function getAllSubCategories($cat_id)
    {
        try {
            $sql = $this->categoryModel::GET_CHILD_CATEGORIES;
            $args = array('idCat' => $cat_id);
            $sub_categories_data = $this->site_db->getData($sql, $args);
            return $sub_categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getNameCatByIdCat($cat_id)
    {
        try {

            $sql = $this->categoryModel::GET_NAME_CATEGORIES_BY_ID_CAT;
            $args = array('idCat' => $cat_id);
            $categories_data = $this->site_db->getData($sql, $args);
            return  $categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDataOfCategories($cat_id)
    {
        try {
            $sql = $this->categoryModel::GET_DATA_CATEGORIES;
            $args = array('idCat' => $cat_id);
            $categories_data = $this->site_db->getData($sql, $args);
            return $categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getActiveSubCategories($cat_id)
    {
        try {
            $sql = $this->categoryModel::GET_CHILD_ACTIVE_CATEGORIES;
            $args = array('idCat' => $cat_id);
            $sub_categories_data = $this->site_db->getData($sql, $args);
            return $sub_categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getNotActiveSubCategories($cat_id)
    {
        try {
            $sql = $this->categoryModel::GET_CHILD_NOT_ACTIVE_CATEGORIES;
            $args = array('idCat' => $cat_id);
            $sub_categories_data = $this->site_db->getData($sql, $args);
            return $sub_categories_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function checkCategoriesByID($cat_id)
    {
        try {
            $sql = $this->categoryModel::CHECK_CATEGORIES_BY_ID;
            $args = array(':cat_id' => $cat_id);
            $rowCount = $this->site_db->rowCount($sql, $args);
            return $rowCount;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function checkCategoriesByName($cat_name)
    {
        try {
            $sql = $this->categoryModel::CHECK_CATEGORIES_BY_NAME;
            $args = array(':cat_name' => $cat_name);
            $rowCount = $this->site_db->rowCount($sql, $args);
            return $rowCount;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertCategory($infoNewCat)
    {
        try {
            $sql = $this->categoryModel::INSERT_TO_CATEGORIES_TABLE ;
            $args = array(
                'cat_name'        => $infoNewCat['cat_name'],
                'cat_description' => $infoNewCat['cat_description'],
                'cat_status'      => 1,
                'visibility'      => $infoNewCat['visibility'],
                'create_by'       => $infoNewCat['create_by'],
                'create_date'     => date("Y-m-d h:i:sa"),
                'updates'         => "",
                'parent'          => $infoNewCat['parent'],
                'ordering'        => $infoNewCat['ordering'],
                'allow_ads'       => $infoNewCat['allow_ads'],
                'allow_comments'  => $infoNewCat['allow_comments']
            );
           $check= $this->checkCategoriesByName($infoNewCat['cat_name']);

           if($check==0)
           {
               $status=$this->site_db->insertToTable($sql, $args);
               if($status >0)
               {
                   $feedback = '{"feedback_id":3 ,"feedback_message":" تمت عملية الإضافة بنجاح "}';

               }
               else {
                   $feedback = '{"feedback_id":4 ,"feedback_message":"عذراً ... فشلت عملية الإضافة"}';

               }
           }
           else
           {
               $feedback = '{"feedback_id":5 ,"feedback_message":"عذراً ... التصنيف موجود من قبل يرجى ادخل اسم اخر"}';

           }

            return $feedback;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function updateCategory($infoUpdate=array())
    {
        $cat_id= $infoUpdate['cat_id'];
        $update_By   = $infoUpdate['update_by'];
        $update_date = $infoUpdate['update_date'];
        $info_update ="";

        foreach ($this->getDataOfCategories($cat_id) as $cat){
            if($cat->updates != null){
                $info_update_array = json_decode($cat->updates,true);
                $update     = "{'update_By':". $update_By.",'update_date':".$update_date."}";
                array_push($info_update_array,$update);
                $info_update  = json_encode($info_update_array);

            }
            else{
                $info_update  = "[{'update_By':". $update_By.",'update_date':".$update_date."}]";
            }
        }

        try {
            $sql =$this->categoryModel::UPDATE_CATEGORY;
            $args = array(
                'cat_id'           => $infoUpdate['cat_id'],
                'cat_name'         => $infoUpdate['cat_name'],
                'cat_description'  => $infoUpdate['cat_description'],
                'cat_status'       => 1,
                'visibility'       => $infoUpdate['visibility'],
                'updates'          => $info_update,
                'parent'           => $infoUpdate['parent'],
                'ordering'         => 0,
                'allow_ads'        => $infoUpdate['allow_ads'],
                'allow_comments'   => $infoUpdate['allow_comments']
            );

            $state = $this->site_db->updateData($sql, $args);

            if($state >0)
            {
                $feedback = '{"feedback_id":1 ,"feedback_message":"تمت عملية الاضافة بنجاح"}';
            }

            else  $feedback = '{"feedback_id":0 ,"feedback_message":"عفواً ... فشلت عمليت التحديث"}';
            return $feedback;

        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function showCategoryInSite($cat_id){
        try{
            $sql = $this->categoryModel::SHOW_CATEGORY_IN_SITE;
            $args = array(
                'cat_id' => $cat_id
            );
            $this->site_db->updateData($sql,$args);


        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function hideCategoryFromSite($cat_id){
        try{
            $sql = $this->categoryModel::HIDE_CATEGORY_FROM_SITE;
            $args = array(
                'cat_id' => $cat_id
            );
            $this->site_db->updateData($sql,$args);


        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function recoveryCategory($cat_id)
    {
        try{
            $sql = $this->categoryModel::RECOVER_CATEGORY;
            $args = array(
                'cat_id' => $cat_id
            );
            $this->site_db->updateData($sql,$args);


        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function transferCatToTrash($cat_id)
    {
        try{
            $sql = $this->categoryModel::TRANSFER_CATEGORY_TO_TRASH;
            $args = array(
                'cat_id' => $cat_id
            );
            $state = $this->site_db->updateData($sql,$args);
            return $state;
        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }

    public function deleteCategory($cat_id)
    {
        try {
                $check= $this->checkCategoriesByID($cat_id);
                if($check > 0){
                $sql = $this->categoryModel::DELETE_CATEGORY;
                $args = array(
                    ':idCat'=>$cat_id
                );
                $this->site_db->deleteData($sql, $args);
                $feedback = '{"feedback_id":6 ,"feedback_message":" تمت عملية الحذف بنجاح "}';

            }
            else {
                $feedback = '{"feedback_id":7 ,"feedback_message":"عفواً ... هذا القسم غير موجود"}';
            }

            return $feedback;

        }
        catch (PDOException $e)
        {
            echo $e->getMessage();
        }

    }






}

?>