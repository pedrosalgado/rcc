<?php include("config.php");?>
<!DOCTYPE>
<html>
<head>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js">
        </script>
<script type="text/javascript" src="http://www.rcc.pt/templates/js/jquery.bxSlider.min.js"></script>

<script>

			$(document).ready(function(){

	            //bxslider
				var slider = $('.favSlider').bxSlider({
					mode: 'fade',
			auto: true,
			pager: true,
			pagerType:'short',
	  		infiniteLoop: false
				});

			});


</script>

</head>

<body>
	<div class="myListRight">
		<div class="englobaListRight">
		<span class="gold myListTitle divTitle">My List</span>
		<hr/>

			<div class="contentList">
				<ul id="fav_bought" class="favSlider">
				<?php
				$query_list= mysql_query("SELECT * FROM favourites F, product P
									Where F.idProduct = P.idProduct");

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
					?>
					</ul>

				</div>

				<hr/>
			</div>




</body>
</html>