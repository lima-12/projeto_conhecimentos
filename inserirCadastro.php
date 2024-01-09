<?php

require 'config.php';

// echo "<pre>";  print_r($_POST); echo "</pre>"; exit;

if ($_POST['checkbox']){
    $checkbox = $_POST['checkbox'];
} else {
    $checkbox = '';
}



if (isset($_POST["submit"])) {
    $sqlInsert = "INSERT INTO usuarios_cadastrados (nome, gmail, telefone, senha, linguagem, texto) VALUES (:nome, :gmail, :telefone, :senha,  :linguagem, :texto)";

    $statement = $pdo->prepare($sqlInsert);

   // Use os nomes corretos dos parâmetros na função bindValue
    $statement->bindValue(':nome', $_POST['nome']);
    $statement->bindValue(':gmail', $_POST['gmail']);
    $statement->bindValue(':telefone', $_POST['telefone']);
    $statement->bindValue(':senha', $_POST['senha']);

   // Vincule o valor diretamente ao checkbox
    $statement->bindValue(':linguagem', $checkbox);

    $statement->bindValue(':texto', $_POST['textarea']);

    if ($statement->execute()) {
        echo "<script>
        alert('Inserido com Sucesso');
        window.location='index.php'</script>
        </script>";
    } else {
        echo 'Erro ao inserir usuário!';
    }
}


?>