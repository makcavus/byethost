<?php // content="text/plain; charset=utf-8";
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ("jpgraph/jpgraph_date.php");
//require_once ('jpgraph/jpgraph_date.php');// Some (random) data
require_once ('con_023.php');
include('topsumdonemgrafik.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$aygelentarihgun=substr($aygelenx,8,2);
$aygelentarihay=substr($aygelenx,5,2);
$aygelentarihyil=substr($aygelenx,0,4);
$donembasi=$aygelentarihgun.'.'.$aygelentarihay.'.'.$aygelentarihyil; 

$aygelentarihgun=substr($aygeleny,8,2);
$aygelentarihay=substr($aygeleny,5,2);
$aygelentarihyil=substr($aygeleny,0,4);
$donemsonu=$aygelentarihgun.'.'.$aygelentarihay.'.'.$aygelentarihyil; 

$minimum=0;
$maximum=max($TOPLAM);
//echo $minimum;
//echo $maximum;
if($donem=='ilk'){
	   $donemi='1. 3 AYLIK DONEM';
	   }elseif($donem=='ikinci'){
	   $donemi='2. 3 AYLIK DONEM';
	   }elseif($donem=='ucuncu'){
	   $donemi='3. 3 AYLIK DONEM';
	   }elseif($donem=='son'){
	   $donemi='4. 3 AYLIK DONEM';
	   } 
$yili="YILI";	   
$acparantez="(";
$kapaparantez=")";
$arasi="arasi";
$tariharalik=$yilgelen.' '.$yili.' '.$donemi.' '.$acparantez.' '.$donembasi.'-'.$donemsonu.' '.$arasi.' '.$kapaparantez.' '.$ayim;

$top="";
$baslikmetin='ABE Vaka Sayilari';
$baslik=$neresi.' '.$top.' '.$tariharalik.' '.$baslikmetin;
// Create the graph. These two calls are always required
$graph = new Graph(1620,1080);	
$graph->SetScale("textlin",$minimum,$maximum);
$graph->img->SetMargin(50,90,40,150);
$graph->SetMarginColor('white');
$graph->xaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->SetFont(FF_FONT1,FS_BOLD);
$graph->legend->SetAbsPos(10,10,'right','top');
$graph->legend->SetFillColor('white');
$graph->legend->SetFont(FF_FONT2,FS_NORMAL);
$graph->title->Set($baslik);
$graph->xaxis->SetTickLabels($tamtarih);
$graph->xaxis->SetLabelAngle(90);
//$graph->yscale->SetGrace(1000,0);
// Create the linear plot
$lineplot=new LinePlot($TOPLAM);
$lineplot->SetLegend("TOPLAM");
$lineplot->SetColor("red");
$lineplot->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot->mark->SetFillColor('red');
$lineplot->value->SetAlign('center'); 
$lineplot->value->Show(); 
$lineplot->value->SetFormat('%d'); 

// Add the plot to the graph
$graph->Add($lineplot);

// Display the graph
$graph->Stroke();
?>