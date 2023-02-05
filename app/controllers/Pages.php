<?php
  class Pages extends Controller {
    public function __construct(){
     $this->postModel = $this->model("Post");
    }

    public function index(){
      $posts = $this->postModel->getPosts();
      return $this->view("index",["title" => "Welcome to the PHPMVC","posts"=>$posts]);
    }

    public function about($id){
      echo $id;
    }
  }