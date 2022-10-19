<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_bar.php');
include('kumasiorantop.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$dabt=array($dabt1,$dabt2,$dabt3,$dabtr,$kpa1,$kpa2,/*$kpa3,*/$kpar,$opa1,$opa2,$kkk,$bcg,$hepb1,$hepb2,$hepb3,$hepa1,$hepar,$sc);
$asim=array($asim1,$asim2,$asim3,$asimr,$askpa1,$askpa2,/*$askpa3,*/$askpar,$asopa1,$asopa2,$askkk,$asbcg,$ashepb1,$ashepb2,$ashepb3,$ashepa1,$ashepar,$assc);
$renk=array("red","red","red","red","yellow","yellow","yellow","yellow","blue","blue","cyan","green","brown","brown","brown","orange","orange","black");
$minimum=0;
$maximum=max($dabt);
$ayim="AYI";
$yili="YILI";
$hedef="(Kümülatif Hedef Bebek Nüfus:";
$prkapa=")";
$tariharalik=$yilgelen.' '.$yili.' '.$aygelen.' '.$ayim;
$hedefnuf=$hedef.' '.round(((($tverim119/$ay)/12)*$ay),0).' '.$prkapa;
$top="";
$baslikmetin='TOPLAM AŞILAMA ORANLARI';
$baslik=$neresi.' '.$top.' '.$tariharalik.' '.$baslikmetin;
// Create the graph. 
// One minute timeout for the cached image
// INLINE_NO means don't stream it back to the browser.
$graph = new Graph(1280,768,"auto");	
$graph->SetScale("textlin",$minimum,$maximum);
$graph->img->SetMargin(50,20,20,240);
$graph->SetMarginColor('white');
$graph->xaxis->SetFont(FF_ARIAL,FS_BOLD);
$graph->yaxis->SetFont(FF_ARIAL,FS_BOLD);
$graph->legend->SetAbsPos(10,10,'right','top');
$graph->legend->SetFillColor('white');
$graph->legend->SetFont(FF_ARIAL,FS_NORMAL);
$graph->xaxis->SetTickLabels($asim);
$graph->xaxis->SetLabelAngle(90);
//$graph->yscale->SetGrace(30,0,20);
$graph->SetShadow();
// Turn the tickmarks
$graph->xaxis->SetTickSide(SIDE_DOWN);
$graph->yaxis->SetTickSide(SIDE_LEFT);
// Create a bar pot
$bplot = new BarPlot($dabt);
//$bplot->SetLegend("DaBT-1\nDaBT-2");
$bplot->SetColor("yellow");
//$bplot->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
//$bplot->mark->SetFillColor('red');
$bplot->value->SetAlign('center'); 
/*
// Create targets for the image maps. One for each column
$targ=array("bar_clsmex1.php#1","bar_clsmex1.php#2","bar_clsmex1.php#3","bar_clsmex1.php#4","bar_clsmex1.php#5","bar_clsmex1.php#6");
$alts=array("val=%d","val=%d","val=%d","val=%d","val=%d","val=%d");
$bplot->SetCSIMTargets($targ,$alts);*/
$bplot->SetFillColor($renk);
// Use a shadow on the bar graphs (just use the default settings)
$bplot->SetShadow();
$bplot->value->SetFormat('%% %d');
$bplot->value->SetFont(FF_ARIAL,FS_NORMAL,10);
$bplot->SetFillGradient("navy","lightsteelblue",GRAD_MIDVER);
//$bplot->value->SetColor("blue");
$bplot->value->Show();
$graph->Add($bplot);
$graph->title->Set($baslik.' '.$hedefnuf);
$graph->xaxis->title->Set("\n\n\n\n\n\n\n\n\n\n\n A Ş I L A R ve D O Z  S A Y I L A R I");
$graph->yaxis->title->Set(" Y Ü Z D E ");
$graph->title->SetFont(FF_ARIAL,FS_BOLD,12);
$graph->yaxis->title->SetFont(FF_ARIAL,FS_BOLD,12);
$graph->xaxis->title->SetFont(FF_ARIAL,FS_BOLD,12);
$graph->SetBox(true);
// Send back the HTML page which will call this script again
// to retrieve the image.
$graph->Stroke();
?>

