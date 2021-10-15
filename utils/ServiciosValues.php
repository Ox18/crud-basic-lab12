<?php

    /**
     * Querys para hacer las consultas a la base de datos
     * de la tabla servicios
     * @Author: Wilmer Delgado -
     */
    $QUERY_SELECT = "SELECT * FROM servicios WHERE id_servicio = :id_servicio";
    $QUERY_SELECT_ALL = "SELECT * FROM servicios";
    $QUERY_INSERT = "INSERT INTO servicios (descripcion, id_usuaio) VALUES (:descripcion, :id_usuaio)";
    $QUERY_UPDATE = "UPDATE servicios SET descripcion = :descripcion, id_usuaio = :id_usuaio WHERE id_servicio = :id_servicio";
    $QUERY_DELETE = "DELETE FROM servicios WHERE id_servicio = :id_servicio";

    /**
     * Posibles respuestas del api para la sección de servicios
     */
    $RESPONSE_UPDATE_SUCCESS = "servicio actualizado correctamente";
    $RESPONSE_UPDATE_ERROR = "Error al actualizar el servicio";
    $RESPONSE_DELETE_SUCCESS = "servicio eliminado correctamente";
    $RESPONSE_DELETE_ERROR = "Error al eliminar el servicio";
    $RESPONSE_INSERT_SUCCESS = "servicio insertado correctamente";
    $RESPONSE_INSERT_ERROR = "Error al insertar el servicio";
    $RESPONSE_SELECT_ALL_SUCCESS = "servicio obtenidos correctamente";
    $RESPONSE_SELECT_ALL_SUCCESS_EMPTY = "No hay servicio registrados";
    $RESPONSE_SELECT_SUCCESS = "servicio obtenido correctamente";
    $RESPONSE_SELECT_ERROR = "Error al obtener el servicio";
    $RESPONSE_SELECT_EMPTY = "No hay servicio registrado con ese id";
?>