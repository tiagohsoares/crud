<?php
 //Conectar Banco de dados MySQL
 class conexao {
    public $db;

    public function db ($db){
        $this->db = $db; 
    }
    
    public function conecte($db){
    $this->db = new PDO("mysql:host=localhost;port=3306;dbname=businessdb;charset=utf8mb4", "root", "",);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao bem-sucedida!";
    return $db;
    }
}