<?php

class Posts
{
    const  GET_ALL_POSTS = "SELECT * FROM posts";
    const  GET_ACTIVE_POSTS = "SELECT * FROM posts WHERE post_status =1";
    const  GET_NOT_ACTIVE_POSTS = "SELECT * FROM posts WHERE post_status =-1";

    const  GET_ALL_POSTS_FOR_CATEGORY = "SELECT * FROM posts WHERE cat_id =:idCat AND post_status =1 ";
    const  GET_ACTIVE_POSTS_FOR_CATEGORY = "SELECT * FROM posts WHERE cat_id =:idCat post_status =1 ";
    const  GET_NOT_ACTIVE_POSTS_FOR_CATEGORY = "SELECT * FROM posts WHERE cat_id =:idCat post_status =-1 ";
    const  GET_COUNT_ROW = "SELECT count(*) as countRow FROM posts WHERE cat_id =:idCat";
    const  INSERT_TO_POSTS_TABLE =
        "INSERT INTO posts (
                            post_title,
                            post_intro,
                            post_content,
                            post_img,
                            post_status,
                            cat_id,
                            create_by,
                            create_date,
                            updates,
                            publish_post) 
                            
                    VALUES (
                            :post_title,
                            :post_intro,
                            :post_content,
                            :post_img,
                            :post_status,
                            :cat_id,
                            :create_by,
                            :create_date,
                            :updates,
                            :publish_post
                             )";


    const  UPDATE_POST = "UPDATE
                            categories
                              SET
                              post_title   =:post_title,
                              post_intro   =:post_intro,
                              post_content =:post_content,
                              post_img     =:post_img,
                              post_status  =:post_status,
                              create_by    =:create_by,
                              cat_id       =:cat_id,
                              create_date  =:create_date,
                              updates      =:updates,
                              publish_post =:publish_post
                              WHERE 
                              post_id =:post_id";

    const ACTIVATE_POST = "UPDATE posts SET post_status = 1 WHERE post_id =:post_id";

    const DELETE_POST = "DELETE FROM posts WHERE post_id =:post_id";

    public $post_id;
    public $post_title;
    public $post_intro;
    public $post_content;
    public $post_img;
    public $post_status;
    public $cat_id;
    public $create_by;
    public $create_date;
    public $updates;
    public $publish_post;


}

?>