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

$data=array($x,$y,$z);
$graph=new PieGraph(600,300,"auto");
$graph->SetShadow();

$graph->title->Set("The win rate prediction");
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);

$p1=new PiePlot3D($data);
$p1->SetLegends(array("win","draw","lose"));
$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3","pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p1->SetCSIMTargets($targ,$alts);

$p1->SetCenter(0.5,0.4);
$graph->Add($p1);
$graph->Stroke();

?>