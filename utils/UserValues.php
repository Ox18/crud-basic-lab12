<?php

    $QUERY_SELECT = "SELECT * FROM usuaio WHERE id_usuaio = :id_usuaio";
    $QUERY_SELECT_ALL = "SELECT * FROM usuaio";
    $QUERY_INSERT = "INSERT INTO usuaio (nome, email, senha) VALUES (:nome, :email, :senha)";
    $QUERY_UPDATE = "UPDATE usuaio SET nome = :nome, email = :email, senha = :senha WHERE id = :id";
    $QUERY_DELETE = "DELETE FROM usuaio WHERE id = :id";
?>