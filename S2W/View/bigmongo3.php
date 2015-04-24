<?php
session_start();
require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_line.php');
 
$conn=new Mongo();
$db=$conn->Fixtures;
$collection=$db->Results;

$arrayjourney=array();
$arrayscore=array();

/*$rangeQuery = array('Year'=>$_SESSION["year3"],'HomeTeam'=>$_SESSION["team"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayscore[]=$value['HomeScore'];
$arrayjourney[]=$value['Journey'];
}

$rangeQuery = array('Year'=>$_SESSION["year3"],'AwayTeam'=>$_SESSION["team"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayscore[]=$value['AwayScore'];
$arrayjourney[]=$value['Journey'];
}*/

function scoresYear($collection, $team, $year){	
	$i =0;
	$query = array ('$and'=>array(
		array('Year'=>$year),
		array('$or'=>(array(
			array('HomeTeam'=>$team),
			array('AwayTeam'=>$team))))));
	$cursor = $collection->find($query);
	//$result = 0;
	foreach ($cursor as $doc){
		$journey = $doc["Journey"];
		if ($team == $doc["HomeTeam"]){
			$result[$journey-1] = $doc["HomeScore"];
		}
		else $result[$journey-1] = $doc["AwayScore"];
	}
	return $result;
}
    
	$result = scoresYear($collection, $_SESSION["team"], $_SESSION["year3"]);
	$arrayscore=$result;
		
 $graph=new Graph(1300,600,"auto");
 $graph->img->SetMargin(50,40,30,40);
 $graph->img->SetAntiAliasing();
 $graph->SetScale("textlin");
 $graph->SetShadow();
 $graph->title->Set("The changing number of score in different journeys");
 $graph->title->SetFont(FF_SIMSUN,FS_BOLD);
 $graph->SetMarginColor("lightblue");
 $graph->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
 $graph->xaxis->SetPos("min");
 $graph->yaxis->HideZeroLabel();
 $graph->ygrid->SetFill(true,'#EFEFEF@0.5','#BBCCFF@0.5');
 

// $graph->xaxis->SetTickLabels($arrayjourney);
 //$graph->xaxis->SetFont(FF_SIMSUN);
 $graph->yscale->SetGrace(20);
 
 $p1= new LinePlot($arrayscore);
 $p1->mark->SetType(MARK_FILLEDCIRCLE);
 $p1->mark->SetFillColor("red");
 $p1->mark->SetWidth(4);
 $p1->SetCenter();

 

 $graph->Add($p1);

 $graph->Stroke();
 ?>