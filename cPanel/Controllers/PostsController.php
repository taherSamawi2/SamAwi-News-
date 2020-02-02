<?php
require_once(__DIR__."/../class_db.php");
require_once(__DIR__.'/../Models/PostsModel.php');


class PostsController
{
    private $site_db;
    private $postModel;

    public function __construct()
    {
        $this->site_db = new SiteDB();
        $this->postModel = new Posts();
    }

    public function getAllPosts()
    {
        $sql = $this->postModel::GET_ALL_POSTS;
        $Posts_data = $this->site_db->getData($sql);
        return $Posts_data;
    }


    function getAllActivePosts()
    {
        try {
            $sql = $this->postModel::GET_ACTIVE_POSTS;
            $Posts_data = $this->site_db->getData($sql);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getAllNotActivePosts()
    {
        try {
            $sql = $this->postModel::GET_NOT_ACTIVE_POSTS;
            $Posts_data = $this->site_db->getData($sql);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getCountRow($cat_id)
    {
        try {
            $sql = $this->postModel::GET_COUNT_ROW;
            $args = array('idCat' => $cat_id);
            $Posts_data = $this->site_db->getData($sql,$args);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getPostsForCategory($cat_id)
    {
        try {
            $sql = $this->postModel::GET_ALL_POSTS_FOR_CATEGORY;
            $args = array('idCat' => $cat_id);
            $Posts_data = $this->site_db->getData($sql,$args);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getActivePostsForCategory($cat_id)
    {
        try {
            $sql = $this->postModel::GET_ACTIVE_POSTS_FOR_CATEGORY;
            $args = array('idCat' => $cat_id);
            $Posts_data = $this->site_db->getData($sql,$args);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getNotActivePostsForCategory($cat_id)
    {
        try {
            $sql = $this->postModel::GET_NOT_ACTIVE_POSTS_FOR_CATEGORY;
            $args = array('idCat' => $cat_id);
            $Posts_data = $this->site_db->getData($sql,$args);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function getLastPosts()
    {
        try {
            $sql = $this->postModel::GET_ALL_POSTS;
            $Posts_data = $this->site_db->getData($sql);
            return $Posts_data;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }



    public function insertPost($post_title, $post_intro, $post_content,
                               $post_img, $cat_id, $create_by,
                               $updates, $publish_post)
    {
        try {
            $sql = $this->postModel::INSERT_TO_POSTS_TABLE;

            $args = array(
                'post_title' => $post_title,
                'post_intro' => $post_intro,
                'post_content' => $post_content,
                'post_img' => $post_img,
                'post_status' => -1,
                'cat_id' => $cat_id,
                'create_by' => $create_by,
                'create_date' => date("y"),
                'updates' => null,
                'publish_post' => $publish_post
            );

            $this->site_db->insertToTable($sql, $args);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    public function updatePost($post_title, $post_intro, $post_content,
                               $post_img, $post_status, $cat_id, $create_by,
                               $date, $updates, $publish_post)
    {
        try {
            $sql = $this->postModel::UPDATE_POST;

            $args = array(
                'post_title' => $post_title,
                'post_intro' => $post_intro,
                'post_content' => $post_content,
                'post_img' => $post_img,
                'post_status' => $post_status,
                'cat_id' => $cat_id,
                'create_by' => $create_by,
                'create_date' => $date,
                'updates' => $updates,
                'publish_post' => $publish_post
            );

            $this->site_db->updateData($sql, $args);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function deletePost($post_id)
    {
        try {
            $sql = $this->postModel::DELETE_POST;
            $args = array('post_id' => $post_id);
            $this->site_db->deleteData($sql, $args);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    function activePost($post_id)
    {
        try {
            $sql = $this->postModel::ACTIVATE_POST;
            $args = array(
                'post_id' => $post_id
            );
            $this->site_db->updateData($sql, $args);


        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }


}

?>