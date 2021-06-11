<?php include_once "config.php";?>
<html>
  <body>
      <?php 
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $endereço = $_POST["endereço"];
        $numero = $_POST["numero"];
        $codigo = $_POST["codigo"];
        $cnpj = $_POST["cnpj"];
        $senha = $_POST["senha"];
        $conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);

        mysqli_select_db($conn, '$dbname');
        $sql = "INSERT INTO tbformulario2 (nome,email,endereço,numero,codigo,cnpj,senha) VALUES ('$nome', '$email', '$endereço', '$numero', '$codigo', '$cnpj', '$senha')";
        if ( mysqli_query($conn, $sql)) {
            echo "<script>alert('Seus dados foram salvos com sucesso!'); window.location = 'index.php'; </script>";

        }
        else {
            echo "Erro" . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
      ?>
    </body>
</html>