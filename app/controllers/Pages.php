<?php

class Pages extends Controller {
  public function __construct()
  {
    
  }

  public function index(){
     $data = [
      'title' => 'Welcome'
    ];

    $this->view('pages/index', $data);
  }

  public function register(){
    $data = [
     'title' => 'Welcome'
   ];

   $this->view('pages/register', $data);
 }

  public function about($id){
    echo $id;
  }
}