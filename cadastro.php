<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

    <!-- importações -->

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- jquery -->
    <script src="scripts/code.jquery.com_jquery-3.7.1.js"></script>
</head>

<body>

<style>
    body{
        font-family: Arial, Helvetica, sans-serif;
        /* background: rgb(2,0,36);
        background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,121,33,1) 100%, rgba(0,212,255,1) 100%); */
        /* background-color: #302F3D; */
        background-color: #22212C;
    }

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 1em;
        padding: 10% 30%;
        
    }

    #principal_esquerda{
        color: white;
        padding: 4%;
        /* margin: 1em; */
        background-color: #837E9F;
        border-radius: 10px;
    }

    .form-control{
        /* background: #302F3D; */
    }

</style>

<main>

    <section id="principal_esquerda">

        <h3>Faça seu Cadastro!</h3>
        <form method="post" action="inserirCadastro.php">

            <div class="row g-4"> 

            <div class="col-sm-6">
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
            </div>   
            <div class="col-sm-6">
                <input type="text" class="form-control" name="gmail" id="gmail" placeholder="Gmail" required >
            </div>

            <div class="col-sm-6"> 
                <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="Telefone" required>
            </div>

            <div class="col-sm-6">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
            </div>

            
            <div class="col-4">
                <div class="form-check m-1">
                    <input class="form-check-input" type="radio" value="front_end" id="front_end" name="checkbox" >
                    <label class="form-check-label" for="">Front-End</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-check m-1">
                    <input class="form-check-input" type="radio" value="back_end" id="back_end" name="checkbox">
                    <label class="form-check-label" for="">Back-End</label>
                </div>
            </div>

            <div class="col-4">
                <div class="form-check m-1">
                    <input class="form-check-input" type="radio" value="full_stack" id="full_stack" name="checkbox">
                    <label class="form-check-label" for="">Full Stack</label>
                </div>
            </div>

            <div class="col-12">               
                <textarea class="form-control" id="textarea" name="textarea" rows="3" placeholder="Por que Você gostaria de fazer parte da Empresa?" required></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="submit" id="submit">Salvar</button>
            </div>
            </div>
        </form>
            
        </section>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>
    </html>

<script>

    function Mudarestado(section)
    {
    /*
    Função que adiciona e remove seção da página através dos atributos block e none
    */
    var display = document.getElementById(section).style.display;
    if(display == "none")
        document.getElementById(section).style.display = 'block';
    else
        document.getElementById(section).style.display = 'none';
    }

    function preencheCheckboox()
    {
    // Obtém todos os checkboxes da página com esse id especifico
    var checkboxes = document.querySelectorAll('input[id="flexCheckChecked"]');

    // Verifica o estado do primeiro checkbox para determinar a ação
    var firstCheckbox = checkboxes[0];
    var isChecked = firstCheckbox.checked;

        // Alterna o estado de todos os checkboxes
    checkboxes.forEach(function(checkbox) {
        checkbox.checked = !isChecked;
    });
    }

</script>