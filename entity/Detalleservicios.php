<?php

    /**
     * @Entity @Table(name="detalleservicio")
     * @Author: Wilmer Delgado -
     */
class DetalleServicios{
    private $id_detalleservicio;
    private $nombreServicio;
    private $precioBase;
    private $montoAdicional;
    private $id_Servicio;

    /**
     * DetalleServicio constructor
     * @param $id_detalleservicio
     * @param $nombreServicio
     * @param $precioBase
     * @param $montoAdicional
     * @param $id_Servicio
     */
    public function __construct($id_detalleservicio, $nombreServicio, $precioBase, $montoAdicional, $id_Servicio){
        $this->id_detalleservicio = $id_detalleservicio;
        $this->nombreServicio = $nombreServicio;
        $this->precioBase = $precioBase;
        $this->montoAdicional = $montoAdicional;
        $this->id_Servicio = $id_Servicio;
    }

    /**
         * @return mixed
         * Método para tranformar la clase en objeto para que sea fácil de convertir a json
         */
    public function toObject(){
        $object = new stdClass();
        $object->id_detalleservicio = $this->id_detalleservicio;
        $object->nombreServicio = $this->nombreServicio;
        $object->precioBase = $this->precioBase;
        $object->montoAdicional = $this->montoAdicional;
        $object->id_Servicio = $this->id_Servicio;
        return $object;
    }

    /**
     * @return mixed
     * Obtener id_detalleservicio
     */
    public function getId_detalleservicio(){
        return $this->id_detalleservicio;
    }

    /**
     * @param mixed $id_detalleservicio
     * Asignar id_detalleservicio
     */
    public function setId_detalleservicio($id_detalleservicio){
        $this->id_detalleservicio = $id_detalleservicio;
    }

    /**
     * @return mixed
     * Obtener nombreServicio
     */
    public function getNombreServicio(){
        return $this->nombreServicio;
    }

    /**
     * @param mixed $nombreServicio
     * Asignar nombreServicio
     */
    public function setNombreServicio($nombreServicio){
        $this->nombreServicio = $nombreServicio;
    }

    /**
     * @return mixed
     * Obtener precioBase
     */
    public function getPrecioBase(){
        return $this->precioBase;
    }

    /**
     * @param mixed $precioBase
     * Asignar precioBase
     */
    public function setPrecioBase($precioBase){
        $this->precioBase = $precioBase;
    }

    /**
     * @return mixed
     * Obtener montoAdicional
     */
    public function getMontoAdicional(){
        return $this->montoAdicional;
    }

    /**
     * @param mixed $montoAdicional
     * Asignar montoAdicional
     */
    public function setMontoAdicional($montoAdicional){
        $this->montoAdicional = $montoAdicional;
    }

    /**
     * @return mixed
     * Obtener id_Servicio
     */
    public function getId_Servicio(){
        return $this->id_Servicio;
    }

    /**
     * @param mixed $id_Servicio
     * Asignar id_Servicio
     */
    public function setId_Servicio($id_Servicio){
        $this->id_Servicio = $id_Servicio;
    }
}

?>