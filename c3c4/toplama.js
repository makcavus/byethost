// JavaScript Document
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
function noCache(
uri 

){

return uri.concat( 


/\?/.test(uri) ?


"&"

:


"?",


"noCache=",


(new Date).getTime(),


".",


Math.random()*1234567

);


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
 //browser ie ise true degil ise undefined
 var IS_IE = document.all && window.ActiveXObject &&
 navigator.userAgent.toLowerCase().indexOf("msie") > -1 ; 
 // browser gecko ise true degil ise undefined
 var IS_GECKO = document.implementation && document.implementation.createDocument
 && window.XMLHttpRequest && true;
 /*function topla(){ 
        var v4 = parseInt(document.getElementById("v4").value);
	    var v5 = parseInt(document.getElementById("v5").value) ;
	 if(isNaN(v4) || isNaN(v5)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
	 if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
   XHRO.open("GET","topla.php?v4="+v4+"&v5="+v5,true);
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
 /*function topla1(){ 
        var v1 = parseInt(document.getElementById("v1").value);
	    var v2 = parseInt(document.getElementById("v2").value);
		
	    		   if(isNaN(v1) || isNaN(v2)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla1.php?v1="+v1+"&v2="+v2,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v21").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  
  function topla2(){ 
        var v3 = parseInt(document.getElementById("v3").value);
	    var v4 = parseInt(document.getElementById("v4").value);
		
	    		   if(isNaN(v3) || isNaN(v4)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla2.php?v3="+v3+"&v4="+v4,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v22").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 function topla3(){ 
        var v5 = parseInt(document.getElementById("v5").value);
	    var v6 = parseInt(document.getElementById("v6").value);
		
	    		   if(isNaN(v5) || isNaN(v6)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla3.php?v5="+v5+"&v6="+v6,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v23").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  */
  //HALK EGITIMI SEANS SAYILARI TOPLAMI************************************************
  function topla1(){ 
        var v4 = parseInt(document.getElementById("v4").value);
	    var v6 = parseInt(document.getElementById("v6").value); 
		var v8 = parseInt(document.getElementById("v8").value);
	    var v10 = parseInt(document.getElementById("v10").value); 
		var v12 = parseInt(document.getElementById("v12").value);
		var v14 = parseInt(document.getElementById("v14").value);
	    var v16 = parseInt(document.getElementById("v16").value); 
		var v18 = parseInt(document.getElementById("v18").value);
	    var v20 = parseInt(document.getElementById("v20").value); 
		
	    		   if(isNaN(v4) || isNaN(v6)|| isNaN(v8)|| isNaN(v10)|| isNaN(v12) || isNaN(v14)|| isNaN(v16)|| isNaN(v18)|| isNaN(v20)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla1.php?v4="+v4+"&v6="+v6+"&v8="+v8+"&v10="+v10+"&v12="+v12+"&v14="+v14+"&v16="+v16+"&v18="+v18+"&v20="+v20,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuce").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //Hekim SEANS SAYILARI TOPLAMI************************************************
  function topla2(){ 
        var v5 = parseInt(document.getElementById("v5").value);
	    var v7 = parseInt(document.getElementById("v7").value); 
		var v9 = parseInt(document.getElementById("v9").value);
	    var v11 = parseInt(document.getElementById("v11").value); 
		var v13 = parseInt(document.getElementById("v13").value);
		var v15 = parseInt(document.getElementById("v15").value);
	    var v17 = parseInt(document.getElementById("v17").value); 
		var v19 = parseInt(document.getElementById("v19").value);
	    var v21 = parseInt(document.getElementById("v21").value); 
		
	    		   if(isNaN(v5) || isNaN(v7)|| isNaN(v9)|| isNaN(v11)|| isNaN(v13) || isNaN(v15)|| isNaN(v17)|| isNaN(v19)|| isNaN(v21)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla2.php?v5="+v5+"&v7="+v7+"&v9="+v9+"&v11="+v11+"&v13="+v13+"&v15="+v15+"&v17="+v17+"&v19="+v19+"&v21="+v21,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonuck").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
   //Hemsire SEANS SAYILARI TOPLAMI************************************************
  function topla3(){ 
        var v26 = parseInt(document.getElementById("v26").value);
	    /*var v71 = parseInt(document.getElementById("v71").value); 
		var v72 = parseInt(document.getElementById("v72").value);
	    var v73 = parseInt(document.getElementById("v73").value); 
		var v74 = parseInt(document.getElementById("v74").value);
		var v75 = parseInt(document.getElementById("v75").value);
	    var v76 = parseInt(document.getElementById("v76").value); 
		var v77 = parseInt(document.getElementById("v77").value);
	    var v78 = parseInt(document.getElementById("v78").value); 
		var v79 = parseInt(document.getElementById("v79").value);
		var v80 = parseInt(document.getElementById("v80").value);
		var v81 = parseInt(document.getElementById("v81").value);*/
	    		   if(isNaN(v26)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla3.php?v26="+v26,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v29").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
  //Saglik Memuru SEANS SAYILARI TOPLAMI************************************************
 function topla4(){ 
        var v27 = parseInt(document.getElementById("v27").value);
	    /*var v71 = parseInt(document.getElementById("v71").value); 
		var v72 = parseInt(document.getElementById("v72").value);
	    var v73 = parseInt(document.getElementById("v73").value); 
		var v74 = parseInt(document.getElementById("v74").value);
		var v75 = parseInt(document.getElementById("v75").value);
	    var v76 = parseInt(document.getElementById("v76").value); 
		var v77 = parseInt(document.getElementById("v77").value);
	    var v78 = parseInt(document.getElementById("v78").value); 
		var v79 = parseInt(document.getElementById("v79").value);
		var v80 = parseInt(document.getElementById("v80").value);
		var v81 = parseInt(document.getElementById("v81").value);*/
	    		   if(isNaN(v27)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla4.php?v27="+v27,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v30").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
  //Ebe SEANS SAYILARI TOPLAMI************************************************
  function topla5(){ 
        var v28 = parseInt(document.getElementById("v28").value);
	    /*var v71 = parseInt(document.getElementById("v71").value); 
		var v72 = parseInt(document.getElementById("v72").value);
	    var v73 = parseInt(document.getElementById("v73").value); 
		var v74 = parseInt(document.getElementById("v74").value);
		var v75 = parseInt(document.getElementById("v75").value);
	    var v76 = parseInt(document.getElementById("v76").value); 
		var v77 = parseInt(document.getElementById("v77").value);
	    var v78 = parseInt(document.getElementById("v78").value); 
		var v79 = parseInt(document.getElementById("v79").value);
		var v80 = parseInt(document.getElementById("v80").value);
		var v81 = parseInt(document.getElementById("v81").value);*/
	    		   if(isNaN(v28)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla5.php?v28="+v28,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v31").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
   //Diger Personel SEANS SAYILARI TOPLAMI************************************************
  function topla6(){ 
        var v26 = parseInt(document.getElementById("v26").value);
	    var v32 = parseInt(document.getElementById("v32").value); 
		/*var v108 = parseInt(document.getElementById("v108").value);
	    var v109 = parseInt(document.getElementById("v109").value); 
		var v110 = parseInt(document.getElementById("v110").value);
		var v111 = parseInt(document.getElementById("v111").value);
	    var v112 = parseInt(document.getElementById("v112").value); 
		var v113 = parseInt(document.getElementById("v113").value);
	    var v114 = parseInt(document.getElementById("v114").value); 
		var v115 = parseInt(document.getElementById("v115").value);
		var v116 = parseInt(document.getElementById("v116").value);
		var v117 = parseInt(document.getElementById("v117").value);*/
	    		   if(isNaN(v32)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   else if(v32>v26) { alert("Yapilan tahlil sayisindan fazla olamaz");return false;}
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla6.php?v26="+v26+"&v32="+v32,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v29").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }      
  //Ay Sonu Gebe Mevcudu************************************************
function topla7(){ 
        var v27 = parseInt(document.getElementById("v27").value);
	    var v30 = parseInt(document.getElementById("v30").value); 
		/*var v108 = parseInt(document.getElementById("v108").value);
	    var v109 = parseInt(document.getElementById("v109").value); 
		var v110 = parseInt(document.getElementById("v110").value);
		var v111 = parseInt(document.getElementById("v111").value);
	    var v112 = parseInt(document.getElementById("v112").value); 
		var v113 = parseInt(document.getElementById("v113").value);
	    var v114 = parseInt(document.getElementById("v114").value); 
		var v115 = parseInt(document.getElementById("v115").value);
		var v116 = parseInt(document.getElementById("v116").value);
		var v117 = parseInt(document.getElementById("v117").value);*/
	    		   if(isNaN(v30)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   else if(v30>v27) { alert("Yapilan tahlil sayisindan fazla olamaz");return false;}
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla7.php?v27="+v27+"&v30="+v30,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v33").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }      
 //Ay Sonu Bebek Mevcudu************************************************
function topla8(){ 
        var v28 = parseInt(document.getElementById("v28").value);
	    var v31 = parseInt(document.getElementById("v31").value); 
		/*var v108 = parseInt(document.getElementById("v108").value);
	    var v109 = parseInt(document.getElementById("v109").value); 
		var v110 = parseInt(document.getElementById("v110").value);
		var v111 = parseInt(document.getElementById("v111").value);
	    var v112 = parseInt(document.getElementById("v112").value); 
		var v113 = parseInt(document.getElementById("v113").value);
	    var v114 = parseInt(document.getElementById("v114").value); 
		var v115 = parseInt(document.getElementById("v115").value);
		var v116 = parseInt(document.getElementById("v116").value);
		var v117 = parseInt(document.getElementById("v117").value);*/
	    		   if(isNaN(v31)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   else if(v31>v28) { alert("Yapilan tahlil sayisindan fazla olamaz");return false;}
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla8.php?v28="+v28+"&v31="+v31,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v34").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }      
 
 //Ay Sonu Lohusa Mevcudu************************************************
function topla9(){ 
        var v29 = parseInt(document.getElementById("v29").value);
	    var v26 = parseInt(document.getElementById("v26").value); 
		var v32 = parseInt(document.getElementById("v32").value);
	   /* var v73 = parseInt(document.getElementById("v73").value); 
		var v74 = parseInt(document.getElementById("v74").value);
		var v75 = parseInt(document.getElementById("v75").value);
	    var v76 = parseInt(document.getElementById("v76").value); 
		var v77 = parseInt(document.getElementById("v77").value);
	    var v78 = parseInt(document.getElementById("v78").value); 
		var v79 = parseInt(document.getElementById("v79").value);
		var v80 = parseInt(document.getElementById("v80").value);
		var v81 = parseInt(document.getElementById("v81").value);*/
	    		   if(isNaN(v29)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   else if(v29>v26-v32) { alert("Yapilan tahlil sayisindan fazla olamaz");return false;}
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla9.php?v29="+v29,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v29").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 

//İkamet adreslerine göre dağılım************************************************
function topla10(){  
        var v42 = parseInt(document.getElementById("v42").value);
        var v44 = parseInt(document.getElementById("v44").value);
        var v46 = parseInt(document.getElementById("v46").value);
	    var v48 = parseInt(document.getElementById("v48").value); 
		var v50 = parseInt(document.getElementById("v50").value);
	    var v52 = parseInt(document.getElementById("v52").value); 
		var v54 = parseInt(document.getElementById("v54").value);
		var v56 = parseInt(document.getElementById("v56").value);
	    var v58 = parseInt(document.getElementById("v58").value); 
		var v60 = parseInt(document.getElementById("v60").value);
		var v62 = parseInt(document.getElementById("v62").value);
		var v64 = parseInt(document.getElementById("v64").value);
		var v66 = parseInt(document.getElementById("v66").value);
		var v68 = parseInt(document.getElementById("v68").value);
		var v70 = parseInt(document.getElementById("v70").value);
		var v72 = parseInt(document.getElementById("v72").value);
		var v74 = parseInt(document.getElementById("v74").value);
		var v76 = parseInt(document.getElementById("v76").value);
		var v78 = parseInt(document.getElementById("v78").value);
		var v80 = parseInt(document.getElementById("v80").value);
if(isNaN(v42) || isNaN(v44) || isNaN(v46) || isNaN(v48) || isNaN(v50) || isNaN(v52) || isNaN(v54) || isNaN(v56) || isNaN(v58) || isNaN(v60) || isNaN(v62) || isNaN(v64) || isNaN(v66) || isNaN(v68) || isNaN(v70) || isNaN(v72) || isNaN(v74) || isNaN(v76) || isNaN(v78) || isNaN(v80)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla10.php?v42="+v42+"&v44="+v44+"&v46="+v46+"&v48="+v48+"&v50="+v50+"&v52="+v52+"&v54="+v54+"&v56="+v56+"&v58="+v58+"&v60="+v60+"&v62="+v62+"&v64="+v64+"&v66="+v66+"&v68="+v68+"&v70="+v70+"&v72="+v72+"&v74="+v74+"&v76="+v76+"&v78="+v78+"&v80="+v80,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v81").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
  
//Polikliniklere göre dağılım/Başvuran hasta************************************************
function topla11(){  
        var v83 = parseInt(document.getElementById("v83").value);
        var v87 = parseInt(document.getElementById("v87").value);
        var v91 = parseInt(document.getElementById("v91").value);
	    var v95 = parseInt(document.getElementById("v95").value); 
		var v99 = parseInt(document.getElementById("v99").value);
	    var v103 = parseInt(document.getElementById("v103").value); 
		
if(isNaN(v83) || isNaN(v87) || isNaN(v91) || isNaN(v95) || isNaN(v99) || isNaN(v103)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla11.php?v83="+v83+"&v87="+v87+"&v91="+v91+"&v95="+v95+"&v99="+v99+"&v103="+v103,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v106").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
  //Polikliniklere göre dağılım/Müşahade hasta************************************************
function topla12(){  
		var v83 = parseInt(document.getElementById("v83").value);
        var v84 = parseInt(document.getElementById("v84").value);
		var v87 = parseInt(document.getElementById("v87").value);
        var v88 = parseInt(document.getElementById("v88").value);
		var v91 = parseInt(document.getElementById("v91").value);
        var v92 = parseInt(document.getElementById("v92").value);
		var v95 = parseInt(document.getElementById("v95").value);
	    var v96 = parseInt(document.getElementById("v96").value);
		var v99 = parseInt(document.getElementById("v99").value);
		var v100 = parseInt(document.getElementById("v100").value);
		var v103 = parseInt(document.getElementById("v103").value);
	    var v104 = parseInt(document.getElementById("v104").value); 
		
if(isNaN(v84) || isNaN(v88) || isNaN(v92) || isNaN(v96) || isNaN(v100) || isNaN(v104)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;
}else if(v84>v83 || v88>v87 || v92>v91 || v96>v95 || v100>v99 || v104>v103 ){ alert("Yatan hasta basvurandan fazla olamaz."); return false ;}
				   
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla12.php?v84="+v84+"&v88="+v88+"&v92="+v92+"&v96="+v96+"&v100="+v100+"&v104="+v104,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v107").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
   //Polikliniklere göre dağılım/Müşahade hasta************************************************
function topla13(){  
		var v83 = parseInt(document.getElementById("v83").value);
        var v85 = parseInt(document.getElementById("v85").value);
		var v87 = parseInt(document.getElementById("v87").value);
        var v89 = parseInt(document.getElementById("v89").value);
		var v91 = parseInt(document.getElementById("v91").value);
        var v93 = parseInt(document.getElementById("v93").value);
		var v95 = parseInt(document.getElementById("v95").value);
	    var v97 = parseInt(document.getElementById("v97").value); 
		var v99 = parseInt(document.getElementById("v99").value);
		var v101 = parseInt(document.getElementById("v101").value);
		var v103 = parseInt(document.getElementById("v103").value);
	    var v105 = parseInt(document.getElementById("v105").value); 
		
if(isNaN(v85) || isNaN(v89) || isNaN(v93) || isNaN(v97) || isNaN(v101) || isNaN(v105)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;
}else if(v85>v83 || v89>v87 || v93>v91 || v97>v95 || v101>v99 || v105>v103 ){ alert("Yatan hasta basvurandan fazla olamaz."); return false ;} 
				   
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla13.php?v85="+v85+"&v89="+v89+"&v93="+v93+"&v97="+v97+"&v101="+v101+"&v105="+v105,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("v108").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  //Ay Sonu ocuk Mevcudu************************************************
/*  function topla13(){ 
 //var v122 = parseInt(document.getElementById("v122").value);
        var riadevir = parseInt(document.getElementById("riadevir").value);
        var v32 = parseInt(document.getElementById("v32").value);
	    var v33 = parseInt(document.getElementById("v33").value); 
		var v34 = parseInt(document.getElementById("v34").value);
	    var v35 = parseInt(document.getElementById("v35").value); 
		var v36 = parseInt(document.getElementById("v36").value);
		//var v17 = parseInt(document.getElementById("v17").value);
	    //var v142 = parseInt(document.getElementById("v142").value); */
/*		   		   if(isNaN(v32) || isNaN(v33)|| isNaN(v34)|| isNaN(v35)|| isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   //if(v12<v15+v17){ alert("Sarfedilen Bebek D-Vit ilk kez baslanan toplamindan az olamaz!"); return false;} 
							  
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla13.php?riadevir="+riadevir+"&v32="+v32+"&v33="+v33+"&v34="+v34+"&v35="+v35+"&v36="+v36,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("riatop").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
 
 function topla14(){ 
 //var v122 = parseInt(document.getElementById("v122").value);
        var impdevir = parseInt(document.getElementById("impdevir").value);
        var v37 = parseInt(document.getElementById("v37").value);
	    var v38 = parseInt(document.getElementById("v38").value); 
		var v39 = parseInt(document.getElementById("v39").value);
	    var v40 = parseInt(document.getElementById("v40").value); 
		var v41 = parseInt(document.getElementById("v41").value);
		//var v17 = parseInt(document.getElementById("v17").value);
	    //var v142 = parseInt(document.getElementById("v142").value); */
/*		   		   if(isNaN(v37) || isNaN(v38)|| isNaN(v39)|| isNaN(v40)|| isNaN(v41)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
				   //if(v12<v15+v17){ alert("Sarfedilen Bebek D-Vit ilk kez baslanan toplamindan az olamaz!"); return false;} 
							  
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla14.php?impdevir="+impdevir+"&v37="+v37+"&v38="+v38+"&v39="+v39+"&v40="+v40+"&v41="+v41,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("imptop").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  function esitmihap(){
		var v3 = parseInt(document.getElementById("v3").value);
		var v14 = parseInt(document.getElementById("v14").value);
		var v21 = parseInt(document.getElementById("v21").value);	  
  if(v21<v3+v14){ alert("Sarfedilen HAP yeni+eski kullanici sayisina esit veya fazla olmalidir!"); return false;}
  else if(v3+v14==0 && v21>0) { alert("Hap dagitilmamis");return false;}
  }
  
 /*function esitmigebedemir(){
		var v21 = parseInt(document.getElementById("v21").value);
	    //var v32 = parseInt(document.getElementById("v32").value);
		var v24 = parseInt(document.getElementById("v24").value);
		var v26 = parseInt(document.getElementById("v26").value);	  
  if(v21<v24+v26){ alert("Sarfedilen Gebe Demiri ilk kez baslanan+Mkerrer verilen toplamina esit veya fazla olmalidir!"); return false;}
  } */
  
/*function esitmienj(){
		var v5 = parseInt(document.getElementById("v5").value);
		var v16 = parseInt(document.getElementById("v16").value);
		var v31 = parseInt(document.getElementById("v31").value);	  
  if(v31<v5+v16){ alert("Sarfedilen ENJEKSIYON yeni+eski kullanici sayisina esit veya fazla olmalidir!"); return false;}
  else if(v5+v16==0 && v31>0) { alert("Enjeksiyon dagitilmamis");return false;}
  }
  function esitmiria(){
		var v6 = parseInt(document.getElementById("v6").value);
		//var v16 = parseInt(document.getElementById("v16").value);
		var v36 = parseInt(document.getElementById("v36").value);	  
  if(v36<v6){ alert("Sarfedilen RIA kullanici sayisina esit veya fazla olmalidir!"); return false;}
  else if(v6==0 && v36>0) { alert("RIA dagitilmamis");return false;}
  }*/
 //Kayit Kontrol yapma
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function kontrol()
{

$('div#sonuc').html('<br><br><img src="../images/loading.gif"><br>Kontrol ediliyor...');
$.ajax({
type: 'GET',
url: noCache('kontrol.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Yeni Kayit Ekleme
$(document).ready(function(){
$(':submit').click( sonuckayit );
});

$(document).ready(function(){
$(':submit').click( sonucAl );
});
function listele()
{

$('div#sonuc').html('<br><br><img src="../images/loading.gif"><br>Listeleniyor...');
$.ajax({
type: 'GET',
url: noCache('listele.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
//Yeni Kayit Ekleme
$(document).ready(function(){
$(':submit').click( sonuckayit );
});

function kayit()
{
$('div#sonuc').html('<img src="../images/wait.gif"><br>Kaydediliyor...');

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
//Kayit Silme
function sil(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonucsil').html('<br><img src="../images/sil.bmp">');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('023sil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonucsil').html(cevap);
}
});}
//Kayit Grme
function git(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<img src="../images/wait.gif"><br>Kayda gidiliyor...');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('goster.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
//Kayit Degistirme
function deg(ilidi,ilceidi,vocadi,vyiladi,vayadi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<img src="../images/edit.jpg">');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('frm023degistir.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
//Kayit Girisi
function ykay() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<img src="../images/ekle.bmp">');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('kayit.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}
 //Kayit Silme Onayi
$(document).ready(function(){
$(':submit').click( sonucAl );
});
function onay()
{

$('div#sonuc').html('<br><img src="../images/sil.jpg">');
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
 //Toplam Alma
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamlar()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Toplamlar...');
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
 //Il Toplami Alma
$(document).ready(function(){
$(':submit').click( iltoplamal );
});
function toplamil()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Il Toplam...');
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
 //Ilce Toplami Alma
$(document).ready(function(){
$(':submit').click( ilcetoplamal );
});
function toplamilce()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Ilce Toplam...');
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
//Ocak Toplami Alma
$(document).ready(function(){
$(':submit').click( ocaktoplamal );
});
function toplamocak()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Aile Hekimi Toplam...');
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

//Ay Toplami Alma
$(document).ready(function(){
$(':submit').click(aytoplamal );
});
function toplamay()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Ay Toplam...');
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

//Tarih Araligi Toplami Alma
$(document).ready(function(){
$(':submit').click(tarihtoplamal );
});
function toplamaralik()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Tarihleri Toplam...');
$.ajax({
type: 'GET',
url: noCache('araliktoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}

//Dnem Toplami Alma
$(document).ready(function(){
$(':submit').click(donemtoplamal );
});
function toplamdonem()
{

$('div#sonuc').html('<img src="../images/wait.gif"><br>Donem Toplam...');
$.ajax({
type: 'GET',
url: noCache('donemtoplam.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
}
