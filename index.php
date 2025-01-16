<?php

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($uri === '/' || $uri === '/index.php') {
        require 'controllers/DashboardControler.php';
        $controller = new DashboardController();
        $controller->index();}
    
