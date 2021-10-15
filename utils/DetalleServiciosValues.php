<?php


    /**
     * Querys para hacer las consultas a la base de datos
     * de la tabla detalle servicio
     * @Author: Wilmer Delgado -
     */
    $QUERY_SELECT = "SELECT * FROM detalleservicios WHERE id_detalleservicio = :id_detalleservicio";
    $QUERY_SELECT_ALL = "SELECT * FROM detalleservicios";
    $QUERY_INSERT = "INSERT INTO detalleservicios (nombreServicio, precioBase, montoAdicional, id_Servicio) VALUES (:nombreServicio, :precioBase, :montoAdicional, :id_Servicio)";
    $QUERY_UPDATE = "UPDATE detalleservicios SET nombreServicio = :nombreServicio, precioBase = :precioBase, montoAdicional = :montoAdicional, id_Servicio = :id_Servicio WHERE id_detalleservicio = :id_detalleservicio";
    $QUERY_DELETE = "DELETE FROM detalleservicios WHERE id_detalleservicio = :id_detalleservicio";

    /**
     * Posibles respuestas del api para la sección de DetalleServicio
     */
    $RESPONSE_UPDATE_SUCCESS = "DetalleServicio actualizado correctamente";
    $RESPONSE_UPDATE_ERROR = "Error al actualizar el DetalleServicio";
    $RESPONSE_DELETE_SUCCESS = "DetalleServicio eliminado correctamente";
    $RESPONSE_DELETE_ERROR = "Error al eliminar el DetalleServicio";
    $RESPONSE_INSERT_SUCCESS = "DetalleServicio insertado correctamente";
    $RESPONSE_INSERT_ERROR = "Error al insertar el DetalleServicio";
    $RESPONSE_SELECT_ALL_SUCCESS = "DetalleServicio obtenidos correctamente";
    $RESPONSE_SELECT_ALL_SUCCESS_EMPTY = "No hay DetalleServicio registrados";
    $RESPONSE_SELECT_SUCCESS = "DetalleServicio obtenido correctamente";
    $RESPONSE_SELECT_ERROR = "Error al obtener el DetalleServicio";
    $RESPONSE_SELECT_EMPTY = "No hay DetalleServicio registrado con ese id";

?>