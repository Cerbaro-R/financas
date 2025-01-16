<?php

require_once 'models/DashboardModel.php';

class DashboardController{

    private $model;

    public function __construct(){
        $this->model = new DashboardModel();
    }

    public function index(){
        include 'views/dashboard/index.php';

    }
}