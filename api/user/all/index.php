<?php

    include "../../../utils/Response.php";
    include "../../../entity/Usuario.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();

    try{
    
        $query = $pdo->query($QUERY_SELECT_ALL);
        $rows = $query->fetchAll();

        $usuarios = array();

        foreach($rows as $row){
            $id = $row['id_usuaio'];
            $nombre = $row['nombre'];
            $correo = $row['correo'];
            $password = $row['password'];
            $direccion = $row['direccion'];
            $rol = $row['rol'];

            $usuario = new Usuario($id, $nombre, $correo, $password, $direccion, $rol);            
            array_push($usuarios, $usuario->toObject());
        }

        if(count($usuarios) > 0){
            $response->addSuccess($usuarios,$RESPONSE_SELECT_ALL_SUCCESS);
        }else{
            $response->addError($RESPONSE_SELECT_ALL_SUCCESS_EMPTY);
        }
    }catch(PDOException $e){
        $response->addError($e->getMessage());

    }finally{
        unset($pdo);
    }

    echo json_encode($response->getResponse());

?>