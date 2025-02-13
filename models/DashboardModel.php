<?php

require_once 'core/Database.php';

class DashboardModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }  

    public function getContas() {
        $query = $this->db->query("SELECT * FROM contas");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}