
<?php
require_once("../inc/config.php");
if(isset($_GET["id"])){
	$id = $_GET["id"];
	$pesquisa = getPesquisa($id);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
		<title>Transportadora</title>
	</head>
	<body>

		<div class="drop">
			<ul class="drop_menu">
				<li><a href="/Hackathon/admin/index.php">Pesquisar</a></li>	
				<li><a href="logout.php">Sair</a></li>
			</ul>
		</div>
		<center>
			<h1>Transportadora</h1>
			<p>&nbsp;</p>
			<section>
				<table border = "1">
					<thead>
						<tr>
							<th style = "text-align: center;">Status</th>
							<th style = "text-align: center;">Data Ocorrencia</th>
							<th style = "text-align: center;">Fil/Ser/CT-e</th>
							<th style = "text-align: center;">Data</th>
							<th style = "text-align: center;">Filial</th>
							<th style = "text-align: center;">NF</th>
							<th style = "text-align: center;">Origem</th>
							<th style = "text-align: center;">Destino</th>
							<th style = "text-align: center;">Destinatario</th>
							<th style = "text-align: center;">Data Agendamento</th>
							<th style = "text-align: center;">Data Agenda Pog</th>
							<th style = "text-align: center;">Transit Time</th>
							<th style = "text-align: center;">Distância</th>
							<th style = "text-align: center;">Motorista</th>
							<th style = "text-align: center;">Cavalo</th>
							<th style = "text-align: center;">Carreta</th>
							<th style = "text-align: center;">Frota</th>
							<th style = "text-align: center;">DT</th>
							<th style = "text-align: center;">Ocorrência</th>
							<th style = "text-align: center;">Posições</th>
							<th style = "text-align: center;">Status</th>
							<th style = "text-align: center;">KM</th>
							<th style = "text-align: center;">Hrs Úteis</th>
						</tr>
					</thead>
					<tbody style = "text-align: center;">
						<?php
							$dataInicial = $_POST["dataInicial"];
							$dataFinal = $_POST["dataFinal"];	
							$status = $_POST["status"];
						    $filial = $_POST["filial"];
						    $motorista = $_POST["motorista"];
							getPesquisaLista2($dataInicial, $dataFinal, $status, $filial, $motorista); ?>
					</tbody>
				</table>
			</section>

		</center>
		<footer>
			<p><?php echo date("Y"); ?>&copy; Transportadora.</p>
		</footer>
	</body>
</html>