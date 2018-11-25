<?php
session_start();
if(!isset($_SESSION['id_acesso'])){
	echo "<script>window.location.href='../login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="../images/biblioteca.png">
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<title>Administração da Transportadora</title>
	</head>
	<body>
		<div class="drop">
			<ul class="drop_menu">
				<li><a href="/Hackathon/login.php">Home</a></li>
				<li><a href="logout.php">Sair</a></li>
			</ul>
		</div>
		<center>
			<h1>Pesquisa</h1>
		<?php
		?>		
			<section>
				<div class="formulario">
					<form action = "pesquisa.php" method="POST">		
						<label>Data Inicial</label>
						<input type="date" name="dataInicial" autofocus>
						<br>
						<br>
						<br>
						<label>Data Final</label>
						<input type="date" name="dataFinal" autofocus >
						<br>
						<br>
						<br>
						<label>Digite o Status</label>
						<input type="text" name="status" autofocus >
						<br>
						<br>
						<br>
						<label>Grupo de Clientes</label>
						<input type="text" name="grupoClientes" autofocus >
						<br>
						<br>
						<br>
						<label>Filial</label>
						<input type="text" name="filial" autofocus >
						<br>
						<br>
						<br>
						<label>Nome do motorista</label>
						<input type="text" name="motorista" autofocus >
						<br>
						<br>
						<br>
						<input type="submit" name='submit' value="OK">
					</form>
				</div>
			</section>
			<?php
		?>
			<p>&nbsp;</p>
		</center>
		<footer>
			<p><?php echo date("Y"); ?>&copy; Transportadora.</p>
		</footer>
	</body>
</html>