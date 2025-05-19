<?php
 //Conectar Banco de dados MySQL
 class conexao {

    public $db;
    
function test (){


 try {
    $db = new PDO("mysql:host=localhost;port=3306;dbname=businessdb;charset=utf8mb4", "root", "",);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexao bem-sucedida!";
 } catch (Exception $e) {
    echo "Sem conexao";
    die();
 }
}
 }