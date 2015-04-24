<?php
	require_once("config.php");
	require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
	require_once ('D:/Program Files/jpgraph/src/jpgraph_pie.php');
	require_once ('D:/Program Files/jpgraph/src/jpgraph_pie3d.php');

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

$x=$result3[0]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[0]/($result2[0]+$result2[1]+$result2[2])*3500+$result[0]/($result[0]+$result[1]+$result[2])*1000;
$y=$result3[1]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[1]/($result2[0]+$result2[1]+$result2[2])*3500+$result[1]/($result[0]+$result[1]+$result[2])*1000;
$z=$result3[2]/($result3[0]+$result3[1]+$result3[2])*5500+$result2[2]/($result2[0]+$result2[1]+$result2[2])*3500+$result[2]/($result[0]+$result[1]+$result[2])*1000;
#~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
if($x>$z)
{ if(($x/($x+$y+$z)-$z/($x+$y+$z))*100>30){
		$x1=0.6*$x;$x2=0.3*$x;$x3=0.1*$x;
		$z1=0.7*$z;$z2=0.25*$z;$z3=0.05*$z;
		}
	else{
		$x1=0.7*$x;$x2=0.25*$x;$x3=0.05*$x;
		$z1=0.6*$z;$z2=0.3*$z;$z3=0.1*$z;
	}
}
else{
	if(($z/($x+$y+$z)-$x/($x+$y+$z))*100>30){
		$x1=0.7*$x;$x2=0.25*$x;$x3=0.05*$x;
		$z1=0.6*$z;$z2=0.3*$z;$z3=0.1*$z;
	}
	else{
		$x1=0.6*$x;$x2=0.3*$x;$x3=0.1*$x;
		$z1=0.7*$z;$z2=0.25*$z;$z3=0.05*$z;
	}
}

echo $x;
echo "<br />";
echo $y;
echo "<br />";
echo $z;
echo "<br />";
echo $x1;
echo "<br />";
echo $x2;
echo "<br />";
echo $x3;
echo "<br />";
echo $z1;
echo "<br />";
echo $z2;
echo "<br />";
echo $z3;
echo "<br />";
?>