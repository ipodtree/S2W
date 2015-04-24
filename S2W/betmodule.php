<?php
	require_once("config.php");
	$conn=new Mongo();
	$db=$conn->Fixtures;
	$collection=$db->Results;


    $result = [0,0,0];
	$result2 = [0,0,0];
	$result3= [0,0,0];
	
	$rangeQuery = array('$or'=>array(array('HomeTeam'=>$_SESSION["team5_1"],'AwayTeam'=>$_SESSION["team5_2"]),array('HomeTeam'=>$_SESSION["team5_2"],'AwayTeam'=>$_SESSION["team5_1"])));
	#$rangeQuery = array('HomeTeam'=>$_SESSION["team4_1"],'AwayTeam'=>$_SESSION["team4_2"]);
	$cursor = $collection->find($rangeQuery);
	foreach ($cursor as $id => $value) {
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~from?~2009
	if($value['Year']<2010){
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
	}
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~from2010~2012
	elseif($value['Year']>2009&&$value['Year']<2013){
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
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~from2013~2014
	else{
		if($value['HomeTeam']==$_SESSION["team5_1"])
	{
		if ($value["HomeScore"] > $value["AwayScore"]) $result3[0]++;
			else if ($value["HomeScore"] < $value["AwayScore"]) $result3[2]++;
			else $result3[1]++;
		}
	else 
	{if ($value["HomeScore"] < $value["AwayScore"]) $result3[0]++;
			else if ($value["HomeScore"] > $value["AwayScore"]) $result3[2]++;
			else $result3[1]++;
		}
	}
}
if(($result3[0]+$result3[1]+$result3[2]!=0)&&($result2[0]+$result2[1]+$result2[2]!=0)&&($result[0]+$result[1]+$result[2]!=0))
{
$x=$result3[0]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[0]/($result2[0]+$result2[1]+$result2[2])*3500+$result[0]/($result[0]+$result[1]+$result[2])*1000;
$y=$result3[1]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[1]/($result2[0]+$result2[1]+$result2[2])*3500+$result[1]/($result[0]+$result[1]+$result[2])*1000;
$z=$result3[2]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[2]/($result2[0]+$result2[1]+$result2[2])*3500+$result[2]/($result[0]+$result[1]+$result[2])*1000;

if ($x>=$z)
	{
		$result=$_SESSION["team5_1"]."&nbsp;win&nbsp;";
		$a=$x;
		}
	else{
		$result=$_SESSION["team5_2"]."&nbsp;win&nbsp;";
		$a=$z;
	}
if($a<$y)
{$result="draw&nbsp;";}
}

else{$result="No data&nbsp;";}
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

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
		
		
		<div class="data9">
			<h2 style = "color:#000000"> 
			<?php echo "Here is the predict result&nbsp;&nbsp;" .$_SESSION["team5_1"]."&nbsp;&nbsp;vs&nbsp;&nbsp;".$_SESSION["team5_2"] ?> 
			</h2>
			<img src="Img/man.jpg" alt="" align="right">
		</div>
		
		<div class="data10">
		After analysing, the result would be <?php echo $result ?>! <br /><br />
		If you want to see more detail information, please log in first.
		</div>
		
		<div class="data14">
		<img src="Img/1.png" alt="" align="right">
		</div>
		
		<div class ="push"/>
		<?php include("footer.php"); ?></div>
	   
		
		 
	
</body>
	
</html>