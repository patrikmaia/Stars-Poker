<!DOCTYPE html>
<html lang="en"> 
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STARS POKER</title>
    <link rel="stylesheet" href="css/style.css">
</head>  
  <body>
    <div id="main-container">    
        <H1>CADASTRE SUA EMPRESA </H1>
          <form action="querecebe.php" method="POST" id="register-form" onsubmit="myFunction()">
            <div class="full-box">           
              <label for="name">Nome</label>
              <input class="input" type="text" name="nome" id="nome" placeholder="Digite seu o nome da sua empresa" data-max-lenght="20">
            </div> 
            <div class="full-box ">
              <label for="text">Endereço</label>
              <input type="text"name="endereço"  id="endereço" placeholder="Digite seu endereço" data-max-lenght="200">
            </div> 
            <div class="full-box">  
              <label for="email">E-mail</label>
              <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="6"data-required data-email-validate>
            </div>  
            <div class="full-box">
              <label for="number">Número de telefone</label>
              <input type="number" name="numero" id="numero" placeholder="Digite seu numero" data-min-length="6">
            </div>
            <div class="full-box">
              <label for="">Código</label>
              <input type="number" name="codigo" id="codigo"  placeholder="Digite seu codigo">
            </div>
            <div class="full-box">
              <label for="">CNPJ</label>
              <input type="number" name="cnpj" id="cnpj" placeholder="Digite seu cnpj" data-min-length="6">
            </div>
            <div class="half-box">
              <input  type="submit" id="btn-submit type="  value="Registrar">
            </div>
          </form>
          <h3><a href="colaborador/colaborador.php">COLABORADOR CLIQUE AQUI</a></h3>  
    <p class="error-validation template"></p>
    <script src="js/scripts.js"></script>
    </div>      
  </body>
</html>