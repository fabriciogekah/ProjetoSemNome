<?php
// Created and tested by: Russo - Valdeijr
$host = "localhost"; 
$user = "site";
$passwd = "b-_m-fK*Nq(z.SzF"; 
$banco = "housefy"; 
$keyword = get_cfg_var("pepper");
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

$passwd = hash_hmac("sha256", $password, $keyword);
$passwd_hashed = password_hash($passwd, PASSWORD_ARGON2ID);

#$sql = mysqli_query($link, "INSERT INTO users(email, passwd, name, id, address, postal, city, uf) VALUES('$email', '$passwd_hashed', '$nome', '$cpf', '$address', '$cep', '$city', '$uf')");
echo "<center>Cadastro efetuado com sucesso!</center><meta http-equiv='refresh' content='10;URL=../pages/registration'>";
$link->close();
?>
</body>
</html>