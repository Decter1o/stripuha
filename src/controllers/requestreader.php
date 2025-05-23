<?php

    
    header('Content-Type: application/json; charset=utf-8');

    $response =[];

    switch($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            $jsonData = file_get_contents("php://input");
            $data = json_decode($jsonData, true);
            session_start();
            switch ($data['action']) {
                case '':
                    
                    break;
                
                default:
                    
                    break;
            }
            break;
        case 'POST':
            $jsonData = file_get_contents("php://input");
            $data = json_decode($jsonData, true);
            session_start();
            switch ($data['action']) {
                case 'verify':
                    
                    break;
                
                default:
                    
                    break;
            }
            break;
        default:
            $response = ['error' => 'Unsupported request method'];
    }

    if (!empty($response)) {
        echo json_encode($response);
    }