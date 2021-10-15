<?php

    include "../../../utils/Response.php";
    include "../../../entity/Usuario.php";
    include "../../../utils/UserValues.php";

    require_once("../../../model/conexion.php");

    header('Content-Type: application/json; charset=utf-8');

    $response = new Response();
    
    try {

        $id = $_GET['id'];
        $sql = "DELETE FROM usuaio WHERE id_usuaio = '$id'";
        $query = $pdo->query($sql);
        $count = $query->rowCount();

        if($count == 0){
            $response->setMessage("No se elimino ningun usuario");
        }else{
            $response->setMessage("Se elimino al usuario");
        }
        echo "Records were deleted successfully.";
     } catch (PDOException $e) {
        $response->addError($e->getMessage());
     }
    unset($pdo);   
    echo json_encode($response->getResponse());

?>