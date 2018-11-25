<?php

 function conectaDB(){
 	$pdo = null;
 	try{
 		$pdo = new PDO("mysql:host=localhost;dbname=transportadora", "root", "");
 	}catch(PDOException $e){
 		echo "Não foi possível conectar ao servidor de dados. <br>Erro: " . $e;
 	}
 	return $pdo;
 }

 

function acessa($email, $senha){
	$pdo = conectaDB();

	$sql = $pdo->query("SELECT * FROM acessos WHERE email = '$email' AND senha = '$senha'");

	$linha = $sql->fetch(PDO::FETCH_ASSOC);

	echo $linha;

	return $linha;
}


function getPesquisa($id){
	$pdo = conectaDB();
	$sql = $pdo->query("SELECT * FROM relatorios WHERE id = $id");

	$linha = $sql->fetch(PDO::FETCH_ASSOC);

	return $linha;

}

function getPesquisaLista(){
	$pdo = conectaDB();

	$sql = $pdo->query("SELECT * FROM relatorios");

	while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
		echo "<td>" . $linha["status"] . "</td>";
		echo "<td>" . $linha["dataOcorrencia"] . "</td>";
		echo "<td>" . $linha["CT-e"] . "</td>";
		echo "<td>" . $linha["data"] . "</td>";
		echo "<td>" . $linha["filial"] . "</td>";
		echo "<td>" . $linha["NF"] . "</td>";
		echo "<td>" . $linha["origem"] . "</td>";
		echo "<td>" . $linha["destino"] . "</td>";
		echo "<td>" . $linha["destinatario"] . "</td>";
		echo "<td>" . $linha["dataAgendamento"] . "</td>";
		echo "<td>" . $linha["dataAgendaProg"] . "</td>";
		echo "<td>" . $linha["transitTime"] . "</td>";
		echo "<td>" . $linha["distancia"] . "</td>";
		echo "<td>" . $linha["motorista"] . "</td>";
		echo "<td>" . $linha["cavalo"] . "</td>";
		echo "<td>" . $linha["carreta"] . "</td>";
		echo "<td>" . $linha["frota"] . "</td>";
		echo "<td>" . $linha["dt"] . "</td>";
		echo "<td>" . $linha["ocorrencia"] . "</td>";
		echo "<td>" . $linha["posicoes"] . "</td>";
		echo "<td>" . $linha["status2"] . "</td>";
		echo "<td>" . $linha["km"] . "</td>";
		echo "<td>" . $linha["hrsUteis"] . "</td>";
		echo "</tr>";
	}
}

function getPesquisaLista2($dataInicial, $dataFinal, $status, $filial, $motorista){
	$pdo = conectaDB();
	$pes = "";
	$aux = False;
	echo "<script>alert('teste'.$aux);</script>";

	if(($dataInicial != "") & ($dataFinal !="")){

		if($dataInicial < $dataFinal){
			$pes = "data BETWEEN " . "'" . $dataInicial ."'" . " AND " . "'" .$dataFinal ."'";
			$aux = True;
		}else{
			echo "<script>alert('DATA FINAL menor que DATA INICIAL');</script>";
			echo "<script>window.location='/Hackathon/admin/index.php';</script>";
		}

		
	 
	}

	if($status != ""){
		if($aux == False){
			$pes = "status LIKE "."'".$status."'";
			$aux = true;
		}else{
			$pes .= " AND status LIKE "."'".$status."'";
		}
		
	}

	if($filial != ""){
		if($aux == false){
			$pes = "filial LIKE "."'".$filial."'";
			$aux = true;
		}else{
			$pes .= " AND filial LIKE "."'".$filial."'";
		}
		
	}

	if($motorista != ""){
		if($aux == false){
			$pes = "motorista LIKE "."'".$motorista."'";
			$aux = true;
		}else{
			$pes .= " AND motorista LIKE "."'".$motorista."'";
		}
		
	}
	
	$sql = $pdo->query("SELECT * FROM relatorios WHERE " . $pes . ";");


	while($linha = $sql->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
		echo "<td>" . $linha["status"] . "</td>";
		echo "<td>" . $linha["dataOcorrencia"] . "</td>";
		echo "<td>" . $linha["CT-e"] . "</td>";
		echo "<td>" . $linha["data"] . "</td>";
		echo "<td>" . $linha["filial"] . "</td>";
		echo "<td>" . $linha["NF"] . "</td>";
		echo "<td>" . $linha["origem"] . "</td>";
		echo "<td>" . $linha["destino"] . "</td>";
		echo "<td>" . $linha["destinatario"] . "</td>";
		echo "<td>" . $linha["dataAgendamento"] . "</td>";
		echo "<td>" . $linha["dataAgendaProg"] . "</td>";
		echo "<td>" . $linha["transitTime"] . "</td>";
		echo "<td>" . $linha["distancia"] . "</td>";
		echo "<td>" . $linha["motorista"] . "</td>";
		echo "<td>" . $linha["cavalo"] . "</td>";
		echo "<td>" . $linha["carreta"] . "</td>";
		echo "<td>" . $linha["frota"] . "</td>";
		echo "<td>" . $linha["dt"] . "</td>";
		echo "<td>" . $linha["ocorrencia"] . "</td>";
		echo "<td>" . $linha["posicoes"] . "</td>";
		echo "<td>" . $linha["status2"] . "</td>";
		echo "<td>" . $linha["km"] . "</td>";
		echo "<td>" . $linha["hrsUteis"] . "</td>";
		echo "</tr>";
	}
}
?>