<?php
// Inclua o arquivo de conexão com o banco de dados
require 'config.php';

// print_r($_POST);

$email = $_POST['inputEmail'];

$sqlSelect = "SELECT * FROM usuarios_cadastrados WHERE gmail = :email";  

$statement = $pdo->prepare($sqlSelect);

$statement->bindParam(':email', $email, PDO::PARAM_STR);

if ($statement->execute()) {
    if ($statement->rowCount() > 0){
        echo "<script>
        // alert('Enviado com sucesso!');
        window.location = 'listagem.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Gmail não encontrado, Faça Seu cadastro!');
        history.go(-1);
        </script>";
    }   
}