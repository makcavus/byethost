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
  //0-4 yaş TOPLAMI************************************************
  function toplayg1(){ 
        var v1 = parseInt(document.getElementById("v1").value);
	    var v19 = parseInt(document.getElementById("v19").value); 
		
	    		
	    		   if(isNaN(v1) || isNaN(v19)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla1.php?v1="+v1+"&v19="+v19,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg1").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //5-9 yaş TOPLAMI************************************************
  function toplayg2(){ 
        var v2 = parseInt(document.getElementById("v2").value);
	    var v20 = parseInt(document.getElementById("v20").value); 
		
	    		
	    		   if(isNaN(v2) || isNaN(v20)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla2.php?v2="+v2+"&v20="+v20,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg2").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //10-14 yaş TOPLAMI************************************************
  function toplayg3(){ 
        var v3 = parseInt(document.getElementById("v3").value);
	    var v21 = parseInt(document.getElementById("v21").value); 
		
	    		
	    		   if(isNaN(v3) || isNaN(v21)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla3.php?v3="+v3+"&v21="+v21,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg3").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 //15-19 yaş TOPLAMI************************************************
  function toplayg4(){ 
        var v4 = parseInt(document.getElementById("v4").value);
	    var v22 = parseInt(document.getElementById("v22").value); 
		
	    		
	    		   if(isNaN(v4) || isNaN(v22)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla4.php?v4="+v4+"&v22="+v22,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg4").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //20-24 yaş TOPLAMI************************************************
  function toplayg5(){ 
        var v5 = parseInt(document.getElementById("v5").value);
	    var v23 = parseInt(document.getElementById("v23").value); 
		
	    		
	    		   if(isNaN(v5) || isNaN(v23)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla5.php?v5="+v5+"&v23="+v23,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg5").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //25-29 yaş TOPLAMI************************************************
  function toplayg6(){ 
        var v6 = parseInt(document.getElementById("v6").value);
	    var v24 = parseInt(document.getElementById("v24").value); 
		
	    		
	    		   if(isNaN(v6) || isNaN(v24)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla6.php?v6="+v6+"&v24="+v24,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg6").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //30-34 yaş TOPLAMI************************************************
  function toplayg7(){ 
        var v7 = parseInt(document.getElementById("v7").value);
	    var v25 = parseInt(document.getElementById("v25").value); 
		
	    		
	    		   if(isNaN(v7) || isNaN(v25)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla7.php?v7="+v7+"&v25="+v25,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg7").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 //35-39 yaş TOPLAMI************************************************
  function toplayg8(){ 
        var v8 = parseInt(document.getElementById("v8").value);
	    var v26 = parseInt(document.getElementById("v26").value); 
		
	    		
	    		   if(isNaN(v8) || isNaN(v26)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla8.php?v8="+v8+"&v26="+v26,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg8").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 
//40-44 yaş TOPLAMI************************************************
  function toplayg9(){ 
        var v9 = parseInt(document.getElementById("v9").value);
	    var v27 = parseInt(document.getElementById("v27").value); 
		
	    		
	    		   if(isNaN(v9) || isNaN(v27)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla9.php?v9="+v9+"&v27="+v27,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg9").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  } 
  
//45-49 yaş TOPLAMI************************************************
  function toplayg10(){ 
        var v10 = parseInt(document.getElementById("v10").value);
	    var v28 = parseInt(document.getElementById("v28").value); 
		
	    		
	    		   if(isNaN(v10) || isNaN(v28)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla10.php?v10="+v10+"&v28="+v28,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg10").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
//50-54 yaş TOPLAMI************************************************
  function toplayg11(){ 
        var v11 = parseInt(document.getElementById("v11").value);
	    var v29 = parseInt(document.getElementById("v29").value); 
		
	    		
	    		   if(isNaN(v11) || isNaN(v29)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla11.php?v11="+v11+"&v29="+v29,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg11").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
 //55-59 yaş TOPLAMI************************************************
  function toplayg12(){ 
        var v12 = parseInt(document.getElementById("v12").value);
	    var v30 = parseInt(document.getElementById("v30").value); 
		
	    		
	    		   if(isNaN(v12) || isNaN(v30)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla12.php?v12="+v12+"&v30="+v30,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg12").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
 //60-64 yaş TOPLAMI************************************************
  function toplayg13(){ 
        var v13 = parseInt(document.getElementById("v13").value);
	    var v31 = parseInt(document.getElementById("v31").value); 
		
	    		
	    		   if(isNaN(v13) || isNaN(v31)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla13.php?v13="+v13+"&v31="+v31,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg13").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
  //65-69 yaş TOPLAMI************************************************
  function toplayg14(){ 
        var v14 = parseInt(document.getElementById("v14").value);
	    var v32 = parseInt(document.getElementById("v32").value); 
		
	    		
	    		   if(isNaN(v14) || isNaN(v32)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla14.php?v14="+v14+"&v32="+v32,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg14").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
  //70-74 yaş TOPLAMI************************************************
  function toplayg15(){ 
        var v15 = parseInt(document.getElementById("v15").value);
	    var v33 = parseInt(document.getElementById("v33").value); 
		
	    		
	    		   if(isNaN(v15) || isNaN(v33)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla15.php?v15="+v15+"&v33="+v33,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg15").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
   //75-79 yaş TOPLAMI************************************************
  function toplayg16(){ 
        var v16 = parseInt(document.getElementById("v16").value);
	    var v34 = parseInt(document.getElementById("v34").value); 
		
	    		
	    		   if(isNaN(v16) || isNaN(v34)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla16.php?v16="+v16+"&v34="+v34,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg16").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }  
  
   //80-84 yaş TOPLAMI************************************************
  function toplayg17(){ 
        var v17 = parseInt(document.getElementById("v17").value);
	    var v35 = parseInt(document.getElementById("v35").value); 
		
	    		
	    		   if(isNaN(v17) || isNaN(v35)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla17.php?v17="+v17+"&v35="+v35,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg17").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
  //85- + yaş TOPLAMI************************************************
  function toplayg18(){ 
        var v18 = parseInt(document.getElementById("v18").value);
	    var v36 = parseInt(document.getElementById("v36").value); 
		
	    		
	    		   if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla18.php?v18="+v18+"&v36="+v36,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg18").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
  //yaş grubu kadın TOPLAMI************************************************
  function toplaygk(){ 
        var v1 = parseInt(document.getElementById("v1").value);
	    var v2 = parseInt(document.getElementById("v2").value); 
		var v3 = parseInt(document.getElementById("v3").value);
	    var v4 = parseInt(document.getElementById("v4").value); 
		var v5 = parseInt(document.getElementById("v5").value);
	    var v6 = parseInt(document.getElementById("v6").value); 
		var v7 = parseInt(document.getElementById("v7").value);
	    var v8 = parseInt(document.getElementById("v8").value); 
		var v9 = parseInt(document.getElementById("v9").value);
	    var v10 = parseInt(document.getElementById("v10").value); 
		var v11 = parseInt(document.getElementById("v11").value);
	    var v12 = parseInt(document.getElementById("v12").value); 
		var v13 = parseInt(document.getElementById("v13").value);
	    var v14 = parseInt(document.getElementById("v14").value); 
		var v15 = parseInt(document.getElementById("v15").value);
	    var v16 = parseInt(document.getElementById("v16").value); 
		var v17 = parseInt(document.getElementById("v17").value);
	    var v18 = parseInt(document.getElementById("v18").value); 
		
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla19.php?v1="+v1+"&v2="+v2+"&v3="+v3+"&v4="+v4+"&v5="+v5+"&v6="+v6+"&v7="+v7+"&v8="+v8+"&v9="+v9+"&v10="+v10+"&v11="+v11+"&v12="+v12+"&v13="+v13+"&v14="+v14+"&v15="+v15+"&v16="+v16+"&v17="+v17+"&v18="+v18,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("ygkadin").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
  //yaş grubu erkek TOPLAMI************************************************
  function toplayge(){ 
        var v19 = parseInt(document.getElementById("v19").value);
	    var v20 = parseInt(document.getElementById("v20").value); 
		var v21 = parseInt(document.getElementById("v21").value);
	    var v22 = parseInt(document.getElementById("v22").value); 
		var v23 = parseInt(document.getElementById("v23").value);
	    var v24 = parseInt(document.getElementById("v24").value); 
		var v25 = parseInt(document.getElementById("v25").value);
	    var v26 = parseInt(document.getElementById("v26").value); 
		var v27 = parseInt(document.getElementById("v27").value);
	    var v28 = parseInt(document.getElementById("v28").value); 
		var v29 = parseInt(document.getElementById("v29").value);
	    var v30 = parseInt(document.getElementById("v30").value); 
		var v31 = parseInt(document.getElementById("v31").value);
	    var v32 = parseInt(document.getElementById("v32").value); 
		var v33 = parseInt(document.getElementById("v33").value);
	    var v34 = parseInt(document.getElementById("v34").value); 
		var v35 = parseInt(document.getElementById("v35").value);
	    var v36 = parseInt(document.getElementById("v36").value); 
		
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla20.php?v19="+v19+"&v20="+v20+"&v21="+v21+"&v22="+v22+"&v23="+v23+"&v24="+v24+"&v25="+v25+"&v26="+v26+"&v27="+v27+"&v28="+v28+"&v29="+v29+"&v30="+v30+"&v31="+v31+"&v32="+v32+"&v33="+v33+"&v34="+v34+"&v35="+v35+"&v36="+v36,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("ygerkek").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
 //YAŞ GRUBU GENEL TOPLAMI************************************************
  function toplayg(){ 
        var v1 = parseInt(document.getElementById("v1").value);
	    var v2 = parseInt(document.getElementById("v2").value); 
		var v3 = parseInt(document.getElementById("v3").value);
	    var v4 = parseInt(document.getElementById("v4").value); 
		var v5 = parseInt(document.getElementById("v5").value);
	    var v6 = parseInt(document.getElementById("v6").value); 
		var v7 = parseInt(document.getElementById("v7").value);
	    var v8 = parseInt(document.getElementById("v8").value); 
		var v9 = parseInt(document.getElementById("v9").value);
	    var v10 = parseInt(document.getElementById("v10").value); 
		var v11 = parseInt(document.getElementById("v11").value);
	    var v12 = parseInt(document.getElementById("v12").value); 
		var v13 = parseInt(document.getElementById("v13").value);
	    var v14 = parseInt(document.getElementById("v14").value); 
		var v15 = parseInt(document.getElementById("v15").value);
	    var v16 = parseInt(document.getElementById("v16").value); 
		var v17 = parseInt(document.getElementById("v17").value);
	    var v18 = parseInt(document.getElementById("v18").value); 
		var v19 = parseInt(document.getElementById("v19").value);
	    var v20 = parseInt(document.getElementById("v20").value); 
		var v21 = parseInt(document.getElementById("v21").value);
	    var v22 = parseInt(document.getElementById("v22").value); 
		var v23 = parseInt(document.getElementById("v23").value);
	    var v24 = parseInt(document.getElementById("v24").value); 
		var v25 = parseInt(document.getElementById("v25").value);
	    var v26 = parseInt(document.getElementById("v26").value); 
		var v27 = parseInt(document.getElementById("v27").value);
	    var v28 = parseInt(document.getElementById("v28").value); 
		var v29 = parseInt(document.getElementById("v29").value);
	    var v30 = parseInt(document.getElementById("v30").value); 
		var v31 = parseInt(document.getElementById("v31").value);
	    var v32 = parseInt(document.getElementById("v32").value); 
		var v33 = parseInt(document.getElementById("v33").value);
	    var v34 = parseInt(document.getElementById("v34").value); 
		var v35 = parseInt(document.getElementById("v35").value);
	    var v36 = parseInt(document.getElementById("v36").value); 
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla21.php?v1="+v1+"&v2="+v2+"&v3="+v3+"&v4="+v4+"&v5="+v5+"&v6="+v6+"&v7="+v7+"&v8="+v8+"&v9="+v9+"&v10="+v10+"&v11="+v11+"&v12="+v12+"&v13="+v13+"&v14="+v14+"&v15="+v15+"&v16="+v16+"&v17="+v17+"&v18="+v18+"&v19="+v19+"&v20="+v20+"&v21="+v21+"&v22="+v22+"&v23="+v23+"&v24="+v24+"&v25="+v25+"&v26="+v26+"&v27="+v27+"&v28="+v28+"&v29="+v29+"&v30="+v30+"&v31="+v31+"&v32="+v32+"&v33="+v33+"&v34="+v34+"&v35="+v35+"&v36="+v36,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucyg").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }     
//ÇOCUK TOPLAMI************************************************
  function toplamh1(){ 
        var v37 = parseInt(document.getElementById("v37").value);
	    var v42 = parseInt(document.getElementById("v42").value); 
		
	    		
	    		   if(isNaN(v37) || isNaN(v42)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla22.php?v37="+v37+"&v42="+v42,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh1").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //BEKAR TOPLAMI************************************************
  function toplamh2(){ 
        var v38 = parseInt(document.getElementById("v38").value);
	    var v43 = parseInt(document.getElementById("v43").value); 
		
	    		
	    		   if(isNaN(v38) || isNaN(v43)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla23.php?v38="+v38+"&v43="+v43,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh2").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //EVLİ TOPLAMI************************************************
  function toplamh3(){ 
        var v39 = parseInt(document.getElementById("v39").value);
	    var v44 = parseInt(document.getElementById("v44").value); 
		
	    		
	    		   if(isNaN(v39) || isNaN(v44)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla24.php?v39="+v39+"&v44="+v44,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh3").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 //BOŞANMIŞ TOPLAMI************************************************
  function toplamh4(){ 
        var v40 = parseInt(document.getElementById("v40").value);
	    var v45 = parseInt(document.getElementById("v45").value); 
		
	    		
	    		   if(isNaN(v40) || isNaN(v45)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla25.php?v40="+v40+"&v45="+v45,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh4").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //EŞİ ÖLMÜŞ TOPLAMI************************************************
  function toplamh5(){ 
        var v41 = parseInt(document.getElementById("v41").value);
	    var v46 = parseInt(document.getElementById("v46").value); 
		
	    		
	    		   if(isNaN(v41) || isNaN(v46)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla26.php?v41="+v41+"&v46="+v46,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh5").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 
 //MEDENİ HAL KADIN TOPLAMI************************************************
  function toplamhk(){ 
        var v37 = parseInt(document.getElementById("v37").value);
	    var v38 = parseInt(document.getElementById("v38").value); 
		var v39 = parseInt(document.getElementById("v39").value);
	    var v40 = parseInt(document.getElementById("v40").value); 
		var v41 = parseInt(document.getElementById("v41").value);
	    
		
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla27.php?v37="+v37+"&v38="+v38+"&v39="+v39+"&v40="+v40+"&v41="+v41,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("mhkadin").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
  //MEDENİ HAL ERKEK TOPLAMI************************************************
  function toplamhe(){ 
        var v42 = parseInt(document.getElementById("v42").value);
	    var v43 = parseInt(document.getElementById("v43").value); 
		var v44 = parseInt(document.getElementById("v44").value);
	    var v45 = parseInt(document.getElementById("v45").value); 
		var v46 = parseInt(document.getElementById("v46").value);
	    
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla28.php?v42="+v42+"&v43="+v43+"&v44="+v44+"&v45="+v45+"&v46="+v46,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("mherkek").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
 //MEDENİ HAL GENEL TOPLAMI************************************************
  function toplamh(){ 
        var v37 = parseInt(document.getElementById("v37").value);
	    var v38 = parseInt(document.getElementById("v38").value); 
		var v39 = parseInt(document.getElementById("v39").value);
	    var v40 = parseInt(document.getElementById("v40").value); 
		var v41 = parseInt(document.getElementById("v41").value);
	    var v42 = parseInt(document.getElementById("v42").value);
	    var v43 = parseInt(document.getElementById("v43").value); 
		var v44 = parseInt(document.getElementById("v44").value);
	    var v45 = parseInt(document.getElementById("v45").value); 
		var v46 = parseInt(document.getElementById("v46").value);		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla29.php?v37="+v37+"&v38="+v38+"&v39="+v39+"&v40="+v40+"&v41="+v41+"&v42="+v42+"&v43="+v43+"&v44="+v44+"&v45="+v45+"&v46="+v46,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucmh").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
//OÇD TOPLAMI************************************************
  function toplaod1(){ 
        var v47 = parseInt(document.getElementById("v47").value);
	    var v54 = parseInt(document.getElementById("v54").value); 
		
	    		
	    		   if(isNaN(v47) || isNaN(v54)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla30.php?v47="+v47+"&v54="+v54,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod1").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //OYD TOPLAMI************************************************
  function toplaod2(){ 
        var v48 = parseInt(document.getElementById("v48").value);
	    var v55 = parseInt(document.getElementById("v55").value); 
		
	    		
	    		   if(isNaN(v48) || isNaN(v55)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla31.php?v48="+v48+"&v55="+v55,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod2").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //OY TOPLAMI************************************************
  function toplaod3(){ 
        var v49 = parseInt(document.getElementById("v49").value);
	    var v56 = parseInt(document.getElementById("v56").value); 
		
	    		
	    		   if(isNaN(v49) || isNaN(v56)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla32.php?v49="+v49+"&v56="+v56,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod3").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 //İLKOKUL TOPLAMI************************************************
  function toplaod4(){ 
        var v50 = parseInt(document.getElementById("v50").value);
	    var v57 = parseInt(document.getElementById("v57").value); 
		
	    		
	    		   if(isNaN(v50) || isNaN(v57)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla33.php?v50="+v50+"&v57="+v57,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod4").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //ORTAOKUL TOPLAMI************************************************
  function toplaod5(){ 
        var v51 = parseInt(document.getElementById("v51").value);
	    var v58 = parseInt(document.getElementById("v58").value); 
		
	    		
	    		   if(isNaN(v51) || isNaN(v58)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla34.php?v51="+v51+"&v58="+v58,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod5").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    

//LİSE TOPLAMI************************************************
  function toplaod6(){ 
        var v52 = parseInt(document.getElementById("v52").value);
	    var v59 = parseInt(document.getElementById("v59").value); 
		
	    		
	    		   if(isNaN(v52) || isNaN(v59)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla35.php?v52="+v52+"&v59="+v59,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod6").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  //YÜKSEKOKUL TOPLAMI************************************************
  function toplaod7(){ 
        var v53 = parseInt(document.getElementById("v53").value);
	    var v60 = parseInt(document.getElementById("v60").value); 
		
	    		
	    		   if(isNaN(v53) || isNaN(v60)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla36.php?v53="+v53+"&v60="+v60,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod7").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
 //ÖĞRENİM DURUMU KADIN TOPLAMI************************************************
  function toplaodk(){ 
        var v47 = parseInt(document.getElementById("v47").value);
	    var v48 = parseInt(document.getElementById("v48").value); 
		var v49 = parseInt(document.getElementById("v49").value);
	    var v50 = parseInt(document.getElementById("v50").value); 
		var v51 = parseInt(document.getElementById("v51").value);
	    var v52 = parseInt(document.getElementById("v52").value); 
		var v53 = parseInt(document.getElementById("v53").value);
		
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla37.php?v47="+v47+"&v48="+v48+"&v49="+v49+"&v50="+v50+"&v51="+v51+"&v52="+v52+"&v53="+v53,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("odkadin").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }    
  
  //ÖĞRENİM DURUMU ERKEK TOPLAMI************************************************
  function toplaode(){ 
        var v54 = parseInt(document.getElementById("v54").value);
	    var v55 = parseInt(document.getElementById("v55").value); 
		var v56 = parseInt(document.getElementById("v56").value);
	    var v57 = parseInt(document.getElementById("v57").value); 
		var v58 = parseInt(document.getElementById("v58").value);
	    var v59 = parseInt(document.getElementById("v59").value); 
		var v60 = parseInt(document.getElementById("v60").value);
	    		
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla38.php?v54="+v54+"&v55="+v55+"&v56="+v56+"&v57="+v57+"&v58="+v58+"&v59="+v59+"&v60="+v60,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("oderkek").value = XHRO.responseText;
     }else{  
	      alert("XHR : request status 200 degil! , bilinmeyen bir cisim!");    
     }   
	   }
   }   
   XHRO.send(null);     
  }   
  
 //ÖĞRENİM DURUMU TOPLAMI************************************************
  function toplaod(){ 
        var v47 = parseInt(document.getElementById("v47").value);
	    var v48 = parseInt(document.getElementById("v48").value); 
		var v49 = parseInt(document.getElementById("v49").value);
	    var v50 = parseInt(document.getElementById("v50").value); 
		var v51 = parseInt(document.getElementById("v51").value);
	    var v52 = parseInt(document.getElementById("v52").value); 
		var v53 = parseInt(document.getElementById("v53").value);	
		var v54 = parseInt(document.getElementById("v54").value);
	    var v55 = parseInt(document.getElementById("v55").value); 
		var v56 = parseInt(document.getElementById("v56").value);
	    var v57 = parseInt(document.getElementById("v57").value); 
		var v58 = parseInt(document.getElementById("v58").value);
	    var v59 = parseInt(document.getElementById("v59").value); 
		var v60 = parseInt(document.getElementById("v60").value);
	    		  // if(isNaN(v18) || isNaN(v36)){ alert("sayi girmelisiniz,bossa 0 giriniz!"); return false;} 
		      if (IS_GECKO) {  
			         XHRO = new XMLHttpRequest();
					     } else if(IS_IE) { 
						         XHRO = new ActiveXObject("Microsoft.XMLHTTP"); 
								    }else{ alert("browseriniz XMLHttpRequest yntemini desteklemiyor!"); return false; } 
      XHRO.open("GET","topla39.php?v47="+v47+"&v48="+v48+"&v49="+v49+"&v50="+v50+"&v51="+v51+"&v52="+v52+"&v53="+v53+"&v54="+v54+"&v55="+v55+"&v56="+v56+"&v57="+v57+"&v58="+v58+"&v59="+v59+"&v60="+v60,true);
   XHRO.onreadystatechange = function(){ 
       if(XHRO.readyState == 4){
     if(XHRO.status == 200){  
	      document.getElementById("sonucod").value = XHRO.responseText;
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
 //Yıl Kayit Kontrol yapma
 $(document).ready(function(){
	$(':submit').click( sonucAl );
	});
	function yilkontrol()
	{
	
	$('div#sonuc').html('<br><br><img src="../images/loading.gif"><br>Kontrol ediliyor...');
	$.ajax({
	type: 'GET',
	url: noCache('yilekle.php'),
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
function deg(ilidi,ilceidi,vocadi,vyiladi,komut) // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
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

//Yeni Yıl Kayit
$(document).ready(function(){
$(':submit').click( sonuckayit );
});

function yilekle()
{
$('div#sonuc').html('<img src="../images/wait.gif"><br>Kaydediliyor...');

$.ajax({
type: 'GET',
url: noCache('yilekle.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return true;
} 

//Yeni Yıl Kayit Ekleme
$(document).ready(function(){
$(':submit').click( sonuckayit );
});

function yilkekle()
{
$('div#sonuc').html('<img src="../images/wait.gif"><br>Kaydediliyor...');

$.ajax({
type: 'GET',
url: noCache('yilkekle.php'),
data: $('form').serialize(),
success: function(ajaxCevap) {
$('div#sonuc').html(ajaxCevap);
}
});
return false;
} 
//Kayit Yıl
function yilsil() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><img src="../images/sil.bmp">');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('yilsil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}

//Kayit Silme
function yilksil() // islem  fonksiyomuzda id ve komut isimli iki degisken kullanacagiz.id degiskeni ile verileri id degerini tasimak iin, komut degiskenini ise gncelleme iin kullanicagiz.
{
$('div#sonuc').html('<br><img src="../images/sil.bmp">');
$.ajax({ 

type: 'GET',//verinin gnderilme yntemini belirliyoruz.

url :noCache('yilksil.php'),//islem yapilacak dosyayi belirtiyoruz.fonksiyonumuzdan gelen degiskenleri islem.php sayfasina get methodu ile gnderiyoruz.

data: $('form').serialize(),//gnderilecek veri olarak formdan elamlarinin degerleri aliyoruz.

success: function(cevap) // islem.php sayfasindan gelen sonulari id zniteligi liste olan bir div'de grntlyouz.
{
$('div#sonuc').html(cevap);
}
});}