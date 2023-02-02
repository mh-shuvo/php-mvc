<?php
  class Pages {
    public function __construct(){
     
    }

    public function index(){
      echo 1;
    }

    public function about($id){
      echo $id;
    }
  }