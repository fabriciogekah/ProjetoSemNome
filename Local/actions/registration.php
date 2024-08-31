<?php
// Created and tested by: Russo - Valdeijr
$host = " "; #ip do host
$user = " "; #user bd
$passwd = " "; #senha bd
$banco = " "; #nome bd
$link = mysqli_connect($host, $user, $passwd);
if (!$link) {
    die('Não conectado : ' . mysql_error());
}
$mysqli = mysqli_select_db($link, $banco);
?>

<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Doue seu cool</title>
  </head>
<body>
<?php
$email=$_POST['email'];
$password=$_POST['password'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$address=$_POST['address'];
$cep=$_POST['cep'];
$city=$_POST['city'];
$uf=$_POST['uf'];
$sql = mysqli_query($link, "INSERT INTO usuarios(email, senha, nome, cpf, endereco, cep, cidade, uf) VALUES('$email', '$password', '$nome', '$cpf', '$address', '$cep', '$city', '$uf')");
echo "<center>Cadastro efetuado com sucesso!</center><meta http-equiv='refresh' content='1;URL=#'>";
$link->close();
?>
</body>
</html>