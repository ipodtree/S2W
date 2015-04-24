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
	
	$rangeQuery = array('$or'=>array(array('HomeTeam'=>$_SESSION["team4_1"],'AwayTeam'=>$_SESSION["team4_2"]),array('HomeTeam'=>$_SESSION["team4_2"],'AwayTeam'=>$_SESSION["team4_1"])));
	#$rangeQuery = array('HomeTeam'=>$_SESSION["team4_1"],'AwayTeam'=>$_SESSION["team4_2"]);
	$cursor = $collection->find($rangeQuery);
	foreach ($cursor as $id => $value) {
	$arrayyear[]=$value['Year'];
	$arrayjourney[]=$value['Journey'];
	$arrayhometeam[]=$value['HomeTeam'];
	$arrayawayteam[]=$value['AwayTeam'];
	$arrayhomescore[]=$value['HomeScore'];
	$arrayawayscore[]=$value['AwayScore'];
	$arrayaffluence[]=$value['Affluence'];
	
	
	if($value['HomeTeam']==$_SESSION["team4_1"])
	{
		if ($value["HomeScore"] > $value["AwayScore"]) $result[0]++;
			else if ($value["HomeScore"] < $value["AwayScore"]) $result[2]++;
			else $result[1]++;
	}
	else 
	{if ($value["HomeScore"] < $value["AwayScore"]) $result[0]++;
			else if ($value["HomeScore"] > $value["AwayScore"]) $result[2]++;
			else $result[1]++;}
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~	
	if($value['Year']>2009){
	if($value['HomeTeam']==$_SESSION["team4_1"])
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
  <link rel="stylesheet" type="text/css" href="CSS\modulePages.css" />
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  
  
        <?php include("menu.php"); ?>
		<div class="wrapper">
		
			<h2 style = "color:#66CCFF"> 
			<?php echo "Here are the history combats of Team1:&nbsp;".$_SESSION["team4_1"]."&nbsp;and Team2:&nbsp;".$_SESSION["team4_2"]; ?> 
			</h2>
		
		<div class="module">

			<table width="600" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="4">
						Summary <?php echo $_SESSION["team4_1"]?> vs <?php echo $_SESSION["team4_2"]?>
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Total</td>
						<td height="25" align="center">Win</td>
						<td height="25" align="center">Draw</td>
						<td height="25" align="center">Lose</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center"><?php echo (count($arrayyear)-1)?></td>
						<td height="25" align="center"><?php echo $result[0];?></td>
						<td height="25" align="center"><?php echo $result[1];?></td>
						<td height="25" align="center"><?php echo $result[2];?></td>
					</tr>
			</table>
			
			<table width="600" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="4">
						The latest five years (from 2010~2014) summary <?php echo $_SESSION["team4_1"]?> vs <?php echo $_SESSION["team4_2"]?>
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
			
			<table width="1300" height="24" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="7">
						The detail history combats of these two teams over the past years
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Year</td>
						<td height="25" align="center">Journey</td>
						<td height="25" align="center">HomeTeam</td>
						<td height="25" align="center">AwayTeam</td>
						<td height="25" align="center">HomeScore</td>
						<td height="25" align="center">AwayScore</td>
						<td height="25" align="center">Affluence</td>
					</tr>
					<?php 
					for($i=1;$i<count($arrayyear);$i++)
					{
					?>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center"><?php echo $arrayyear[$i]?></td>
						<td height="25" align="center"><?php echo $arrayjourney[$i]?></td>
						<td height="25" align="center"><?php echo $arrayhometeam[$i]?></td>
						<td height="25" align="center"><?php echo $arrayawayteam[$i]?></td>
						<td height="25" align="center"><?php echo $arrayhomescore[$i]?></td>
						<td height="25" align="center"><?php echo $arrayawayscore[$i]?></td>
						<td height="25" align="center"><?php echo $arrayaffluence[$i]?></td>
					</tr>
					<?php
					}
					?>
					</table>
					
			
		</div>
		
		
		<div class ="button">
			<input type="button" onclick="window.location.href='biaodan.php'" value="Return to search">
		</div>
		
		</div>
		<?php include("footer.php"); ?></div>
	   
		
		 
	
</body>
	
</html>
