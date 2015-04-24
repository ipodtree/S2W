<?php
	require_once("config.php");
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="CSS\style.css" />
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  
        <?php include("menu.php"); ?>
		 
	 <div class="wrapper">

		<div class="data1">
			<img src="Img/data1.png" alt="">
		</div>
		
		<div class="data2">
		<video src="video.mp4" width="400" height="300" controls="controls" autoplay="autoplay">
			Your browser does not support the video tag.
			</video>
		</div>
		
		<div class="data3">
			<img src="Img/data3.png" alt="">
		</div>
		
		<div class="data4">
			<h2> L'avis de l'expert Footix</h2>
		    <img src="Img/data4.png" alt=""> <br>
			Le week-end prochain votez tous Marseille, enfin je crois ...
		</div>
		
		<div class="data5">
			<h2 style = "color:#66CCFF"> Qui pour la 3eme place ? </h2>
			Cette annee Marseille, Lyon et evidemment le PSG se battent pour une place sur le podium. Si le titre est forcement predestine au PSG, la deuxieme place reste indecise entre deux
			equipes en forme l'OM et l'OL. Une chose est sur, la bataille entre les deux olympiques va faire rage.
		</div>
		
		<div class="data6">
			<img src="Img/data6.png" alt="">
		</div>
		
		<div class="data7">
			<img src="Img/data7.png" alt="">
		</div>
		
		
		<div class ="push"></div>
		
	</div>
	<?php include("footer.php"); ?>
		 
	
</body>
	
</html>