<?php
class conexao {
    private $pdo;

    public function __construct() {
        $dsn = "mysql:host=localhost;dbname=meu_banco;charset=utf8mb4";
        $username = "root";
        $password = "";

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $username, $password, $options);
            print ("Voce esta conectado!");
        } catch (PDOException $e) {
            throw new Exception("Erro na conexão: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}