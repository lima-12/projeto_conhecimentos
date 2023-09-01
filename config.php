<?php
// Configurações de conexão com o banco de dados

$host = "localhost"; // O nome do servidor MySQL (geralmente "localhost" para servidor local)
$dbname = "usuarios"; // O nome do seu banco de dados
$username = "root"; // Seu nome de usuário do MySQL
$password = ""; // Sua senha do MySQL

try {
    // Cria uma nova instância de conexão PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Configura o PDO para lançar exceções em caso de erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "Conexão bem-sucedida com o banco de dados!";
} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem de erro
    echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}

