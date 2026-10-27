<?php
try {
    $host = getenv('DB_HOST') ?: 'localhost';
    $database = getenv('DB_NAME') ?: 'loja_cafe';
    $user = getenv('DB_USER') ?: 'root';
    $password = getenv('DB_PASSWORD');

    if ($password === false) {
        throw new PDOException('A variável de ambiente DB_PASSWORD não foi configurada.');
    }

    $pdo = new PDO(
        "mysql:host=$host;dbname=$database;charset=utf8mb4",
        $user,
        $password
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $erro) {
    error_log($erro->getMessage());
    exit("Não foi possível conectar ao banco.");
}