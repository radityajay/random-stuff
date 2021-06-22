<?php
    class Database{
        private $DB_HOST = 'localhost';
        private $DB_USER = 'root';
        private $DB_PASS = '';
        private $DB_NAME = 'random_stuff';

        protected $conn;

        public function __construct(){
            $this->conn = new PDO("mysql:host=" . $this->DB_HOST .";dbname=" . $this->DB_NAME, $this->DB_USER, $this->DB_PASS);
        }
    }
?>