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

   section{
      color: white;
      padding: 4%;
      /* margin: 1em; */
      background-color: #837E9F;
      border-radius: 10px;
   }

</style>

<main>
   <section id="principal">
      <form method="post" action="verifica_login.php">

         <div class="row g-4">
               <div class="col-6">
                  <label for="inputEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                  <div id="mensagem"></div>
               </div>
               <div class="col-6">
                  <label for="inputPassword" class="form-label">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="inputPassword">
               </div>
               <div class="col-12">
                  <button class="btn btn-primary" type="submit" name="submit" id="submit">Entrar</button>
                  <a href="cadastro.php"><button class="btn btn-success" type="button">Cadastrar-se</button></a>
               </div>
         </div>

      </form>
   </section>

</main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>