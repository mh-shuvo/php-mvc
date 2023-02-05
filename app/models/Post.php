<?php

class Post{
    private $db;
    public function __construct(){
        $this->db = new Database();
    }

    public function getPosts(){
        $sql = "SELECT * FROM posts";
        $this->db->query($sql);
        $results = $this->db->resultSet();
        return $results;
    }
}