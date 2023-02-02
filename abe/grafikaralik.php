<?php // content="text/plain; charset=utf-8";

require_once ('jpgraph/jpgraph.php');

require_once ('jpgraph/jpgraph_line.php');

require_once ("jpgraph/jpgraph_date.php");

//require_once ('jpgraph/jpgraph_date.php');// Some (random) data

require_once ('con_023.php');

include('sumaralikgrafik.php');



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



$minimum=min(array(min($A09T),min($R11T),min($K52T)));

$maximum=max(array(max($A09T),max($R11T),max($K52T)));

//echo $minimum;

//echo $maximum;



$arasi="tarihleri arasi";

$tariharalik=$donembasi.'-'.$donemsonu.' '.$arasi;



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