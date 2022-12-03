<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/Clases.php';

    $database = new Database();
    $db = $database->connect();

    $clases = new Clases($db);

    $data = json_decode(file_get_contents("php://input"));
    $clases->class_key = $data->class_key;
    $clases->semester = $data->semester;
    $clases->class_name = $data->class_name;
    $clases->theo_credits = $data->theo_credits;
    $clases->prac_credits = $data->prac_credits;
    $clases->total_credits = $data->total_credits;
    
    if($clases->create()){
        echo json_encode(
            array('message' => 'Clases creadas',
            'inserted_row'=> $data)
        );
    }else{
        echo 'Clases no creadas';
    }