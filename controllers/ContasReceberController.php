<?php

    require_once 'models/DashboardModel.php';
    require_once 'models/ContasReceberModel.php';

    class ContasReceberController {

        private $dashboardModel;
        private $ContasReceberModel;

        public function __construct() {
            $this->dashboardModel = new DashboardModel();
            $this->ContasReceberModel = new ContasReceberModel();
        }

        public function index() {

            $contas = $this->dashboardModel->getContas();

            include 'views/ContasReceber/index.php';
        }

        public function insert() {
            
            $data = [
                'descricao' => $_POST['descricao'],       
                'conta_id' => $_POST['conta_id'],
                'valor' => $_POST['valor'],
                'vencimento' => $_POST['vencimento'],
                'data_emissao' => date('Y-m-d')
            ];

            $this->ContasReceberModel->insert($data);

            header('Location: /ContasReceber');
        }
    }