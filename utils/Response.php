<?php

    /**
     * Response class
     * Clase estandarizada para recibir respuestas de la API
     */
    class Response{

        private $error;
        private $data;
        private $message;

        // make constructor
        public function __construct(){
            // set default header
            $this->error = false;
            $this->message = "empty";
            $this->data = new stdClass();
        }

        public function getResponse(){
            return [
                "error" => $this->getError(),
                "message" => $this->getMessage(),
                "data" => $this->getData()
            ];
        }

        public function addSuccess($data){
            $this->setData($data);
            $this->setError(true);
            $this->setMessage("Success");
        }

        public function addError($message){
            $this->setError(false);
            $this->setMessage($message);
        }

        public function setError($error){
            $this->error = $error;
        }

        public function getError(){
            return $this->error;
        }

        public function setMessage($message){
            $this->message = $message;
        }

        public function getMessage(){
            return $this->message;
        }

        public function setData($data){
            $this->data = $data;
        }

        public function getData(){
            return $this->data;
        }
    }

?>