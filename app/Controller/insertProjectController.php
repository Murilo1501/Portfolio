<?php

namespace App\Controller;
use App\Model\Crud;

class InsertProjectController{

    public function __construct(private Crud $crud)
    {
        
    }

    public function CallCrud(){

        $projectData = $_POST;      
        $this->crud->insert($projectData);
    }
}