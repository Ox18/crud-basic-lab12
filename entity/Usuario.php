<?php

    /**
     * @Entity @Table(name="usuario")
     * @Author: Wilmer Delgado -
     */
    class Usuario{
        private $id;
        private $nombre;
        private $correo;
        private $password;
        private $direccion;
        private $rol;

        /**
         * @return mixed
         * @Id @Column(type="integer") @GeneratedValue  
         * @nombre @Column(type="string")
         * @correo @Column(type="string")
         * @password @Column(type="string")
         * @direccion @Column(type="string")
         * @rol @Column(type="string")
         */
        public function __construct($id, $nombre, $correo, $password, $direccion, $rol){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->correo = $correo;
            $this->password = $password;
            $this->direccion = $direccion;
            $this->rol = $rol;
        }

        /**
         * @return mixed
         * Método para tranformar la clase en objeto para que sea fácil de convertir a json
         */
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

        /**
         * Obtener id
         */
        public function getId(){
            return $this->id;
        }

        /**
         * Modificar id
         */
        public function setId($id){
            $this->id = $id;
        }

        /**
         * Obtener nombre
         */
        public function getNombre(){
            return $this->nombre;
        }

        /**
         * Modificar nombre
         */
        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        /**
         * Obtener correo
         */
        public function getCorreo(){
            return $this->correo;
        }

        /**
         * Modificar correo
         */
        public function setCorreo($correo){
            $this->correo = $correo;
        }

        /**
         * Obtener password
         */
        public function getPassword(){
            return $this->password;
        }

        /**
         * Modificar password
         */
        public function setPassword($password){
            $this->password = $password;
        }

        /**
         * Obtener direccion
         */
        public function getDireccion(){
            return $this->direccion;
        }

        /**
         * Modificar direccion
         */
        public function setDireccion($direccion){
            $this->direcccion = $direccion;
        }

        /**
         * Obtener rol
         */
        public function getRol(){
            return $this->rol;
        }

        /**
         * Modificar rol
         */
        public function setRol($rol){
            $this->rol = $rol;
        }
    }

?>