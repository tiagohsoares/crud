<?php
class Cadastro {
    private $db;

    public function __construct(PDO $pdo) {
        $this->db = $pdo;
    }
}