<?php

    include "./utils/Response.php";
    include "./entity/Usuario.php";
    include "./utils/UserValues.php";

    require_once("./conexion.php");
    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();

    try{
    
        $result = mysqli_query($conn, $QUERY_SELECT_ALL);

        $usuarios = array();

        while($row = mysqli_fetch_array($result)){
            $id = $row['id_usuaio'];
            $nombre = $row['nombre'];
            $correo = $row['correo'];
            $password = $row['password'];
            $direccion = $row['direccion'];
            $rol = $row['rol'];

            $usuario = new Usuario($id, $nombre, $correo, $password, $direccion, $rol);

            // push in array
            array_push($usuarios, $usuario->toObject());
        }
        $response->addSuccess($usuarios);
    
    }catch(Exception $e){
        $response->addError($e->getMessage());

    }finally{
        mysqli_close($conn);
    }

    echo json_encode($response->getResponse());

?>