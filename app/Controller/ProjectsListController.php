<?php

namespace App\Controller;
use App\Model\Crud;

class ProjectsListController{

    public function __construct(private Crud $Crud)
    {
        //echo 'ola';
    }

    public function CallCrud(){
        //$this->Crud->allProjects();

        require_once __DIR__.'/../view/home.php';
    }
}