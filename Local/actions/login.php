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
    <title>Login</title>
  </head>
<body>
<?php
$email=$_POST['email'];
$passwd=$_POST['passwd'];
$result = mysqli_query($link, "SELECT * FROM users WHERE email = '$email' and passwd = '$passwd'");
$row = mysqli_num_rows($result);
if ($row > 0) {
  $_SESSION['email'] = $email;
  $_SESSION['passwd'] = $passwd;
  header('location:../pages/house');
} else {
  unset ($_SESSION['email']);
  unset ($_SESSION['passwd']);
  header('location:../index');
}
echo "<center>Login efetuado com sucesso!</center><meta http-equiv='refresh' content='2;URL=../pages/house'>";
$link->close();
?>
</body>
</html>