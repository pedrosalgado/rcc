<?php
include('config.php');


	if($_GET['q'] == 'popular')
	{
 		$query_tecidos= mysql_query("SELECT * FROM tecidos ORDER BY popular DESC LIMIT 9");
	}

	elseif($_GET['q'] == 'all')
	{
		$query_tecidos= mysql_query("SELECT * FROM tecidos");
	}

	else{
		$query_tecidos= mysql_query("SELECT * FROM padrao P, tecidos T
											WHERE p.idPadrao = T.idPadrao
											AND p.idPadrao =".$_GET['q']."");
	}


?>



	<?php
	$counter = 0;

	while ($result_tecidos = mysql_fetch_array($query_tecidos))
	{

	if (($counter % 3) == 0){
		echo "<div>";
	}
	?>



        <a class='group2' href='#create-your-shirt' ondblclick="callColor('<?php echo $result_tecidos['nomeTecido'];?>')" data-img="<?php echo $result_tecidos['imageBig']; ?>">
		<img class="listTecido" id="<?php echo $result_tecidos['idTecido'];?>" src=" <?php echo ($result_tecidos['image']); ?> " width='74' height='74'/></a>


	<?php
		if ((($counter+1) % 3) == 0){
			echo "</div>";
		}

		$counter ++;
		}

	?>