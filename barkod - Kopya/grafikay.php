<?php // content="text/plain; charset=utf-8";
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');
require_once ("jpgraph/jpgraph_date.php");
//require_once ('jpgraph/jpgraph_date.php');// Some (random) data
require_once ('../con_023.php');
include('kumasioran.php');
$ilgelen=$_GET['selectil']; 
$ilcegelen=$_GET['selectilce']; 
$ocgelen=$_GET['selectoc']; 
$yilgelen=$_GET['selectyil'];
$aygelen=$_GET['selectay']; 
$ayim="AYI";
$yili="YILI";
$hedef="(Aylık Hedef Bebek Nüfusu:";
$prkapa=")";
$tariharalik=$yilgelen.' '.$yili.' '.$aygelen.' '.$ayim;
$hedefnuf=$hedef.' '.round(((($tverim119/$ay)/12)*$ay),0).' '.$prkapa;
$top="";
$baslikmetin='AY BAZINDA ASILAMA ORANLARI';
$baslik=$neresi.' '.$top.' '.$tariharalik.' '.$baslikmetin;
$minimum=0;
$maximum=max(array(max($dabt1),max($dabt2),max($dabt3)));
//echo $minimum;
//echo $maximum;
/*
$ayim="ayi";
$tariharalik=$aygelen.' '.$ayim;
$top="";
$baslikmetin='ABE Vaka Sayilari';*/
//$baslik=$neresi.' '.$top.' '.$tariharalik.' '.$baslikmetin;
// Create the graph. These two calls are always required
$graph = new Graph(1280,768,"auto");	
$graph->ClearTheme();
$graph->SetScale("textlin",$minimum,$maximum);
$graph->img->SetMargin(66,140,70,100);
$graph->SetMarginColor('white');
$graph->xaxis->SetFont(FF_ARIAL,FS_BOLD);
$graph->yaxis->SetFont(FF_ARIAL,FS_BOLD);
$graph->legend->SetAbsPos(0,0,'right','top');
$graph->legend->SetFillColor('white');
$graph->legend->SetFont(FF_ARIAL,FS_NORMAL);
$graph->title->SetFont(FF_ARIAL,FS_BOLD);
$graph->title->Set($baslik.' '.$hedefnuf);
$graph->xaxis->SetTickLabels($asim);
$graph->xaxis->SetLabelAngle(90);
$graph->yscale->SetGrace(($maximum-100)/5,0);
$graph->xaxis->title->Set("\n\n\n A Y L A R");
$graph->yaxis->title->Set(" Y Ü Z D E ");
/************************* DABT   *************************************/
// Create the linear plot
$lineplot=new LinePlot($dabt1);
$lineplot->SetLegend("DaBT-1&".$tverim1);
$lineplot->SetColor("red");
$lineplot->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot->mark->SetFillColor('red');
$lineplot->value->SetAlign('center'); 
$lineplot->value->Show(); 
$lineplot->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot);
// Create the linear plot
$lineplot1=new LinePlot($dabt2);
$lineplot1->SetLegend("DaBT-2&".$tverim5);
$lineplot1->SetColor("blue");
$lineplot1->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot1->mark->SetFillColor('blue');
$lineplot1->value->SetAlign('center'); 
$lineplot1->value->Show(); 
$lineplot1->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot1);
// Create the linear plot
$lineplot2=new LinePlot($dabt3);
$lineplot2->SetLegend("DaBT-3&".$tverim9);
$lineplot2->SetColor("orange");
$lineplot2->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot2->mark->SetFillColor('orange');
$lineplot2->value->SetAlign('center'); 
$lineplot2->value->Show(); 
$lineplot2->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot2);
// Create the linear plot
$lineplotr1=new LinePlot($dabtr);
$lineplotr1->SetLegend("DaBT-R&".$tverim13);
$lineplotr1->SetColor("cyan");
$lineplotr1->mark->SetType(MARK_SQUARE,'',1.0);
$lineplotr1->mark->SetFillColor('cyan');
$lineplotr1->value->SetAlign('center'); 
$lineplotr1->value->Show(); 
$lineplotr1->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplotr1);
/************************* KPA   *************************************/
// Create the linear plot
$lineplot3=new LinePlot($kpa1);
$lineplot3->SetLegend("KPA-1&".$tverim19);
$lineplot3->SetColor("red");
$lineplot3->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot3->mark->SetFillColor('red');
$lineplot3->value->SetAlign('center'); 
$lineplot3->value->Show(); 
$lineplot3->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot3);
// Create the linear plot
$lineplot4=new LinePlot($kpa2);
$lineplot4->SetLegend("KPA-2&".$tverim22);
$lineplot4->SetColor("blue");
$lineplot4->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot4->mark->SetFillColor('blue');
$lineplot4->value->SetAlign('center'); 
$lineplot4->value->Show(); 
$lineplot4->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot4);
// Create the linear plot
$lineplot5=new LinePlot($kpa3);
$lineplot5->SetLegend("KPA-3&".$tverim25);
$lineplot5->SetColor("orange");
$lineplot5->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot5->mark->SetFillColor('orange');
$lineplot5->value->SetAlign('center'); 
$lineplot5->value->Show(); 
$lineplot5->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot5);
// Create the linear plot
$lineplotr2=new LinePlot($kpar);
$lineplotr2->SetLegend("KPA-R&".$tverim28);
$lineplotr2->SetColor("brown");
$lineplotr2->mark->SetType(MARK_SQUARE,'',1.0);
$lineplotr2->mark->SetFillColor('brown');
$lineplotr2->value->SetAlign('center'); 
$lineplotr2->value->Show(); 
$lineplotr2->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplotr2);
/*************************** opa **************************************/
// Create the linear plot
$lineplot6=new LinePlot($opa1);
$lineplot6->SetLegend("OPA-1&".$tverim30);
$lineplot6->SetColor("orange");
$lineplot6->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot6->mark->SetFillColor('orange');
$lineplot6->value->SetAlign('center'); 
$lineplot6->value->Show(); 
$lineplot6->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot6);
// Create the linear plot
$lineplotr3=new LinePlot($opar);
$lineplotr3->SetLegend("OPA-R&".$tverim37);
$lineplotr3->SetColor("cyan");
$lineplotr3->mark->SetType(MARK_SQUARE,'',1.0);
$lineplotr3->mark->SetFillColor('cyan');
$lineplotr3->value->SetAlign('center'); 
$lineplotr3->value->Show(); 
$lineplotr3->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplotr3);
/*************************** kkk *****************************/
// Create the linear plot
$lineplot7=new LinePlot($kkk);
$lineplot7->SetLegend("KKK&".$tverim53);
$lineplot7->SetColor("brown");
$lineplot7->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot7->mark->SetFillColor('brown');
$lineplot7->value->SetAlign('center'); 
$lineplot7->value->Show(); 
$lineplot7->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot7);
/*************************** bcg *****************************/
// Create the linear plot
$lineplot8=new LinePlot($bcg);
$lineplot8->SetLegend("BCG&".$tverim69);
$lineplot8->SetColor("red");
$lineplot8->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot8->mark->SetFillColor('red');
$lineplot8->value->SetAlign('center'); 
$lineplot8->value->Show(); 
$lineplot8->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot8);
/************************* Hepatit - b   *************************************/
// Create the linear plot
$lineplot9=new LinePlot($hepb1);
$lineplot9->SetLegend("HEP-B-1&".$toplamhepbid);
$lineplot9->SetColor("black");
$lineplot9->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$lineplot9->mark->SetFillColor('black');
$lineplot9->value->SetAlign('center'); 
$lineplot9->value->Show(); 
$lineplot9->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot9);
// Create the linear plot
$lineplot10=new LinePlot($hepb2);
$lineplot10->SetLegend("HEP-B-2&".$tverim82);
$lineplot10->SetColor("yellow");
$lineplot10->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot10->mark->SetFillColor('yellow');
$lineplot10->value->SetAlign('center'); 
$lineplot10->value->Show(); 
$lineplot10->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot10);
// Create the linear plot
$lineplot11=new LinePlot($hepb3);
$lineplot11->SetLegend("HEP-B-3&".$tverim88);
$lineplot11->SetColor("orange");
$lineplot11->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot11->mark->SetFillColor('orange');
$lineplot11->value->SetAlign('center'); 
$lineplot11->value->Show(); 
$lineplot11->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot11);
/************************* Hepatit - a   *************************************/
// Create the linear plot
$lineplot12=new LinePlot($hepa1);
$lineplot12->SetLegend("HEP-A-1&".$tverim120);
$lineplot12->SetColor("cyan");
$lineplot12->mark->SetType(MARK_SQUARE,'',1.0);
$lineplot12->mark->SetFillColor('cyan');
$lineplot12->value->SetAlign('center'); 
$lineplot12->value->Show(); 
$lineplot12->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot12);
// Create the linear plot
$lineplot13=new LinePlot($hepa2);
$lineplot13->SetLegend("HEP-A-R&".$tverim126);
$lineplot13->SetColor("green");
$lineplot13->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot13->mark->SetFillColor('green');
$lineplot13->value->SetAlign('center'); 
$lineplot13->value->Show(); 
$lineplot13->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot13);
/************************************ Su �i�egi ***************************/
// Create the linear plot
$lineplot14=new LinePlot($sc);
$lineplot14->SetLegend("SU ÇİÇ.&".$tverim130);
$lineplot14->SetColor("brown");
$lineplot14->mark->SetType(MARK_DIAMOND,'',1.0);
$lineplot14->mark->SetFillColor('brown');
$lineplot14->value->SetAlign('center'); 
$lineplot14->value->Show(); 
$lineplot14->value->SetFormat('%d'); 
// Add the plot to the graph
$graph->Add($lineplot14);
$graph->Stroke();
?>