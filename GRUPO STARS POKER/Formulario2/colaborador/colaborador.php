<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro colaborador</title>
  <link rel="stylesheet" href="css2/css2.css">
</head>
<body>
  <div id="main-container">
    <h1>FAÇA SEU CADASTRO </h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box spacing">
          <label for="name">Empresa</label>
          <input type="text" name="empresa" id="empresa" placeholder="Digite sua empresa" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box spacing">
          <label for="name">Endereço</label>
          <input type="text" name="endereço" id="endereço" placeholder="Digite seu endereço" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname">CPF</label>
          <input type="number" name="cpf" id="cpf" placeholder="Digite seu cpf" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="">Código</label>
        <input type="number" name="codigo" id="codigo" placeholder="Digite seu codigo" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="">Telefone</label>
        <input type="number" name="telefone" id="telefone" placeholder="Digite seu telefone" data-password-validate data-required>
      </div>
      <div>
        <input type="checkbox" name="agreement" id="agreement">
        <label for="agreement" id="agreement-label">Eu li e aceito os <a href="https://www.pokerstars.com/br/help/articles/tos-com-web-art/105436/">termos de uso</a></label>
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar">
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
  <script src="js2/js2.js"></script>
</body>
</html>