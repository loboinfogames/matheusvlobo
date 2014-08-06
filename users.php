<?php
session_start(); // começa a session
 
	if(!isset($_SESSION["sessioname"])){
		echo "ACESSO NEGADO";
	}
	else{
		require_once "config.php"; // inclui a conexão a database
 
	$username = $_SESSION["sessioname"];
	$sql = mysql_query("SELECT * FROM users WHERE username='$username'") or die("O nome de Utilizador ou Senha está incorrecto. MySQL erro:".mysql_error()); // vê se o username existe ou não
	$result = mysql_fetch_array($sql); // põem as informações da database numa array
 
 
// A partir de aqui a tua pagina fica protegida...
echo "Bem-Vindo " . $_SESSION["sessioname"] . " o teu email é: " . $result['email'];
?>
 
//BEM vindo ao site ;) 
 
<?php
}
?>