<?php

    /**
     * @Entity @Table(name="servicios")
     * @Author: Wilmer Delgado -
     */
    class Servicios{

        private $id_servicio;
        private $descripcion;
        private $id_usuario;

        /**
         * Servicios constructor.
         * @param $id_servicio
         * @param $descripcion
         * @param $id_usuario
         */
        public function __construct($id_servicio, $descripcion, $id_usuario){
            $this->id_servicio = $id_servicio;
            $this->descripcion = $descripcion;
            $this->id_usuario = $id_usuario;
        }

        /**
         * @return mixed
         * Método para tranformar la clase en objeto para que sea fácil de convertir a json
         */
        public function toObject(){
            $object = new stdClass();
            $object->id_servicio = $this->id_servicio;
            $object->descripcion = $this->descripcion;
            $object->id_usuario = $this->id_usuario;
            return $object;
        }

        /**
         * Obtener id
         */
        public function getId_servicio(){
            return $this->id_servicio;
        }

        /**
         * Obtener descripcion
         */
        public function getDescripcion(){
            return $this->descripcion;
        }

        /**
         * Obtener id_usuario
         */
        public function getId_usuario(){
            return $this->id_usuario;
        }

        /**
         * Asignar id
         */
        public function setId_servicio($id_servicio){
            $this->id_servicio = $id_servicio;
        }

        /**
         * Asignar descripcion
         */
        public function setDescripcion($descripcion){
            $this->descripcion = $descripcion;
        }

        /**
         * Asignar id_usuario
         */
        public function setId_usuario($id_usuario){
            $this->id_usuario = $id_usuario;
        }
    }

?>