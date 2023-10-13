<?php

namespace App\Model;
use PDO;

class Crud{

    private $pdo;
    private $user;
    private $pass;

    public function __construct()
    {
        $this->user = 'root';
        $this->pass = '';
        $this->pdo = new PDO('mysql:host=localhost;dbname=portifolio',$this->user,$this->pass);
    }

    public function insert($projectData){
        unset($projectData['projectImage']);

        $sql = "INSERT INTO projects (name,email,startDate,finishDate) VALUES(?,?,?,?)";
        $resultSql = $this->pdo->prepare($sql);
        $resultSql->bindParam(1,$projectData['name']);
        $resultSql->bindParam(2,$projectData['email']);
        $resultSql->bindParam(3,$projectData['StartDate']);
        $resultSql->bindParam(4,$projectData['FinishDate']);
        $resultSql->execute();

        if($resultSql->execute()){
            header('Location:ProjectsForm?success=1');
        } else{
            header('Location:ProjectsForm?success=0');
        }

       

   

    }
}


