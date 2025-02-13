<?php

require_once 'core/Database.php';

class ContasReceberModel {

    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }  

    public function insert($data) {
        $sql = "INSERT INTO receber (historico, conta_id, valor, dt_vencimento, dt_emissao) VALUES (:descricao, :conta_id, :valor, :vencimento, :data_emissao)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
    }
}