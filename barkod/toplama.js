// JavaScript Document
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
function noCache(uri){
return uri.concat(/\?/.test(uri) ? "&" : "?", "noCache=", (new Date).getTime(), ".", Math.random()*1234567);
};
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		return xmlhttp;
    }
	//İLÇE SEÇİMİ..................................................................................................................................................
	function getState(countryId) {		
		var strURL="ilcaara.php?selectil="+countryId;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
//KURUM SEÇİMİ................................................................................................................................................
	function getCity(countryId,stateId) {		
		var strURL="ocakara.php?selectil="+countryId+"&selectilce="+stateId;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
//İLÇE TOPLAM SEÇİMİ.............................................................................................................................................
function getStateTop(countryId) {		
		var strURL="ilcaaratop.php?selectil="+countryId;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statedivtop').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
//KURUM TOPLAM SEÇİMİ.............................................................................................................................................
	function getCityTop(countryId,stateId) {		
		var strURL="ocakaratop.php?selectil="+countryId+"&selectilce="+stateId;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydivtop').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
//İLÇE......................................................................................................
function getilce(countryId) {		
	var strURL="ilcearatoplam.php?selectil="+countryId;
	var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
//KURUM..................................................................................................
function getocak(countryId,stateId) {		
		var strURL="ocakaratoplam.php?selectil="+countryId+"&selectilce="+stateId;
		var req = getXMLHTTP();
		if (req) {
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('citydiv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}
	}
	//**************************************************************************************************************************** */
 //browser ie ise true degil ise undefined
 var IS_IE = document.all && window.ActiveXObject &&
 navigator.userAgent.toLowerCase().indexOf("msie") > -1 ; 
 // browser gecko ise true degil ise undefined
 var IS_GECKO = document.implementation && document.implementation.createDocument
 && window.XMLHttpRequest && true;
 function topla(){ 
 		var v1 = parseInt(document.getElementById("v1").value);
	    var v2 = parseInt(document.getElementById("v2").value) ;
        var v3 = parseInt(document.getElementById("v3").value);
	    var v4 = parseInt(document.getElementById("v4").value) ;
	 if(isNaN(v1) || isNaN(v2)|| isNaN(v3) || isNaN(v4)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
	 if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
   XHRO.open("GET","topla.php?v1="+v1+"&v2="+v2+"&v3="+v3+"&v4="+v4,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucu").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
 //.......................................................................................
  function topla1(){ 
        var v5 = parseInt(document.getElementById("v5").value);
	    var v6 = parseInt(document.getElementById("v6").value);
		var v7 = parseInt(document.getElementById("v7").value);
	    var v8 = parseInt(document.getElementById("v8").value); 
	    		   if(isNaN(v5) || isNaN(v6)|| isNaN(v7)|| isNaN(v8)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla1.php?v5="+v5+"&v6="+v6+"&v7="+v7+"&v8="+v8,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc1").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  function topla2(){ 
        var v9 = parseInt(document.getElementById("v9").value);
	    var v10 = parseInt(document.getElementById("v10").value);
		var v11 = parseInt(document.getElementById("v11").value);
	    var v12 = parseInt(document.getElementById("v12").value); 
	    		   if(isNaN(v9) || isNaN(v10)|| isNaN(v11)|| isNaN(v12)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla2.php?v9="+v9+"&v10="+v10+"&v11="+v11+"&v12="+v12,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc2").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 function topla3(){ 
    var v13 = parseInt(document.getElementById("v13").value);
    var v14 = parseInt(document.getElementById("v14").value); 
    var v15 = parseInt(document.getElementById("v15").value);
	    		   if(isNaN(v13) || isNaN(v14)|| isNaN(v15)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla3.php?v13="+v13+"&v14="+v14+"&v15="+v15,true);
   XHRO.onreadystatechange = function(){ 
     if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc3").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //DBT STUN TOPLAMI************************************************
  function topla4(){ 
        var sonucu = parseInt(document.getElementById("sonucu").value);
	    var sonuc1 = parseInt(document.getElementById("sonuc1").value); 
		var sonuc2 = parseInt(document.getElementById("sonuc2").value);
	    var sonuc3 = parseInt(document.getElementById("sonuc3").value); 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla4.php?sonucu="+sonucu+"&sonuc1="+sonuc1+"&sonuc2="+sonuc2+"&sonuc3="+sonuc3,true);
   XHRO.onreadystatechange = function(){ 
     if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc4").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //Hekim SEANS SAYILARI TOPLAMI************************************************
  function topla5(){ 
        var v16 = parseInt(document.getElementById("v16").value);
	    var v17 = parseInt(document.getElementById("v17").value); 
		var v18 = parseInt(document.getElementById("v18").value);
	    	   if(isNaN(v16) || isNaN(v17)|| isNaN(v18)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla5.php?v16="+v16+"&v17="+v17+"&v18="+v18,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc5").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
   //Hemsire SEANS SAYILARI TOPLAMI************************************************
  function topla6(){ 
        var v19 = parseInt(document.getElementById("v19").value);
	    var v20 = parseInt(document.getElementById("v20").value); 
		var v21 = parseInt(document.getElementById("v21").value);
		var v142 = parseInt(document.getElementById("v142").value);
	    		   if(isNaN(v19) || isNaN(v20)|| isNaN(v21)|| isNaN(v142)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla6.php?v19="+v19+"&v20="+v20+"&v21="+v21+"&v142="+v142,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc6").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
  //Saglik Memuru SEANS SAYILARI TOPLAMI************************************************
  function topla7(){ 
        var v22 = parseInt(document.getElementById("v22").value);
	    var v23 = parseInt(document.getElementById("v23").value); 
		var v24 = parseInt(document.getElementById("v24").value);
	    		   if(isNaN(v22) || isNaN(v23)|| isNaN(v24)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla7.php?v22="+v22+"&v23="+v23+"&v24="+v24,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc7").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //Ebe SEANS SAYILARI TOPLAMI************************************************
  function topla8(){ 
        var v25 = parseInt(document.getElementById("v25").value);
	    var v26 = parseInt(document.getElementById("v26").value); 
		var v27 = parseInt(document.getElementById("v27").value);
	    		   if(isNaN(v25) || isNaN(v26)|| isNaN(v27)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla8.php?v25="+v25+"&v26="+v26+"&v27="+v27,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc8").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
   //Diger Personel SEANS SAYILARI TOPLAMI************************************************
  function topla9(){ 
        var v28 = parseInt(document.getElementById("v28").value);
	    var v29 = parseInt(document.getElementById("v29").value); 
	    		   if(isNaN(v28) || isNaN(v29)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla9.php?v28="+v28+"&v29="+v29,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc9").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }      
  //Ay Sonu Gebe Mevcudu************************************************
  function topla10(){ 
 		var sonuc6 = parseInt(document.getElementById("sonuc6").value);
	    var sonuc7 = parseInt(document.getElementById("sonuc7").value); 
		var sonuc8 = parseInt(document.getElementById("sonuc8").value);
	    var sonuc9 = parseInt(document.getElementById("sonuc9").value); 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla10.php?sonuc6="+sonuc6+"&sonuc7="+sonuc7+"&sonuc8="+sonuc8+"&sonuc9="+sonuc9,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc10").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
 //Ay Sonu Bebek Mevcudu************************************************
  function topla11(){ 
 //var v24 = parseInt(document.getElementById("v24").value);
 //var v25 = parseInt(document.getElementById("v25").value);
 //var v26 = parseInt(document.getElementById("v26").value);
 //var v27 = parseInt(document.getElementById("v27").value);
 //var v28 = parseInt(document.getElementById("v28").value);
 //var v29 = parseInt(document.getElementById("29").value);
        var v30 = parseInt(document.getElementById("v30").value);
	    var v31 = parseInt(document.getElementById("v31").value); 
		var v32 = parseInt(document.getElementById("v32").value);
	    var v33 = parseInt(document.getElementById("v33").value); 
		var v34 = parseInt(document.getElementById("v34").value);
		var v35 = parseInt(document.getElementById("v35").value);
		   		   if(isNaN(v30) || isNaN(v31)|| isNaN(v32)|| isNaN(v33)|| isNaN(v34) || isNaN(v35)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla11.php?v30="+v30+"&v31="+v31+"&v32="+v32+"&v33="+v33+"&v34="+v34+"&v35="+v35,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc11").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 //Ay Sonu Lohusa Mevcudu************************************************
  function topla12(){ 
        var v36 = parseInt(document.getElementById("v36").value);
	    var v37 = parseInt(document.getElementById("v37").value); 
		var v38 = parseInt(document.getElementById("v38").value);
	    var v39 = parseInt(document.getElementById("v39").value); 
		var v40 = parseInt(document.getElementById("v40").value);
		var v41 = parseInt(document.getElementById("v41").value);
		   		   if(isNaN(v36) || isNaN(v37)|| isNaN(v38)|| isNaN(v39)|| isNaN(v40) || isNaN(v41)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla12.php?v36="+v36+"&v37="+v37+"&v38="+v38+"&v39="+v39+"&v40="+v40+"&v41="+v41,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc12").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu ocuk Mevcudu************************************************
  function topla13(){ 
        var v42 = parseInt(document.getElementById("v42").value);
	    var v43 = parseInt(document.getElementById("v43").value); 
		var v44 = parseInt(document.getElementById("v44").value);
	    var v45 = parseInt(document.getElementById("v45").value); 
		var v46 = parseInt(document.getElementById("v46").value);
		var v47 = parseInt(document.getElementById("v47").value);
		   		   if(isNaN(v42) || isNaN(v43)|| isNaN(v44)|| isNaN(v45)|| isNaN(v46) || isNaN(v47)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla13.php?v42="+v42+"&v43="+v43+"&v44="+v44+"&v45="+v45+"&v46="+v46+"&v47="+v47,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc13").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
  //Ay Sonu ocuk Mevcudu************************************************
  function topla14(){ 
        var v48 = parseInt(document.getElementById("v48").value);
	    var v49 = parseInt(document.getElementById("v49").value); 
		var v50 = parseInt(document.getElementById("v50").value);
	    var v51 = parseInt(document.getElementById("v51").value); 
		var v52 = parseInt(document.getElementById("v52").value);
		   		   if(isNaN(v48) || isNaN(v49)|| isNaN(v50)|| isNaN(v51)|| isNaN(v52)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla14.php?v48="+v48+"&v49="+v49+"&v50="+v50+"&v51="+v51+"&v52="+v52,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc14").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
 //Ay Sonu Gebe Mevcudu************************************************
  function topla15(){ 
 		var sonuc11 = parseInt(document.getElementById("sonuc11").value);
	    var sonuc12 = parseInt(document.getElementById("sonuc12").value); 
		var sonuc13 = parseInt(document.getElementById("sonuc13").value);
	    var sonuc14 = parseInt(document.getElementById("sonuc14").value); 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla15.php?sonuc11="+sonuc11+"&sonuc12="+sonuc12+"&sonuc13="+sonuc13+"&sonuc14="+sonuc14,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc15").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu ocuk Mevcudu************************************************
  function topla16(){ 
        var v53 = parseInt(document.getElementById("v53").value);
	    var v54 = parseInt(document.getElementById("v54").value); 
		var v55 = parseInt(document.getElementById("v55").value);
	    var v56 = parseInt(document.getElementById("v56").value); 
		var v57 = parseInt(document.getElementById("v57").value);
		   		   if(isNaN(v53) || isNaN(v54)|| isNaN(v55)|| isNaN(v56)|| isNaN(v57)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla16.php?v53="+v53+"&v54="+v54+"&v55="+v55+"&v56="+v56+"&v57="+v57,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc16").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
  //Ay Sonu ocuk Mevcudu************************************************
  function topla17(){ 
        var v58 = parseInt(document.getElementById("v58").value);
	    var v59 = parseInt(document.getElementById("v59").value); 
		var v60 = parseInt(document.getElementById("v60").value);
	    var v61 = parseInt(document.getElementById("v61").value); 
		var v62 = parseInt(document.getElementById("v62").value);
		   		   if(isNaN(v58) || isNaN(v59)|| isNaN(v60)|| isNaN(v61)|| isNaN(v62)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla17.php?v58="+v58+"&v59="+v59+"&v60="+v60+"&v61="+v61+"&v62="+v62,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc17").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
  //Ay Sonu Gebe Mevcudu************************************************
  function topla18(){ 
 		var sonuc16 = parseInt(document.getElementById("sonuc16").value);
	    var sonuc17 = parseInt(document.getElementById("sonuc17").value); 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla18.php?sonuc16="+sonuc16+"&sonuc17="+sonuc17,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc18").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu Bebek Mevcudu************************************************
  function topla19(){ 
 //var v24 = parseInt(document.getElementById("v24").value);
 //var v25 = parseInt(document.getElementById("v25").value);
 //var v26 = parseInt(document.getElementById("v26").value);
 //var v27 = parseInt(document.getElementById("v27").value);
 //var v28 = parseInt(document.getElementById("v28").value);
 //var v29 = parseInt(document.getElementById("29").value);
        var v63 = parseInt(document.getElementById("v63").value);
	    var v64 = parseInt(document.getElementById("v64").value); 
		var v65 = parseInt(document.getElementById("v65").value);
	    var v66 = parseInt(document.getElementById("v66").value); 
		var v67 = parseInt(document.getElementById("v67").value);
		var v68 = parseInt(document.getElementById("v68").value);
		   		   if(isNaN(v63) || isNaN(v64)|| isNaN(v65)|| isNaN(v66)|| isNaN(v67) || isNaN(v68)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla19.php?v63="+v63+"&v64="+v64+"&v65="+v65+"&v66="+v66+"&v67="+v67+"&v68="+v68,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc19").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu Bebek Mevcudu************************************************
  function topla20(){ 
 //var v24 = parseInt(document.getElementById("v24").value);
 //var v25 = parseInt(document.getElementById("v25").value);
 //var v26 = parseInt(document.getElementById("v26").value);
 //var v27 = parseInt(document.getElementById("v27").value);
 //var v28 = parseInt(document.getElementById("v28").value);
 //var v29 = parseInt(document.getElementById("29").value);
        var v69 = parseInt(document.getElementById("v69").value);
	    var v70 = parseInt(document.getElementById("v70").value); 
		var v71 = parseInt(document.getElementById("v71").value);
	    var v72 = parseInt(document.getElementById("v72").value); 
		var v73 = parseInt(document.getElementById("v73").value);
		   		   if(isNaN(v69) || isNaN(v70)|| isNaN(v71)|| isNaN(v72)|| isNaN(v73)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla20.php?v69="+v69+"&v70="+v70+"&v71="+v71+"&v72="+v72+"&v73="+v73,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc20").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 //Ay Sonu Bebek Mevcudu************************************************
  function toplahep(){ 
        var v74 = parseInt(document.getElementById("v74").value);
	    var v75 = parseInt(document.getElementById("v75").value); 
				   if(isNaN(v74) || isNaN(v75)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","toplahep.php?v74="+v74+"&v75="+v75,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v76").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu Bebek Mevcudu************************************************
  function topla21(){ 
        var v76 = parseInt(document.getElementById("v76").value);
	    var v77 = parseInt(document.getElementById("v77").value); 
		var v78 = parseInt(document.getElementById("v78").value);
	    var v79 = parseInt(document.getElementById("v79").value); 
		var v80 = parseInt(document.getElementById("v80").value);
		var v81 = parseInt(document.getElementById("v81").value);
		   		   if(isNaN(v77) || isNaN(v78)|| isNaN(v79)|| isNaN(v80)|| isNaN(v81)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla21.php?v76="+v76+"&v77="+v77+"&v78="+v78+"&v79="+v79+"&v80="+v80+"&v81="+v81,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc21").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
    //Ay Sonu Bebek Mevcudu************************************************
  function topla22(){ 
        var v82 = parseInt(document.getElementById("v82").value);
	    var v83 = parseInt(document.getElementById("v83").value); 
		var v84 = parseInt(document.getElementById("v84").value);
	    var v85 = parseInt(document.getElementById("v85").value); 
		var v86 = parseInt(document.getElementById("v86").value);
		var v87 = parseInt(document.getElementById("v87").value);
		   		   if(isNaN(v82) || isNaN(v83)|| isNaN(v84)|| isNaN(v85)|| isNaN(v86)|| isNaN(v87)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla22.php?v82="+v82+"&v83="+v83+"&v84="+v84+"&v85="+v85+"&v86="+v86+"&v87="+v87,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc22").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
     //Ay Sonu Bebek Mevcudu************************************************
  function topla23(){ 
        var v88 = parseInt(document.getElementById("v88").value);
	    var v89 = parseInt(document.getElementById("v89").value); 
		var v90 = parseInt(document.getElementById("v90").value);
	    var v91 = parseInt(document.getElementById("v91").value); 
		var v92 = parseInt(document.getElementById("v92").value);
		var v93 = parseInt(document.getElementById("v93").value);
		   		   if(isNaN(v88) || isNaN(v89)|| isNaN(v90)|| isNaN(v91)|| isNaN(v92)|| isNaN(v93)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla23.php?v88="+v88+"&v89="+v89+"&v90="+v90+"&v91="+v91+"&v92="+v92+"&v93="+v93,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc23").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
   //Ay Sonu Gebe Mevcudu************************************************
  function topla24(){ 
 		var sonuc21 = parseInt(document.getElementById("sonuc21").value);
	    var sonuc22 = parseInt(document.getElementById("sonuc22").value); 
		var sonuc23 = parseInt(document.getElementById("sonuc23").value);
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla24.php?sonuc21="+sonuc21+"&sonuc22="+sonuc22+"&sonuc23="+sonuc23,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc24").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
    //Ay Sonu Gebe Mevcudu************************************************
  function topla25(){ 
 		var v94 = parseInt(document.getElementById("v94").value);
	    var v95 = parseInt(document.getElementById("v95").value); 
		var v96 = parseInt(document.getElementById("v96").value);
	      if(isNaN(v94) || isNaN(v95)|| isNaN(v96)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla25.php?v94="+v94+"&v95="+v95+"&v96="+v96,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc25").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
     //Ay Sonu Gebe Mevcudu************************************************
 function topla26(){ 
 		var v97 = parseInt(document.getElementById("v97").value);
	    var v98 = parseInt(document.getElementById("v98").value); 
		var v99 = parseInt(document.getElementById("v99").value);
	    var v100 = parseInt(document.getElementById("v100").value);
		var v101 = parseInt(document.getElementById("v101").value);
		 if(isNaN(v97) || isNaN(v98)|| isNaN(v99)|| isNaN(v100)|| isNaN(v101)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla26.php?v97="+v97+"&v98="+v98+"&v99="+v99+"&v100="+v100+"&v101="+v101,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc26").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
      //Ay Sonu Gebe Mevcudu************************************************
 function topla27(){ 
 		var v102 = parseInt(document.getElementById("v102").value);
	    var v103 = parseInt(document.getElementById("v103").value); 
		var v104 = parseInt(document.getElementById("v104").value);
	    var v105 = parseInt(document.getElementById("v105").value);
		var v106 = parseInt(document.getElementById("v106").value);
		var v107 = parseInt(document.getElementById("v107").value);
		 if(isNaN(v102) || isNaN(v103)|| isNaN(v104)|| isNaN(v105)|| isNaN(v106)|| isNaN(v107)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
					         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla27.php?v102="+v102+"&v103="+v103+"&v104="+v104+"&v105="+v105+"&v106="+v106+"&v107="+v107,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc27").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
        //Ay Sonu Gebe Mevcudu************************************************
 function topla28(){ 
 		var v108 = parseInt(document.getElementById("v108").value);
	    var v109 = parseInt(document.getElementById("v109").value); 
		var v110 = parseInt(document.getElementById("v110").value);
	    var v111 = parseInt(document.getElementById("v111").value);
		var v112 = parseInt(document.getElementById("v112").value);
				 if(isNaN(v108) || isNaN(v109)|| isNaN(v110)|| isNaN(v111)|| isNaN(v112)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla28.php?v108="+v108+"&v109="+v109+"&v110="+v110+"&v111="+v111+"&v112="+v112,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc28").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
          //Ay Sonu Gebe Mevcudu************************************************
 function topla29(){ 
 		var v113 = parseInt(document.getElementById("v113").value);
	    var v114 = parseInt(document.getElementById("v114").value); 
		var v115 = parseInt(document.getElementById("v115").value);
	    var v116 = parseInt(document.getElementById("v116").value);
		var v117 = parseInt(document.getElementById("v117").value);
				 if(isNaN(v113) || isNaN(v114)|| isNaN(v115)|| isNaN(v116)|| isNaN(v117)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla29.php?v113="+v113+"&v114="+v114+"&v115="+v115+"&v116="+v116+"&v117="+v117,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc29").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
        //Ay Sonu Gebe Mevcudu************************************************
 function topla30(){ 
 		var v108 = parseInt(document.getElementById("v108").value);
	    var v113 = parseInt(document.getElementById("v113").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla30.php?v108="+v108+"&v113="+v113,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc30").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
         //Ay Sonu Gebe Mevcudu************************************************
 function topla31(){ 
 		var v109 = parseInt(document.getElementById("v109").value);
	    var v114 = parseInt(document.getElementById("v114").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla31.php?v109="+v109+"&v114="+v114,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc31").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
           //Ay Sonu Gebe Mevcudu************************************************
 function topla32(){ 
 		var v110 = parseInt(document.getElementById("v110").value);
	    var v115 = parseInt(document.getElementById("v115").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla32.php?v110="+v110+"&v115="+v115,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc32").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
          //Ay Sonu Gebe Mevcudu************************************************
 function topla33(){ 
 		var v111 = parseInt(document.getElementById("v111").value);
	    var v116 = parseInt(document.getElementById("v116").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla33.php?v111="+v111+"&v116="+v116,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc33").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
          //Ay Sonu Gebe Mevcudu************************************************
 function topla34(){ 
 		var v112 = parseInt(document.getElementById("v112").value);
	    var v117 = parseInt(document.getElementById("v117").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla34.php?v112="+v112+"&v117="+v117,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc34").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
          //Ay Sonu Gebe Mevcudu************************************************
 function topla35(){ 
 		var sonuc28 = parseInt(document.getElementById("sonuc28").value);
	    var sonuc29 = parseInt(document.getElementById("sonuc29").value); 
		     if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla35.php?sonuc28="+sonuc28+"&sonuc29="+sonuc29,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc35").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
//Ay Sonu ocuk Mevcudu************************************************
  function topla36(){ 
        var v120 = parseInt(document.getElementById("v120").value);
	    var v121 = parseInt(document.getElementById("v121").value); 
		var v122 = parseInt(document.getElementById("v122").value);
	    var v123 = parseInt(document.getElementById("v123").value); 
		var v124 = parseInt(document.getElementById("v124").value);
		   		   if(isNaN(v120) || isNaN(v121)|| isNaN(v122)|| isNaN(v123)|| isNaN(v124)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla36.php?v120="+v120+"&v121="+v121+"&v122="+v122+"&v123="+v123+"&v124="+v124,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc36").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
  //Ay Sonu ocuk Mevcudu************************************************
  function topla37(){ 
        var v125 = parseInt(document.getElementById("v125").value);
	    var v126 = parseInt(document.getElementById("v126").value); 
		var v127 = parseInt(document.getElementById("v127").value);
	    var v128 = parseInt(document.getElementById("v128").value); 
		var v129 = parseInt(document.getElementById("v129").value); 			     
		   		   if(isNaN(v125) || isNaN(v126)|| isNaN(v127)|| isNaN(v128)|| isNaN(v129)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla37.php?v125="+v125+"&v126="+v126+"&v127="+v127+"&v128="+v128+"&v129="+v129,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc37").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }         
  //Ay Sonu Gebe Mevcudu************************************************
  function topla38(){ 
 		var sonuc36 = parseInt(document.getElementById("sonuc36").value);
	    var sonuc37 = parseInt(document.getElementById("sonuc37").value); 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla38.php?sonuc36="+sonuc36+"&sonuc37="+sonuc37,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc38").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  //Ay Sonu Bebek Mevcudu************************************************
  function topla39(){ 
 //var v24 = parseInt(document.getElementById("v24").value);
 //var v25 = parseInt(document.getElementById("v25").value);
 //var v26 = parseInt(document.getElementById("v26").value);
 //var v27 = parseInt(document.getElementById("v27").value);
 //var v28 = parseInt(document.getElementById("v28").value);
 //var v29 = parseInt(document.getElementById("29").value);
        var v130 = parseInt(document.getElementById("v130").value);
	    var v131 = parseInt(document.getElementById("v131").value); 
		var v132 = parseInt(document.getElementById("v132").value);
	    var v133 = parseInt(document.getElementById("v133").value); 
		var v134 = parseInt(document.getElementById("v134").value);
		   		   if(isNaN(v130) || isNaN(v131)|| isNaN(v132)|| isNaN(v133)|| isNaN(v134)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla39.php?v130="+v130+"&v131="+v131+"&v132="+v132+"&v133="+v133+"&v134="+v134,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc39").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
//Ay Sonu Bebek Mevcudu************************************************
  function topla40(){ 
 //var v24 = parseInt(document.getElementById("v24").value);
 //var v25 = parseInt(document.getElementById("v25").value);
 //var v26 = parseInt(document.getElementById("v26").value);
 //var v27 = parseInt(document.getElementById("v27").value);
 //var v28 = parseInt(document.getElementById("v28").value);
 //var v29 = parseInt(document.getElementById("29").value);
        var v136 = parseInt(document.getElementById("v136").value);
	    var v137 = parseInt(document.getElementById("v137").value); 
		var v138 = parseInt(document.getElementById("v138").value);
	    var v139 = parseInt(document.getElementById("v139").value); 
		var v140 = parseInt(document.getElementById("v140").value);
		var v141 = parseInt(document.getElementById("v141").value);
		   		   if(isNaN(v136) || isNaN(v137)|| isNaN(v138)|| isNaN(v139)|| isNaN(v140) || isNaN(v141)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla40.php?v136="+v136+"&v137="+v137+"&v138="+v138+"&v139="+v139+"&v140="+v140+"&v141="+v141,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuc40").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 //Kayit Kontrol yapma.....................................................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrol()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
$.ajax({
type: 'GET',
url: noCache('kontrol.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
$('div#sonucx').hide();
$('#token').focus();
}
});
return false;
}
//Barkod Kayit Kontrol yapma..................................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function barkodkontrol()
	{
	$('div#sonuckay').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('karekod.php'),
	data: $('form').serialize(),
	success: function(ajaxCevap) {
	$('div#sonuckay').html(ajaxCevap);
	$('div#sonuckay').hide();
	ykay();
	}
	});
	return false;
	}
	//Aşi Adı Ekleme Sayfasını aç.............................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function asiadiekleme()
	{
	$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('asi_kodlari.php'),
	data: $('form').serialize(),
	success: function(ajaxCevap) {
	$('div#sonuc').html(ajaxCevap);
	$('div#sonucx').hide();

	$('#asi_adi').focus();
		}
	});
	return false;
	}
	//Aşi Adı Ekleme Sayfasını aç.............................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function asitanimekleme()
	{
	$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('asi_tanimlari.php'),
	data: $('form').serialize(),
	success: function(ajaxCevap) {
	$('div#sonuc').html(ajaxCevap);
	$('div#sonucx').hide();

	$('#asi_marka').focus();
		}
	});
	return false;
	}
	//Aşi Adı Kayit Kontrol yapma.............................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function asiadikontrol()
	{
	$('div#sonuckay').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('asi_kodlari.php'),
	data: $('form').serialize(),
	success: function(ajaxCevap) {
	$('div#sonuckay').html(ajaxCevap);
	$('div#sonuckay').hide();
	
	}
	});
	return false;
	}
	//Barkod Tanım Kayit Ekleme......................................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function tanimekle()
	{
		$('div#sonuckay').hide();
		$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
		$.ajax({
		type: 'GET',
		url: noCache('asi_tanimlari.php'),
		data: $('testform').serialize(),
		success: function(ajaxCevap) {
		$('div#sonuc').html(ajaxCevap);
		$('#asi_marka').focus();
		}
		});
		return false;
		}
//Yeni Kayit Ekleme....................................................................................................................................
$(document).ready(function(){
$(':submit').click( sonuckayit );
});
function kayit()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kayit Ekleniyor...');
$.ajax({
type: 'GET',
url: noCache('023kekle.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
} 
//Kayit Silme.......................................................................................................................................
function sil(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucsil').html('<br><br><img src="./images/loading.gif"><br>Kayit Siliniyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('023sil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Barkod Kayıdı Silme.................................................................................................................................
function barkodsil(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucsil').html('<br><br><img src="./images/loading.gif"><br>Kayit Siliniyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('barkodsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Barkod Kayıdı Silme.................................................................................................................................
function asiadisil(id) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
	
$('div#sonucsil').html('<br><br><img src="./images/loading.gif"><br>Kayit Siliniyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('asi_kodu_sil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: {"id":id},//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Aşı Marka Kayıdı Silme.................................................................................................................................
function asitanimsil(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucsil').html('<br><br><img src="./images/loading.gif"><br>Kayit Siliniyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('asi_tanim_sil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Barkod Kayıdı(Kayıt ekleme kısmından) Silme.............................................................................................................
function barkodsil(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucsil').html('<br><br><img src="./images/loading.gif"><br>Kayit Siliniyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('barkodsilkayit.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Kayit Grme
function git(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kayda Gidiliyor...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('goster.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
//Kayit Degistirme.............................................................................................................................................
function deg(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kayit Duzenlenecek...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('frm023degistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
//Aşı Adı Kayit Degistirme.............................................................................................................................................
function asiadiduzenle(id) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kayit Duzenlenecek...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('asi_kodu_duzenle.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: {id: id},//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{	
$('div#sonuc').html(cevap);
$('#asi_adi').select();
}
});}
//Aşı Marka Adı Kayit Degistirme.............................................................................................................................................
function asitanimduzenle(id) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kayit Duzenlenecek...');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('asi_tanim_duzenle.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: {id: id},//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{	
$('div#sonuc').html(cevap);
$('#asi_marka').select();
}
});}
//Aşı Adı Ekleme Kayit Girisi.....................................................................................................................................
function asiekle() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Aşı Adı Ekleme');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('asi_kodlari.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
$('#asi_adi').focus();
}
});}
//Kayit Girisi......................................................................................................................................................
function ykay() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Yeni Kayit Ekleme');
$.ajax({ 
type: 'GET',//verinin gnderilme yntemini belirliyoruz.
url :noCache('karekod.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
$('#token').focus();
}
});}
//Barkod Kayit Girisi..............................................................................................................................................
function ykayit() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
	$('div#sonucx').html('<br><br><img src="./images/loading.gif"><br>Yeni Kayit Ekleme');
	$.ajax({
		type: 'GET',//verinin gnderilme yntemini belirliyoruz.
		url :noCache('karekod.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.
		data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.
		success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
		{
			$('div#barkodekle').html(cevap);
			//$('div#sonuckay').hide();
			$('#token').focus();
		}
	});
}
 //Kayit Silme Onayi..............................................................................................................................................
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onay()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Silme Onayi Isteniyor...');
$.ajax({
type: 'GET',
url: noCache('onay.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
 //Toplam Alma....................................................................................................................................................
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamlar()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Toplamlar');
$.ajax({
type: 'GET',
url: noCache('toplamlar.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
 //Il Toplami Alma..................................................................................................................................................
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamil()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Toplamlar');
$.ajax({
type: 'GET',
url: noCache('iltoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
 //Ilce Toplami Alma..................................................................................................................................................
$(document).ready(function(){
$(':submit').click( ilcetoplamal );
});
function toplamilce()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Toplamlar');
$.ajax({
type: 'GET',
url: noCache('ilcetoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Ocak Toplami Alma........................................................................................................................................
$(document).ready(function(){
$(':submit').click( ocaktoplamal );
});
function toplamocak()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Toplamlar');
$.ajax({
type: 'GET',
url: noCache('ocaktoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Ay Toplami Alma..............................................................................................................................................
$(document).ready(function(){
$(':submit').click(aytoplamal );
});
function toplamay()
{
$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Toplamlar');
$.ajax({
type: 'GET',
url: noCache('aytoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Toplam Kontrol yapma..........................................................................................................................................
$(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function kontroltoplam()
	{
	$('div#sonuc').html('<br><br><img src="./images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('toplamkontrol.php'),
	data: $('form').serialize(),
	success: function(ajaxCevap) {
	$('div#sonuc').html(ajaxCevap);
	}
	});
	return false;
	}

