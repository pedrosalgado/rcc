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



	<table>


	<?php
	$counter = 0;

	while ($result_tecidos = mysql_fetch_array($query_tecidos))
	{

	if (($counter % 3) == 0){
		echo "<tr>";
	}
	?>


        <td>
        <a class='group2' href='#create-your-shirt' ondblclick="callColor()" data-img="<?php echo $result_tecidos['imageBig']; ?>">
		<img src=" <?php echo ($result_tecidos['image']); ?> " width='74' height='74'/></a>
		</td>

	<?php
		if ((($counter+1) % 3) == 0){
			echo "</tr>";
		}

		$counter ++;
		}

	//echo $_GET['q'];

	?>
      </table>