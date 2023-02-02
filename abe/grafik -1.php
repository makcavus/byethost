<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ("jpgraph/jpgraph_date.php");
//require_once ('jpgraph/jpgraph_date.php');// Some (random) data
require_once ('con_023.php');
$countryId=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$stateId=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocak=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yil=$_GET['selectyil'];
$aygelentam=$_GET['selectay']; 
$aygelentarih=substr($aygelentam,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
//$bugun=Date('Y-m-d');
//$once = time()-(168*60*60);
//$baslangic =date('Y-m-d',$once);
//echo $bugun;
//echo $baslangic;
$vtsec="select * from veri where(ilidi='$countryId' and ilceidi='$stateId') order by vayadi asc";
$socsorgu=mysql_query($vtsec);
while($resultTotal = mysql_fetch_array($socsorgu))
{
$tarih[] = $resultTotal[4];
$A090[] = $resultTotal[5];
$A095[] = $resultTotal[6];
$R110[] = $resultTotal[7];
$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];
$A09T[]=$resultTotal[25];
$R11T[]=$resultTotal[26];
$K52T[]=$resultTotal[27];
$tamtarih[]=$resultTotal[28];

}

$minimum=min(array(min($A09T),min($R11T),min($K52T)));
$maximum=max(array(max($A09T),max($R11T),max($K52T)));
//echo $minimum;
//echo $maximum;
$mintarih=min($tarih);
$maxtarih=max($tarih);
$gelentarih=substr($mintarih,0,10); 
$tarihgun=substr($gelentarih,8,2);
$tarihay=substr($gelentarih,5,2);
$tarihyil=substr($gelentarih,0,4);
$ayim=$tarihgun.'.'.$tarihay.'.'.$tarihyil;
 
$xgelentarih=substr($maxtarih,0,10); 
$xtarihgun=substr($xgelentarih,8,2);
$xtarihay=substr($xgelentarih,5,2);
$xtarihyil=substr($xgelentarih,0,4);
$xayim=$xtarihgun.'.'.$xtarihay.'.'.$xtarihyil; 

$tariharalik=$ayim.'-'.$xayim;
$baslikmetin='Tarihleri Arasi ABE Vaka Sayilari';
$baslik=$tariharalik.' '.$baslikmetin;
// Create the graph. These two calls are always required
$graph = new Graph(1260,900);	
$graph->SetScale("intlin",0,$maximum);
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
$lineplot=new LinePlot($A09T);
$lineplot->SetLegend("A09");
$lineplot->SetColor("red");
$lineplot->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot->mark->SetFillColor('red');
$lineplot->value->SetAlign('center'); 
$lineplot->value->Show(); 
$lineplot->value->SetFormat('%d'); 

// Add the plot to the graph
$graph->Add($lineplot);


// Create the linear plot
$lineplot1=new LinePlot($R11T);
$lineplot1->SetLegend("R11");
$lineplot1->SetColor("blue");
$lineplot1->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot1->mark->SetFillColor('blue');
$lineplot1->value->SetAlign('center'); 
$lineplot1->value->Show(); 
$lineplot1->value->SetFormat('%d'); 

// Add the plot to the graph
$graph->Add($lineplot1);

// Create the linear plot
$lineplot2=new LinePlot($K52T);
$lineplot2->SetLegend("K52");
$lineplot2->SetColor("green");
$lineplot2->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot2->mark->SetFillColor('green');
$lineplot2->value->SetAlign('center'); 
$lineplot2->value->Show(); 
$lineplot2->value->SetFormat('%d'); 


// Add the plot to the graph
$graph->Add($lineplot2);
// Display the graph
$graph->Stroke();
?>