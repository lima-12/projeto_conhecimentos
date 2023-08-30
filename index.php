<?php

$checkboxValues = [0, 0, 1];

$checkbox1 = $checkboxValues[0] == 1 ? "checked" : "";
$checkbox2 = $checkboxValues[1] == 1 ? "checked" : "";
$checkbox3 = $checkboxValues[2] == 1 ? "checked" : "";


// print_r($checkboxValues);

 ?>

 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcções Auxiliares</title>

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
   }

   #principal{
      margin: 10%;
   }
 </style>

<main id="principal">

   <section>
      <form method="post" action="tratar.php">
         <h3 class="text-center mb-4">Preencha de acordo com o seu Perfil!</h3> 

         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="checkbox1" <?php echo $checkbox1; ?>>
            <label class="form-check-label" for="">Php</label>
         </div>

         <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="checkbox2" <?php echo $checkbox2; ?>>
            <label class="form-check-label" for="">HTML e CSS</label>
         </div>

         <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" name="checkbox3" <?php echo $checkbox3; ?>>
            <label class="form-check-label" for="">JavaScript</label>
         </div>

         <div class="mb-4"> <!--margim button (abaixo)-->
            <label for="Textarea" class="form-label">Por que Você gostaria de fazer parte da empresa?</label>
            <textarea class="form-control" id="Textarea" rows="3"></textarea>
         </div>

         <div class="mb-4">
            <label for="formFile" class="form-label">Envie seu currículo</label>
            <input class="form-control" type="file" id="formFile">
         </div>

         <br><br>
         <button class="btn btn-primary">enviar</button>
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