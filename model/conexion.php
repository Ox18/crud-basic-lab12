<?php

   /**
    * Conexión a la base de datos
    * @Author: Wilmer Delgado -
    */
   class PDOConnection{
      private $servername = "localhost";
      private $database = "appservicios";
      private $username = "root";
      private $password = "";
      public $pdo;

      public function __construct(){
         try{
            $this->pdo = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
         }
      }
   }

   $pdoConnection = new PDOConnection();
   $pdo = $pdoConnection->pdo;
?>