
<?php

require_once __DIR__ . '/../src/conexao.php';

if (isset($pdo) && $pdo instanceof PDO) {
    echo "Conexão realizada com sucesso!";
}
