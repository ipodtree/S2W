<?php
session_start();
require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_bar.php');

$m = new MongoClient();
// sélection d'une bdd et d'une collection
$db = $m->Fixtures;
$collection = $db->Results;


// Find out how many times a given team won (0), lose (1), even(2) in a given year
function yearGames($collection, $team, $year){
	// $query=array('$or'=>array(array('HomeTeam'=>$equipe),array('AwayTeam'=>$equipe)));
	$query=array('Year'=>$year);
	$cursor = $collection->find($query);
	$result = [0,0,0];
	foreach ($cursor as $doc){
		if ($team == $doc["HomeTeam"]){
			if ($doc["HomeScore"] > $doc["AwayScore"]) $result[0]++;
			else if ($doc["HomeScore"] < $doc["AwayScore"]) $result[1]++;
			else $result[2]++;
		}
		else if ($team == $doc["AwayTeam"]){
			if ($doc["HomeScore"] > $doc["AwayScore"]) $result[1]++;
			else if ($doc["HomeScore"] < $doc["AwayScore"]) $result[0]++;
			else $result[2]++;
		}
}	
return $result;
}

$arraywin=array();
$arraydraw=array();
$arraylose=array();
$arrayname=array();


$team = $_SESSION["team2_1"];
$year = $_SESSION["year4_1"];
$result = yearGames($collection, $team, $year);

$arraywin[]=$result[0];
$arraydraw[]=$result[2];
$arraylose[]=$result[1];

$team = $_SESSION["team2_2"];
$year = $_SESSION["year4_2"];
$result = yearGames($collection, $team, $year);

$arraywin[]=$result[0];
$arraydraw[]=$result[2];
$arraylose[]=$result[1];

$team = $_SESSION["team2_3"];
$year = $_SESSION["year4_3"];
$result = yearGames($collection, $team, $year);

$arraywin[]=$result[0];
$arraydraw[]=$result[2];
$arraylose[]=$result[1];

$graph = new Graph(800,600,'auto');	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->SetMarginColor("yellow");							
$graph->img->SetMargin(40,30,40,40);

$arrayname[]=$_SESSION["team2_1"];
$arrayname[]=$_SESSION["team2_2"];
$arrayname[]=$_SESSION["team2_3"];


$graph->xaxis->title->Set('Teams');
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->SetTickLabels($arrayname);

$graph->title->Set('The performance of different teams');
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);

$bplot1 = new BarPlot($arraywin);
$bplot2 = new BarPlot($arraydraw);
$bplot3 = new BarPlot($arraylose);

$bplot1->SetFillColor("orange");
$bplot2->SetFillColor("lightblue");
$bplot3->SetFillColor("red");

$bplot1->SetShadow();
$bplot2->SetShadow();
$bplot3->SetShadow();

$gbarplot = new GroupBarPlot(array($bplot1,$bplot2,$bplot3));
$gbarplot->SetWidth(0.6);
$graph->Add($gbarplot);

$graph->Stroke();
?>


