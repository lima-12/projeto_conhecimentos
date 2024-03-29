<?php

require_once 'config.php';

$statement = $pdo->query('SELECT * FROM usuarios_cadastrados;');

$list = $statement->fetchAll(PDO::FETCH_ASSOC); # a propriedade do fetch_assoc trás os dados como um array associativo

// echo '<pre>'; print_r($list);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrados </title>
    
    <!-- importações -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <!-- jquery -->
    <script src="scripts/code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">
            <button class="btn btn-primary" id="voltarBtn">
                voltar
            </button>
        </a>
</div>
</nav>

<div class="container text-center">
    <div class="row align-items-center">
        <div class="col-4">
            
        </div>
        <div class="col-8">
            <div class="table-container" style="max-height: 400px; overflow-y: auto;">
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Gmail</th>
                            <th>Telefone</th>
                            <th>Área</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($list as $dados){ ?>
                            <tr>
                                <td><?=$dados['id']?></td>
                                <td><?=$dados['nome']?></td>
                                <td><?=$dados['gmail']?></td>
                                <td><?=$dados['telefone']?></td>
                                <td><?=$dados['linguagem']?></td>
                                <td> 
                                    <button class="btn btn-outline-danger delete-button" data-id="<?=$dados['id']?>"> 
                                        <i class="bi bi-trash"></i> 
                                    </button> 
                                    <button type="button" class="btn btn-outline-primary"> <i class="bi bi-pencil"></i> </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>

<script>

    document.getElementById('voltarBtn').addEventListener('click', function() {
        window.location.href = 'index.php';
    });

    $(document).ready(function() {

        $('.delete-button').click(function() {
        var id = $(this).data('id');

            if (confirm('Tem certeza de que deseja excluir este registro?')) {
                $.ajax({
                    url: 'excluir_registro.php',
                    method: 'POST',
                    data: { id: id },
                    success: function(response) {
                        // console.log('Exclusão bem-sucedida');
                        window.location.reload(true)
                    },
                    error: function() {
                        alert('Erro ao excluir o registro.');
                    }
                });
            }
        });

    });
</script>
