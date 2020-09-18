<?php


namespace App\Model;

use Core\Model;
use PDO;

class Post extends Model
{
    protected $tableName = 'posts';

    /**
     * Post constructor.
     */
    public function __construct()
    {
        $this->getDB();
    }

    /**
     * Insert New Post
     * @param array $postData
     */
    public function insert(array $postData)
    {
        $sql = "INSERT INTO {$this->tableName} (user_name,email,message,is_published,created_at,updated_at) 
                VALUES (:user_name,:email,:message,:is_published,:created_at,:updated_at)";
        $this->sql($sql, $postData);
        $this->lastInsertId = $this->db->lastInsertId();

    }

    /**
     * Get a post by id
     * @param int $id
     * @return bool
     */
    public function getPostById(int $id)
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE id ={$id}";
        $this->sql($sql);
        $post = $this->stmt->fetch(PDO::FETCH_ASSOC);
        return !empty($post) ? $post : false;
    }


    // TODO Make a universal function instead of three

    /**
     * Get all posts
     * @return bool or array
     */
    public function getAllPost()
    {
        $sql = "SELECT * FROM {$this->tableName}";
        $this->sql($sql);
        $posts = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($posts) ? $posts : false;
    }

    /**
     * Get all posts in published
     * @return bool or array
     */
    public function getAllPostInPublished()
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE  is_published =" . IS_PUBLISHED;
        $this->sql($sql);
        $posts = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($posts) ? $posts : false;
    }

    /**
     * Get all posts in not published
     * @return bool or array
     */
    public function getAllPostNotPublished()
    {
        $sql = "SELECT * FROM {$this->tableName} WHERE  is_published <>" . IS_PUBLISHED;
        $this->sql($sql);
        $posts = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        return !empty($posts) ? $posts : false;
    }

    /**
     * Update a post by id
     * @param int $id
     * @return bool
     */
    public function updatePost($id)
    {
        $sql = "UPDATE {$this->tableName} SET is_published ="
            . "'"
            . IS_PUBLISHED
            . "'"
            . ","
            . "created_at="
            . "'"
            . date("Y-m-d H:i:s")
            . "'"
            . ","
            . "updated_at="
            . "'"
            . date("Y-m-d H:i:s")
            . "'"
            . " WHERE id =" . $id . ";";
        $this->sql($sql);
    }

    /**
     * Delete a post by id
     * @param int $id
     * @return bool
     */
    public function deletePost($id)
    {
        $sql = "DELETE FROM  {$this->tableName}"
            . " WHERE id =" . $id . ";";
        $this->sql($sql);
    }
}
