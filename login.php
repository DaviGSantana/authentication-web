<?php
$liga = mysqli_connect("localhost", "root", "root", "BDD");

$login = $_GET['login'];
$senha = $_get['senha'];

$sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'"

$query = mysqli_query($liga, $sql);

if (mysqli_num_rows($query) == 1) {
	header(Location: admin.php);
}else{
	echo "<body style 'background-color:#1a1a1a'>";

	echo "<span style='color:red;'><center><br><br><hr><br><h3>Login ou Senha Incorretos! =( </h3></br><hr></center></span>";
}

?>
