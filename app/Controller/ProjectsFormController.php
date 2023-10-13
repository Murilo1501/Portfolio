<?php

namespace App\Controller;
use App\Model\Crud;
//use App\Controller\Controller;

class ProjectsFormController{

    public function __construct(private Crud $crud)
    {
        
    }

    public function CallCrud(){
        require_once __DIR__.'/../view/ProjectsForm.php';
    }
}