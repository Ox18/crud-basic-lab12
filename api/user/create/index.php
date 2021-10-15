<?php

    include "../../../utils/Response.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();
    try{
        $body = json_decode(file_get_contents("php://input"));

        $nombre = $body->nombre;
        $correo = $body->correo;
        $password = $body->password;
        $direccion = $body->direccion;
        $rol = $body->rol;

        $query = $pdo->prepare($QUERY_UPDATE);
        $query->bindParam(":nombre", $nombre);
        $query->bindParam(":correo", $correo);
        $query->bindParam(":password", $password);
        $query->bindParam(":direccion", $direccion);
        $query->bindParam(":rol", $rol);

        $query->execute();

        if($query->rowCount() > 0){
            $response->setMessage($RESPONSE_INSERT_SUCCESS);
        }else{
            $response->addError($RESPONSE_INSERT_ERROR);
        }
    }
    catch(PDOException $e){
        $response->addError($e->getMessage());
    }
    finally{
        unset($pdo);
    }

    echo json_encode($response->getResponse());

?>
