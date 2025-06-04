<?php

class Database {
    private $pdo;

    // Injeção de dependência via construtor
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function listarUsuarios() {
        $stmt = $this->pdo->prepare("SELECT * FROM user where id = ?");
        $stmt->bindParam(1, $fname, PDO::PARAM_STR_CHAR);
        return $stmt->fetchAll();
    }
}
