<?php

     class Controller
     {
         public function model($model)
         {
             require_once './mvc/models/'.$model.'.php';

             return new $model();
         }

         public function view($view, $data = [])
         {
             if (file_exists('./mvc/views/'.$view.'.php')) {
                 require_once './mvc/views/'.$view.'.php';
             }
         }
     }
