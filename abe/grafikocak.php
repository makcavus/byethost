<?php // content="text/plain; charset=utf-8";

require_once ('jpgraph/jpgraph.php');

require_once ('jpgraph/jpgraph_line.php');

require_once ("jpgraph/jpgraph_date.php");

//require_once ('jpgraph/jpgraph_date.php');// Some (random) data

require_once ('con_023.php');

$ilgelen=$_GET['selectil']; 

$ilcegelen=$_GET['selectilce']; 

$ocgelen=$_GET['selectoc']; 

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



$ilceadi=@mysql_query("select * from ilce where(ilinad='$ilgelen' and ilceid='$ilcegelen')");

while($ilcesonucum=mysql_fetch_array($ilceadi)){

$ilceninadi=$ilcesonucum['ilcead'];

}

$vtsec="select sum(v21) as A09T,sum(v22) as R11T,sum(v23) as K52T from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$baslangic' and '$bugun') group by vayadi order by vayadi asc";

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

$A09T[]=$resultTotal["A09T"];

$R11T[]=$resultTotal["R11T"];

$K52T[]=$resultTotal["K52T"];

//$tamtarih[]=$resultTotal[28];



}

$vtsec="select * from veri where ilidi='$ilgelen' and ilceidi='$ilcegelen' and vocadi='$ocgelen' and (vayadi between '$baslangic' and '$bugun') group by vayadi order by vayadi asc";

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

$neresi=$ilinadi.'-'.$ilceninadi.'-'.$ocgelen;

$top="";

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