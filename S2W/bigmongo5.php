<?php
session_start();
require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_line.php');

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

$team = $_SESSION["team3"];

for($year=1993;$year<2015;$year++)
{$result = yearGames($collection, $team, (string)$year);

$arraywin[]=$result[0];
$arraydraw[]=$result[2];
$arraylose[]=$result[1];
}

 $graph=new Graph(1300,600,"auto");
 $graph->img->SetMargin(50,40,30,40);
 $graph->img->SetAntiAliasing();
 $graph->SetScale("textlin");
 $graph->SetShadow();
 $graph->title->Set("The changing number of win/draw/lose matches over the past years");
 $graph->title->SetFont(FF_SIMSUN,FS_BOLD);
 $graph->SetMarginColor("lightblue");
 $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
 $graph->xaxis->SetPos("min");
 $graph->yaxis->HideZeroLabel();
 $graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
 $a=array("1993","1994","1995","1996","1997","1998","1999","2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013","2014");
 $graph->xaxis->SetTickLabels($a);
 $graph->xaxis->SetFont(FF_SIMSUN);
 $graph->yscale->SetGrace(20);
 
 $p1= new LinePlot($arraywin);
 $p1->SetLegend("Win");
 $p1->mark->SetType(MARK_FILLEDCIRCLE);
 $p1->mark->SetFillColor("red");
 $p1->mark->SetWidth(4);
 $p1->SetCenter();
 
 $p2= new LinePlot($arraydraw);
 $p2->SetLegend("Draw");
 $p2->mark->SetType(MARK_FILLEDCIRCLE);
 $p2->mark->SetFillColor("red");
 $p2->mark->SetWidth(4);
 $p2->SetCenter();
 
 $p3= new LinePlot($arraylose);
 $p3->SetLegend("Lose");
 $p3->mark->SetType(MARK_FILLEDCIRCLE);
 $p3->mark->SetFillColor("red");
 $p3->mark->SetWidth(4);
 $p3->SetCenter();
 
 $graph->Add($p1);
 $graph->Add($p2);
 $graph->Add($p3);

 $graph->Stroke();
 
?>