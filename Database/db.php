<?php 

    class Database{
        private $servername;
        private $user;
        private $password;
        private $dbname;

        public function __construct(){
            $this->servername = 'localhost';
            $this->user = 'root';
            $this->password = '';
            $this->dbname = 'login';
        }

        public function connect(){
            $pdo = new PDO($this->servername,$this->user,$this->password,$this->dbname);
            return $pdo;
        }


    }