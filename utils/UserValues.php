<?php

    /**
     * Querys para hacer las consultas a la base de datos
     * de la tabla user
     * @Author: Wilmer Delgado -
     */
    $QUERY_SELECT = "SELECT * FROM usuaio WHERE id_usuaio = :id";
    $QUERY_SELECT_ALL = "SELECT * FROM usuaio";
    $QUERY_INSERT = "INSERT INTO usuaio (nombre, correo, password, direccion, rol) VALUES (:nombre, :correo, :password, :direccion, :rol)";
    $QUERY_UPDATE = "UPDATE usuaio SET nombre = :nombre, correo = :correo, password = :password, direccion = :direccion, rol = :rol WHERE id_usuaio = :id";
    $QUERY_DELETE = "DELETE FROM usuaio WHERE id_usuaio = :id_usuaio";

    /**
     * Posibles respuestas del api para la sección de usuarios
     */
    $RESPONSE_UPDATE_SUCCESS = "Usuario actualizado correctamente";
    $RESPONSE_UPDATE_ERROR = "Error al actualizar el usuario";
    $RESPONSE_DELETE_SUCCESS = "Usuario eliminado correctamente";
    $RESPONSE_DELETE_ERROR = "Error al eliminar el usuario";
    $RESPONSE_INSERT_SUCCESS = "Usuario insertado correctamente";
    $RESPONSE_INSERT_ERROR = "Error al insertar el usuario";
    $RESPONSE_SELECT_ALL_SUCCESS = "Usuarios obtenidos correctamente";
    $RESPONSE_SELECT_ALL_SUCCESS_EMPTY = "No hay usuarios registrados";
    $RESPONSE_SELECT_SUCCESS = "Usuario obtenido correctamente";
    $RESPONSE_SELECT_ERROR = "Error al obtener el usuario";
    $RESPONSE_SELECT_EMPTY = "No hay usuario registrado con ese id";
?>