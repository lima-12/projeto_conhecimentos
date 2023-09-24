<?php
// Inclua o arquivo de conexão com o banco de dados
require 'config.php';

// Verifique se o ID do registro a ser excluído foi fornecido via POST
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sqlDelete = "DELETE FROM usuarios_cadastrados WHERE id = :id";
    
    try {
        $statement = $pdo->prepare($sqlDelete);
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        
        if ($statement->execute()) {
            // Exclusão bem-sucedida
            echo json_encode(['status' => 'success']);
        } else {
            // Erro na exclusão
            echo json_encode(['status' => 'error']);
        }
    } catch (PDOException $e) {
        // Lidar com erros do PDO
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
} else {
    // ID não fornecido
    echo json_encode(['status' => 'error', 'message' => 'ID do registro não fornecido.']);
}
?>

?>
