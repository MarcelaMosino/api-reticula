<?php
    //Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Clases.php';

    //Instancia base y conecta
    $database = new Database();
    $db = $database->connect();
    
    //Instancia clases
    $clases = new Clases($db);

    if(isset($_GET['id_class'])){
        $clases->id_class = $_GET['id_class'];
        $clases->readID();

        if($clases->class_key){
            //Arreglo
            $arreglo_clases = array(
                'id_class' => $clases->id_class,
                'class_key' => $clases->class_key,
                'semester' => $clases->semester,
                'class_name' => $clases->class_name,
                'theo_credits' => $clases->theo_credits,
                'prac_credits' => $clases->prac_credits,
                'total_credits' => $clases->total_credits
            );
            // Formar JSON
            echo json_encode($arreglo_clases);
        }else{
            echo 'Archivo no encontrado';
        }

    }else{
        echo '\nID vacío\n';
    }


    