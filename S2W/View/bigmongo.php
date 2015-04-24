<?php
session_start();
require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_bar.php');

$conn=new Mongo();
$db=$conn->Fixtures;
$collection=$db->Results;

$arrayname=array();
$arrayscore=array();
$rangeQuery = array('Year'=>$_SESSION["year"],'Journey'=>$_SESSION["journey"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayname[]=$value['HomeTeam'];
$arrayname[]=$value['AwayTeam'];
$arrayscore[]=$value['HomeScore'];
$arrayscore[]=$value['AwayScore'];
}

$graph = new Graph(1800,500,'auto');	
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->SetMarginColor("yellow");							
$graph->img->SetMargin(40,30,40,40);


$graph->xaxis->title->Set('Teams');
$graph->xaxis->title->SetFont(FF_SIMSUN,FS_BOLD);
$graph->xaxis->SetTickLabels($arrayname);

$graph->title->Set('The number of scores of different teams');
$graph->title->SetFont(FF_SIMSUN,FS_BOLD);

$bplot1 = new BarPlot($arrayscore);


$bplot1->SetFillColor("blue");


$bplot1->SetShadow();


$gbarplot = new GroupBarPlot(array($bplot1));
$gbarplot->SetWidth(0.3);

$graph->Add($gbarplot);
$graph->Stroke();



?>