<?php

 ?>

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
   }

   #principal{
      margin: 10%;
   }
 </style>

<main>

   <h3 class="text-center">Faça seu cadastro!</h3> 

   <section id="principal">
      <form method="post" action="#">

        <div class="row g-4">
            <div class="col-6">
               <label for="inputEmail4" class="form-label">Email</label>
               <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-6">
               <label for="inputPassword4" class="form-label">Password</label>
               <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="">
                <button class="btn btn-primary">enviar</button>
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