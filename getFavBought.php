<?php
include('config.php');

if($_GET['q'] == 'fav')
{
	$query_list= mysql_query("SELECT * FROM favourites F, product P
							Where F.idProduct = P.idProduct");
	//echo "favoritos";




	$counter3 = 0;

	while($result_list = mysql_fetch_array($query_list))
	{

		if(($counter3 % 6) == 0){
			echo "<li>";
		}

		?>

				<a href="javascript:void(0)" onclick="changeImg('<?php echo $result_list['image'];?>'); selectCamisa('shirt'+'<?php echo $result_list['idFavourites'];?>');" >
				<img class="listCamisa" id="shirt<?php echo $result_list['idFavourites'];?>" src="<?php echo $result_list['image'];?>" width="90" height="90"/></a>

<?php

		if ((($counter3 + 1)% 6) == 0)
		{
			echo "</li>";
		}
		$counter3 ++;


	}

}


elseif($_GET['q'] == 'bought')
{
	$query_list= mysql_query("SELECT * FROM bought B, product P
							Where B.idProduct = P.idProduct");
	//echo "bought";


	$counter3 = 0;

	while($result_list = mysql_fetch_array($query_list))
	{

		if(($counter3 % 6) == 0){
			echo "<li>";
		}

		?>

				<a href="javascript:void(0)" onclick="changeImg2('<?php echo $result_list['image'];?>');  selectCamisa('shirt'+'<?php echo $result_list['idBought'];?>');" >
				<img class="listCamisa" id="shirt<?php echo $result_list['idBought'];?>" src="<?php echo $result_list['image'];?>" width="90" height="90"/></a>

		<?php

		if ((($counter3 + 1)% 6) == 0)
		{
			echo "</li>";
		}
		$counter3 ++;


	}

}
?>

<script>
	var sliderFav;
	$(function(){
		sliderFav = $('.favSlider').bxSlider({
        	mode:'fade',
        	auto: false
		});
	});
	</script>
