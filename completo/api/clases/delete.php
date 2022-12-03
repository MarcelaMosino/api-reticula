<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: DELETE');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Clases.php';

  // Base de datos
  $database = new Database();
  $db = $database->connect();

  $clases = new Clases($db);

  //Obtener ID
  $clases->id_class = isset($_GET['id_class']) ? $_GET['id_class'] : die();

  // Eliminar
  if($clases->delete()) {
    echo json_encode(
      array('message' => 'Clases eliminadas',
      'id_clases_eliminadas'=>$_GET['id_class'])
    );
  } else {
    echo 'Clases no eliminadas';
  }

