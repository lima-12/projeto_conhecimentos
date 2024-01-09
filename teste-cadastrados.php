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
    <script src="util/script/jquery-1.11.3.js"></script>
    <script src="util/script/jquery.validate.min.js"></script>
    <script src="util/script/additional-methods.min.js"></script>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    
    <!-- jquery -->
    <script src="scripts/code.jquery.com_jquery-3.7.1.js"></script>

    <style>

        .t {
            max-height: 100vh; /* Define a altura máxima da div da esquerda */
            
            overflow-y: auto; /* Habilita a rolagem vertical quando o conteúdo exceder a altura máxima */
        }

        #direito {
            border: 1px solid grey;
        }


    </style>
</head>
<body>

    <?php require_once 'includes/navbar.html' ?>

    <section class="d-flex flex-row justify-content-around">  

        <div id="direito" style="width: 40%;">
            <h1>lado esquerdo da pagina</h1>
            <p>pensando em fazer uma possivel modificacao pra quando selecionar um card le ter uma melhor visualizacao, tipo o corriculo mais completo do usuario</p>
        </div>

        <div style="width: 60%;" class="t">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <?php foreach($list as $dados){ ?>
                    <div class="col">
                        <div class="card border-dark">
                            <img src="includes/sem-foto.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title"><?=$dados['nome']?> - <?=$dados['linguagem']?></h5>

                                        <p class="card-text"> <?=$dados['texto']?> </p>
                                        <p class="card-text"> <?=$dados['gmail']?> </p>
                                </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>   
</body>
</html>

<script>
$(document).ready(function() {
  $('.delete-button').click(function() {
    var id = $(this).data('id');
        if (confirm('Tem certeza de que deseja excluir este registro?')) {
            $.ajax({
                url: 'excluir_registro.php',
                method: 'POST',
                data: { id: id },
                success: function(response) {
                    console.log('Exclusão bem-sucedida');
                    console.log('Resposta bruta do servidor:', response);

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
