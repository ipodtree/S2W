<?php
	require_once("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="CSS\modulePages.css" />
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  
  
        <?php include("menu.php"); ?>
		<div class="wrapper">
		
		<h2> 
			<?php echo "Here is the result for these three periods:&nbsp;"?> 
		</h2>
		<div class="module">
			<img src="bigmongo2.php" alt="">
		</div>
		
		<div class ="button">
			<input type="button" onclick="window.location.href='biaodan.php'" value="Return to search">
		</div>
		
		</div> <!-- wrapper -->
		<?php include("footer.php"); ?></div>
	   
		
		 
	
</body>
	
</html>