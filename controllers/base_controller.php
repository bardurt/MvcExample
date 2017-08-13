<?php

class BaseController{
    
    public function error(){
        require_once __DIR__ . '/../views/base/error.php';
    }
    
    public function index(){
        require_once __DIR__ . '/../views/base/index.php';
    }
}
