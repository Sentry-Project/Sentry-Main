<?php
  /*
   * Base Controller
   * Loads models and views
   */

   class Controller {
    // Load model
    public function model($model){
      // require model file
      require_once '../app/models/' . $model . '.php';

      // Instantiate it
      return new $model();

    }

    // Load view
    public function view($view, $data = []){
      // check view file

      if(file_exists('../app/views/' . $view . '.php')){

        require_once '../app/views/' . $view . '.php';
      }else {
        // View does not exist
        die('View does not exist');
      }
    }


   }