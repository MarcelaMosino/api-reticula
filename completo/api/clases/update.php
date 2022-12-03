<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: PUT');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Clases.php';

  //Base de datos
  $database = new Database();
  $db = $database->connect();

  //Instancia de Clases
  $clases = new Clases($db);

  // Obtener datos
  $data = json_decode(file_get_contents("php://input"));

  //Obtener ID
  if($data->id_class){    
    $clases->id_class = $data->id_class;
    $clases->class_key = $data->class_key;
    $clases->semester = $data->semester;
    $clases->class_name = $data->class_name;
    $clases->theo_credits = $data->theo_credits;
    $clases->prac_credits = $data->prac_credits;
    $clases->total_credits = $data->total_credits;
    // Actualizar
    if($clases->update()) {
      echo json_encode(
        array('message' => 'Clases actualizadas',
        'actualizacion'=> $data)
      );
    } else {
      echo 'Clases no actualizadas';
    }
  }else{
    echo 'El id no corresponde a ninún registro';
    die();
  }

