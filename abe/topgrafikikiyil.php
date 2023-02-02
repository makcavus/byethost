<?php // content="text/plain; charset=utf-8";
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ("jpgraph/jpgraph_date.php");
//require_once ('jpgraph/jpgraph_date.php');// Some (random) data
require_once ('con_023.php');
include('topsumikiyilgrafik.php');

$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$aygelentarihgun=substr($aygelenx,8,2);
$aygelentarihay=substr($aygelenx,5,2);
$aygelentarihyil=substr($aygelenx,0,4);
$donembasi=$aygelentarihgun.'.'.$aygelentarihay.'.'.$aygelentarihyil; 
/*Önceki 2.Yıl Başlama*/
$oncekiyililk=$aygelentarihyil-1;
$oncekitarihilk=$oncekiyililk.'-'.$aygelentarihay.'-'.$aygelentarihgun;
$oncekitarihilkal=$aygelentarihgun.'.'.$aygelentarihay.'.'.$oncekiyililk;

/*...*/
$aygelentarihgun=substr($aygeleny,8,2);
$aygelentarihay=substr($aygeleny,5,2);
$aygelentarihyil=substr($aygeleny,0,4);
$donemsonu=$aygelentarihgun.'.'.$aygelentarihay.'.'.$aygelentarihyil; 
/*Önceki 2.Yıl Bitiş*/
$oncekiyilson=$aygelentarihyil-1;
$oncekitarihson=$oncekiyilson.'-'.$aygelentarihay.'-'.$aygelentarihgun;
$oncekitarihsonal=$aygelentarihgun.'.'.$aygelentarihay.'.'.$oncekiyilson;

$baslikbir=$donembasi.'-'.$donemsonu;
$baslikiki=$oncekitarihilkal.'-'.$oncekitarihsonal;
/*...*/
$minimum=0;
$maximum=max(array(max($TOPLAM),max($TOPLAMIKI)));
//echo $minimum;
//echo $maximum;

$arasi="Son Iki Yil Karsilastirmali";
$tariharalik=$arasi;

$top="";
$baslikmetin='ABE Vaka Sayilari';
$baslik=$neresi.' '.$tariharalik.' '.$baslikmetin;
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
$graph->xaxis->SetTickLabels($tamtarihx);
$graph->xaxis->SetLabelAngle(90);
//$graph->yscale->SetGrace(1000,0);
// Create the linear plot
$lineplot=new LinePlot($TOPLAM);
$lineplot->SetLegend($baslikbir);
$lineplot->SetColor("red");
$lineplot->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot->mark->SetFillColor('red');
$lineplot->value->SetAlign('center'); 
$lineplot->value->Show(); 
$lineplot->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot);

// Create the linear plot
$lineplot1=new LinePlot($TOPLAMIKI);
$lineplot1->SetLegend($baslikiki);
$lineplot1->SetColor("blue");
$lineplot1->mark->SetType(MARK_STAR,'',1.0);
$lineplot1->mark->SetFillColor('blue');
$lineplot1->value->SetAlign('center'); 
$lineplot1->value->Show(); 
$lineplot1->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot1);

// Display the graph
$graph->Stroke();
?>