<?php

    include "../../../utils/Response.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();
    try{
        $body = json_decode(file_get_contents("php://input"));
        
        $id = $body->id;
        $nombre = $body->nombre;
        $correo = $body->correo;
        $password = $body->password;
        $direccion = $body->direccion;
        $rol = $body->rol;

        $query = $pdo->prepare($QUERY_UPDATE);

        $query->bindParam(':id', $id, PDO::PARAM_INT);
        $query->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $query->bindParam(':correo', $correo, PDO::PARAM_STR);
        $query->bindParam(':password', $password, PDO::PARAM_STR);
        $query->bindParam(':direccion', $direccion, PDO::PARAM_STR);
        $query->bindParam(':rol', $rol, PDO::PARAM_STR);

        
        $query->execute();

        if($query->rowCount() > 0){
            $response->setMessage($RESPONSE_UPDATE_SUCCESS);
        }else{
            $response->setMessage($RESPONSE_UPDATE_ERROR);
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
