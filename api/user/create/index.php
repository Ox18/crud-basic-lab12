<?php

    include "../../../utils/Response.php";
    include "../../../entity/Usuario.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    // Takes raw data from the request

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();
    try{
        $body = json_decode(file_get_contents("php://input"));

        $nombre = $body->nombre;
        $correo = $body->correo;
        $password = $body->password;
        $direccion = $body->direccion;
        $rol = $body->rol;

        $sql = "INSERT INTO usuaio (nombre, correo, password, direccion, rol) VALUES ('$nombre', '$correo', '$password', '$direccion', '$rol')";

        $query = $pdo->prepare($sql);
        $query->execute();

        $response->addSuccess("Usuario creado correctamente");  
    }
    catch(PDOException $e){
        $response->addError("Error al crear el usuario");
    }

    unset($pdo);
    echo json_encode($response->getResponse());

?>
