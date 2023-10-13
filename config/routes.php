<?php

use App\Controller\ProjectsListController;
use App\Controller\ProjectsFormController;
use App\Controller\InsertProjectController;

return [
    'GET|/'=> ProjectsListController::class,
    'GET|/ProjectsForm' => ProjectsFormController::class,
    'POST|/InsertProject' => InsertProjectController::class
];