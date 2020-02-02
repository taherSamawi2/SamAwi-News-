<?php

class  Categories
{
    const  GET_ALL_CATEGORIES = "SELECT * FROM Categories";
    const  GET_ACTIVE_CATEGORIES = "SELECT * FROM Categories WHERE cat_status =1";
    const  GET_NOT_ACTIVE_CATEGORIES = "SELECT * FROM Categories WHERE cat_status =0";

    const  CHECK_CATEGORIES_BY_ID = "SELECT * FROM Categories WHERE cat_id =:cat_id";
    const  CHECK_CATEGORIES_BY_NAME = "SELECT * FROM Categories WHERE cat_name =:cat_name";
    const  GET_PARENT_CATEGORIES = "SELECT *  FROM categories  WHERE parent = 0";
    const  GET_PARENT_ACTIVE_CATEGORIES = "SELECT *  FROM categories  WHERE parent = 0 AND cat_status=1";
    const  GET_PARENT_NOT_ACTIVE_CATEGORIES = "SELECT *  FROM categories  WHERE parent = 0 AND cat_status=0";

    const  GET_NAME_CATEGORIES_BY_ID_CAT = "SELECT cat_name FROM categories WHERE cat_id=:idCat";

    const  GET_CHILD_CATEGORIES = "SELECT *  FROM categories  WHERE parent =:idCat ";
    const  GET_CHILD_ACTIVE_CATEGORIES = "SELECT *  FROM categories  WHERE parent =:idCat AND cat_status=1 ";
    const  GET_CHILD_NOT_ACTIVE_CATEGORIES = "SELECT *  FROM categories  WHERE parent =:idCat AND cat_status=0 ";
    const  GET_DATA_CATEGORIES  = "SELECT *  FROM categories  WHERE cat_id =:idCat ";



    const  INSERT_TO_CATEGORIES_TABLE = "INSERT INTO Categories
                                            (
                                            cat_name,
                                            cat_description,
                                            cat_status,
                                            create_by,
                                            create_date,
                                            updates,
                                            parent,
                                            visibility,
                                            ordering,
                                            allow_ads,
                                            allow_comments
                                            ) 
                                         VALUES 
                                             (
                                             :cat_name,
                                             :cat_description,
                                             :cat_status,
                                             :create_by,
                                             :create_date,
                                             :updates,
                                             :parent,
                                             :visibility,
                                             :ordering,
                                             :allow_ads,
                                             :allow_comments
                                             )";

    const  UPDATE_CATEGORY="UPDATE categories
                      SET
                      cat_name =:cat_name,
                      cat_description =:cat_description,
                      cat_status =:cat_status,
                      visibility=:visibility,
                      updates =:updates,
                      parent =:parent,
                      ordering=:ordering,
                      allow_ads=:allow_ads,
                      allow_comments=:allow_comments
                      WHERE
                      cat_id =:cat_id";

    const DELETE_CATEGORY ="DELETE FROM categories WHERE cat_id =:idCat";
    const SHOW_CATEGORY_IN_SITE = "UPDATE categories SET visibility = 1 WHERE cat_id =:cat_id";
    const HIDE_CATEGORY_FROM_SITE = "UPDATE categories SET visibility = 0 WHERE cat_id =:cat_id";
    const TRANSFER_CATEGORY_TO_TRASH = "UPDATE categories SET cat_status = 0 WHERE cat_id =:cat_id";
    const RECOVER_CATEGORY = "UPDATE categories SET cat_status = 1 WHERE cat_id =:cat_id";


    public $cat_id =":idCat";
    public $cat_name =":nameCategory";
    public $cat_description = ":at_description";
    public $cat_status = ":status";
    public $create_by =":createBy";
    public $create_date = ":dateNow";
    public $updates =":updates";
    public $parent =":parent";
    public $ordering =":ordering";
    public $allow_ads = ":allow_ads";
    public $allow_comments =":allow_comments";

}

?>