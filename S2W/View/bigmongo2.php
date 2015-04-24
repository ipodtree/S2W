<?php
session_start();
require_once ('D:/Program Files/jpgraph/src/jpgraph.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_pie.php');
require_once ('D:/Program Files/jpgraph/src/jpgraph_pie3d.php');

$conn=new Mongo();
$db=$conn->Fixtures;
$collection=$db->Results;

$arrayname1=array();
$arrayname2=array();
$arrayname3=array();

$arrayscore1=array();
$arrayscore2=array();
$arrayscore3=array();

$rangeQuery = array('Year'=>$_SESSION["year2_1"],'Journey'=>$_SESSION["journey2_1"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayname1[]=$value['HomeTeam'];
$arrayname1[]=$value['AwayTeam'];
$arrayscore1[]=$value['HomeScore'];
$arrayscore1[]=$value['AwayScore'];
}

$rangeQuery = array('Year'=>$_SESSION["year2_2"],'Journey'=>$_SESSION["journey2_2"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayname2[]=$value['HomeTeam'];
$arrayname2[]=$value['AwayTeam'];
$arrayscore2[]=$value['HomeScore'];
$arrayscore2[]=$value['AwayScore'];
}

$rangeQuery = array('Year'=>$_SESSION["year2_3"],'Journey'=>$_SESSION["journey2_3"]);
$cursor = $collection->find($rangeQuery);
foreach ($cursor as $id => $value) {
$arrayname3[]=$value['HomeTeam'];
$arrayname3[]=$value['AwayTeam'];
$arrayscore3[]=$value['HomeScore'];
$arrayscore3[]=$value['AwayScore'];
}

		
$graph=new PieGraph(1300,1000,"auto");
$graph->SetShadow();
$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL);



$p1=new PiePlot3D($arrayscore1);
$p1->SetLegends($arrayname1);
$p1->SetSize(0.2);

$p2=new PiePlot3D($arrayscore2);
$p2->SetLegends($arrayname2);
$p2->SetSize(0.2);

$p3=new PiePlot3D($arrayscore3);
$p2->SetLegends($arrayname3);
$p3->SetSize(0.2);




/*$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3","pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p1->SetCSIMTargets($targ,$alts);


$targ=array("pie3d_csimex1.php?v=1","pie3d_csimex1.php?v=2","pie3d_csimex1.php?v=3","pie3d_csimex1.php?v=4","pie3d_csimex1.php?v=5","pie3d_csimex1.php?v=6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$p2->SetCSIMTargets($targ,$alts);*/

$p1->SetCenter(0.3,0.2);
$p2->SetCenter(0.7,0.2);
$p3->SetCenter(0.5,0.6);
$graph->Add($p1);
$graph->Add($p2);
$graph->Add($p3);
$graph->Stroke();