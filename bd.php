<?php
try {
    // Configurações do banco de dados
    $host = getenv('NEONDB_HOST');
    $port = 5432;
    $dbname = "neondb";
    $user = "neondb_owner";
    $password = getenv('NEONDB_OWNER_PASSWORD');

    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname;sslmode=require";

    $db = new PDO($dsn, $user, $password);

    // Configurar PDO para lançar exceções em caso de erro
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Exibir mensagem de erro, caso ocorra
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}

