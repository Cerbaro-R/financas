<?php

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($uri === '/' || $uri === '/index.php') {
        require 'controllers/DashboardControler.php';
        $controller = new DashboardController();
        $controller->index();
    }
    elseif ($uri === '/ContasReceber') {
        require 'controllers/ContasReceberController.php';
        $controller = new ContasReceberController();
        $controller->index();
    }
    elseif ($uri === '/ContasPagar') {
        require 'controllers/ContasPagarController.php';
        $controller = new ContasPagarController();
        $controller->index();
    }
