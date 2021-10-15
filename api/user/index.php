<?php

    include "../../utils/Response.php";
    include "../../entity/Usuario.php";
    include "../../utils/UserValues.php";

    require_once("../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');
    
    $response = new Response();
    
        try{
            $id = $_GET['id'];
    
            $query = $pdo->query($QUERY_SELECT);
            $query->bindParam(":id", $id);
            $rows = $query->fetchAll(PDO::FETCH_ASSOC);

            $n = 0;

            foreach($rows as $row){
                $id = $row['id'];
                $nombre = $row['nombre'];
                $correo = $row['correo'];
                $password = $row['password'];
                $direccion = $row['direccion'];
                $rol = $row['rol'];
                $usuario = new Usuario($id, $nombre, $correo, $password, $direccion, $rol);            
                $response->setData($usuario->toObject());
            }
            if($n == 0){
                $response->addSuccess($RESPONSE_SELECT_EMPTY);
            }
            else{
                $response->setMessage($RESPONSE_SELECT_SUCCESS);
            }
        
        }catch(Exception $e){
            $response->addError($e->getMessage());
    
        }finally{
            unset($pdo);
        }


    echo json_encode($response->getResponse());

?>