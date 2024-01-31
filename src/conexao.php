<?php
    class Conexao{
        public $host = "localhost";
        public $dbname      = "teste";
        public $username = "levi";
        public $password = "levi123";
        
        public function conectar(){
            $conexao= new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(!$conexao){
                echo("Não conectou...");
            }
            return $conexao;
        }
    }    
?>