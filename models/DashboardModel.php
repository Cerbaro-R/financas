<?php

require_once 'core/Database.php';

class DashboardModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }  
}