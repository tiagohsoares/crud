<?php
class conexao {
    private $pdo;

    public function __construct() {

        $dsn = "mysql:host=[$_ENV;dbname=meu_banco;charset=utf8mb4";
        $username = "root";
        $password = "";
        $localhost = $_ENV['DB_NAME'];
        $dbname = $_ENV['DB_NAME']
        $charset = 'utf8mb4';
    
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