<?php

    /**
     * Response class
     * Clase estandarizada para recibir respuestas de la API
     * @Author: Wilmer Delgado -
     */
    class Response{

        private $error;
        private $data;
        private $message;

        /**
         * Constructor
         * @param $error {bol} Valida si hay un error en la solicitud 
         * @param $data {array} Datos de la respuesta
         * @param $message {string} Mensaje de la respuesta
         */
        public function __construct(){
            $this->error = false;
            $this->message = "empty";
            $this->data = new stdClass();
        }

        /**
         * Retorna la respuesta en formato Diccionario para poder ser convertida a JSON facilmente
         */
        public function getResponse(){
            return [
                "error" => $this->getError(),
                "message" => $this->getMessage(),
                "data" => $this->getData()
            ];
        }

        /**
         * @return mixed
         * Agrega un dato a la respuesta e inserta un mensaje de satisfacción
         */
        public function addSuccess($data, $message = "Petición correcta"){
            $this->setData($data);
            $this->setError(false);
            $this->setMessage($message);
        }

        /**
         * @param $message
         * Inserta un error junto con su mensaje en la respuesta
         * @return void
         */
        public function addError($message){
            $this->setError(true);
            $this->setMessage($message);
        }

        /**
         * @return mixed
         * Activa o desactiva el error de respuesta
         */
        public function setError($error){
            $this->error = $error;
        }

        /**
         * @return bool
         * Devuelve si la respuesta es correcta o no
         */
        public function getError(){
            return $this->error;
        }

        /**
         * @return mixed
         * Inserta un mensaje de error
         */
        public function setMessage($message){
            $this->message = $message;
        }

        /**
         * @return mixed
         * Devuelve el mensaje de la respuesta
         */
        public function getMessage(){
            return $this->message;
        }

        /**
         * @param mixed $data
         * Inserta los datos de la respuesta
         */
        public function setData($data){
            $this->data = $data;
        }

        /**
         * @return mixed
         * Devuelve los datos de la respuesta
         */
        public function getData(){
            return $this->data;
        }
    }

?>