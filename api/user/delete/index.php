<?php

    include "../../../utils/Response.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();
    
    try {

        $id = $_GET['id'];
 
        $query = $pdo->prepare($QUERY_UPDATE);
        $query->bindParam(":id_usuaio", $id);

        $query->execute();
        
        if($query->rowCount() == 0){
            $response->setMessage($RESPONSE_DELETE_SUCCESS);
        }else{
            $response->setMessage($RESPONSE_DELETE_ERROR);
        }
     } catch (PDOException $e) {
        $response->addError($e->getMessage());
     }
    unset($pdo);   
    echo json_encode($response->getResponse());

?>