<?php
	require_once("config.php");
	$conn=new Mongo();
	$db=$conn->Fixtures;
	$collection=$db->Results;
	
	$arrayyear[]=array();
	$arrayjourney[]=array();
	$arrayhometeam[]=array();
	$arrayawayteam[]=array();
	$arrayhomescore[]=array();
	$arrayawayscore[]=array();
	$arrayaffluence[]=array();
	
	$result = [0,0,0];
	$result2 = [0,0,0];
	
	$rangeQuery = array('$or'=>array(array('HomeTeam'=>$_SESSION["team5_1"],'AwayTeam'=>$_SESSION["team5_2"]),array('HomeTeam'=>$_SESSION["team5_2"],'AwayTeam'=>$_SESSION["team5_1"])));

	$cursor = $collection->find($rangeQuery);
	foreach ($cursor as $id => $value) {
	$arrayyear[]=$value['Year'];
	$arrayjourney[]=$value['Journey'];
	$arrayhometeam[]=$value['HomeTeam'];
	$arrayawayteam[]=$value['AwayTeam'];
	$arrayhomescore[]=$value['HomeScore'];
	$arrayawayscore[]=$value['AwayScore'];
	$arrayaffluence[]=$value['Affluence'];
	
	
	if($value['HomeTeam']==$_SESSION["team5_1"])
	{
		if ($value["HomeScore"] > $value["AwayScore"]) $result[0]++;
			else if ($value["HomeScore"] < $value["AwayScore"]) $result[2]++;
			else $result[1]++;
	}
	else 
	{if ($value["HomeScore"] < $value["AwayScore"]) $result[0]++;
			else if ($value["HomeScore"] > $value["AwayScore"]) $result[2]++;
			else $result[1]++;}
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~from 2010~2014	
	if($value['Year']>2009){
	if($value['HomeTeam']==$_SESSION["team5_1"])
	{
		if ($value["HomeScore"] > $value["AwayScore"]) $result2[0]++;
			else if ($value["HomeScore"] < $value["AwayScore"]) $result2[2]++;
			else $result2[1]++;
		}
	else 
	{if ($value["HomeScore"] < $value["AwayScore"]) $result2[0]++;
			else if ($value["HomeScore"] > $value["AwayScore"]) $result2[2]++;
			else $result2[1]++;
		}
	}
}
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
		
		<div class ="push"/>
		<input type="button" onclick="window.location.href='betbiaodan.php'" value="Return to predict">
		
		
		<div class="data12">
			<h2 style = "color:#000000"> 
			<?php echo "Here is the detail predict result&nbsp;&nbsp;" .$_SESSION["team5_1"]."&nbsp;&nbsp;vs&nbsp;&nbsp;".$_SESSION["team5_2"] ?> 
			</h2>
			<img src="Img/man.jpg" alt="" align="right">
			
			<div class="data13">
				You can make a bet now according to the win rate and net score prediction showed left. <br /><br />Good luck, my dear friend !
			</div>
			
			<table width="600" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="4">
						The latest five years (from 2010~2014) summary <?php echo $_SESSION["team5_1"]?> vs <?php echo $_SESSION["team5_2"]?>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Total</td>
						<td height="25" align="center">Win</td>
						<td height="25" align="center">Draw</td>
						<td height="25" align="center">Lose</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center"><?php echo ($result2[0]+$result2[1]+$result2[2])?></td>
						<td height="25" align="center"><?php echo $result2[0];?></td>
						<td height="25" align="center"><?php echo $result2[1];?></td>
						<td height="25" align="center"><?php echo $result2[2];?></td>
					</tr>
			</table>
			
			<div class="data11">
			<img src="winpre.php" alt="" align="center">
			</div>
			
			<div class="data11">
			<img src="scorepre.php" alt="" align="center">
			</div>
			
		</div>
		
		
		<div class ="push"/>
		<?php include("footer.php"); ?></div>
	   
		
		 
	
</body>
	
</html>