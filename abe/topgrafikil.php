<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ("jpgraph/jpgraph_date.php");
//require_once ('jpgraph/jpgraph_date.php');// Some (random) data
require_once ('con_023.php');
$ilgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectil']); 
$ilcegelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectilce']); 
$ocgelen=iconv("UTF-8", "ISO-8859-9", $_GET['selectoc']); 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$aygelentarih=substr($aygelen,0,10); 
$aygelentarihgun=substr($aygelentarih,0,2);
$aygelentarihay=substr($aygelentarih,3,2);
$aygelentarihyil=substr($aygelentarih,6,4);
$ay=$aygelentarihyil.'-'.$aygelentarihay.'-'.$aygelentarihgun; 
$bugun=date('Y-m-d');
$yilingunu=date('z');
$guncarp=$yilingunu*24;
//echo $guncarp;
//echo $yilingunu;

$once = time()-($guncarp*60*60);
$baslangic =date('Y-m-d',$once);
//echo $bugun;
//echo $baslangic;
//echo $ilcegelen;
$iladi=@mysql_query("select * from il where(ilid='$ilgelen')");
while($ilsonucum=mysql_fetch_array($iladi)){
$ilinadi=$ilsonucum['ilad'];
}
$vtsec="select sum(v21+v22+v23) as TOPLAM from veri where ilidi='$ilgelen' and (vayadi between '$baslangic' and '$bugun') group by vayadi order by vayadi asc";
$socsorgu=mysql_query($vtsec);
while($resultTotal = mysql_fetch_array($socsorgu))
{
//$tarih[] = $resultTotal[4];
/*$A090[] = $resultTotal[5];
$A095[] = $resultTotal[6];
$R110[] = $resultTotal[7];
$R115[] = $resultTotal[8];
$K520[] = $resultTotal[9];
$K525[] = $resultTotal[10];*/
$TOPLAM[]=$resultTotal["TOPLAM"];
//$R11T[]=$resultTotal["R11T"];
//$K52T[]=$resultTotal["K52T"];
//$tamtarih[]=$resultTotal[28];

}
$vtsec="select * from veri where ilidi='$ilgelen' and (vayadi between '$baslangic' and '$bugun') group by vayadi order by vayadi asc";
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
/*$A09T[]=$resultTotal[25];
$R11T[]=$resultTotal[26];
$K52T[]=$resultTotal[27];*/
$tamtarih[]=$resultTotal[28];

}

$minimum=0;
$maximum=max($TOPLAM);
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
$neresi=$ilinadi;
$top="Ili";
$baslikmetin='Tarihleri Arasi ABE Vaka Sayilari';
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