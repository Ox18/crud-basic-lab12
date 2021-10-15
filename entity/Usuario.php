<?php

    class Usuario{
        private $id = "";
        private $nombre = "";
        private $correo = "";
        private $password = "";
        private $direccion = "";
        private $rol = "";

        public function __construct($id, $nombre, $correo, $password, $direccion, $rol){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->password = $password;
            $this->direccion = $direccion;
            $this->rol = $rol;
        }

        // make getters and setters
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function setCorreo($correo){
            $this->correo = $correo;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function setDireccion($direccion){
            $this->direcccion = $direccion;
        }

        public function getRol(){
            return $this->rol;
        }

        public function setRol($rol){
            $this->rol = $rol;
        }

        public function toObject(){
            $object = new stdClass();
            $object->id = $this->getId();
            $object->nombre = $this->getNombre();
            $object->correo = $this->getCorreo();
            $object->password = $this->getPassword();
            $object->direccion = $this->getDireccion();
            $object->rol = $this->getRol();
            return $object;
        }

    }

?>