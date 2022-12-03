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

    //Consulta clases
    $resultado = $clases->read();

    //Si regresa algo
    if ($resultado){
        $arreglo_clases = array();
        $arreglo_clases['data'] = array();

        while($row = mysqli_fetch_assoc($resultado)){
            $item_clases = array(
                'id_class' => $row['id_class'],
                'class_key' => $row['class_key'],
                'semester' => $row['semester'],
                'class_name' => $row['class_name'],
                'theo_credits' => $row['theo_credits'],
                'prac_credits' => $row['prac_credits'],
                'total_credits' => $row['total_credits']
            );
            array_push($arreglo_clases['data'], $item_clases);
        }
        echo json_encode($arreglo_clases);
    }else{        
        echo json_encode(
            array('message' => 'No hay clases')
        );
    }