<?php
include("seguranca.php"); 
if (isset($_COOKIE['enquete_php']))
{
	exit ('<p>Você já votou nesta enquete.</p>'.$_COOKIE['enquete_php']);		
} else {
	$opcao = strip_tags($_POST['opcao']);
	$id_pergunta = $_POST['id_pergunta'];
	$id_pergunta = filter_var($id_pergunta, FILTER_SANITIZE_NUMBER_INT);
	
	if ($id_pergunta!='' and $opcao!='')
	{
		$consulta = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'") or die(mysql_error());
		if (mysql_num_rows($consulta)>0)
		{
			$query = mysql_fetch_array($consulta);
			extract($query);
			switch($opcao)
			{
				case "op01";
				$voto = $op01_n + 1;
				mysql_query("UPDATE enquete SET op01_n='$voto' WHERE id='$id_pergunta'");
				break;
		
				case "op02";
				$voto = $op02_n + 1;
				mysql_query("UPDATE enquete SET op02_n='$voto' WHERE id='$id_pergunta'");
				break;
			}
		}
			
		$busca_total = mysql_query("SELECT * FROM enquete WHERE id='$id_pergunta'");
		
		$resultado = mysql_fetch_array($busca_total);
		/*extract($resultado, EXTR_PREFIX_ALL, 'e');
		$total = $e_op01_n + $e_op02_n + $e_op03_n;

		echo '<p><strong>Obrigado por votar! Veja o resultado parcial:</strong></p>';
		
		echo '<p>'.$e_pergunta.'</p>';
		
		echo '<p>'.$e_op01. ': '.$e_op01_n. ' votos</p>';
		echo '<p>'.$e_op02. ': '.$e_op02_n. ' votos</p>';
		echo '<p>'.$e_op03. ': '.$e_op03_n. ' votos</p>';
		echo '<p>Total de votos: '.$total.'</p>';*/
		echo json_encode($resultado);
	}
}
	header('location: index.php');
?>