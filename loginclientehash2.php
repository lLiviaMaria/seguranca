<?php
//pegar a senha e criptografar para logar no banco//
include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];
//login com criptografia hash //
$senha = base64_encode($senha);
$sql = "select * from cliente where email='$email' and senha='$senha'";

$resultado = mysqli_query($conexao, $sql);
$total     = mysqli_num_rows($resultado);

if ( $total>0 ) {
	$dados = mysqli_fetch_array($resultado);
	
	echo "Logado";
} else {
	echo "Não logado";
}

?>