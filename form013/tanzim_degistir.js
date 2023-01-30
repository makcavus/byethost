// JavaScript Document
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
    function nesneolustur() {
        var nesne;
        var tarayici = navigator.appName;
        if(tarayici == "Microsoft Internet Explorer"){
            nesne = new ActiveXObject("Microsoft.XMLHTTP");
        nesne = new ActiveXObject("Msxml2.XMLHTTP");
        }else{
            nesne = new XMLHttpRequest();
        }
        return nesne;
    }
    
     var http = nesneolustur();
   
    
    //TANZİM BİLGİLERİ DEĞİŞTİRME
    function tanzimidegistir() {
        var form_say = document.tanzim_update.form_say.value;
        var formad = document.tanzim_update.formad.value;
        var aheilad = document.tanzim_update.aheilad.value;
        var aheilunvan = document.tanzim_update.aheilunvan.value;
        var aseilad = document.tanzim_update.aseilad.value;
        var aseilunvan = document.tanzim_update.aseilunvan.value;
        var aheilcead = document.tanzim_update.aheilcead.value;
        var aheilceunvan = document.tanzim_update.aheilceunvan.value;
        var aseilcead = document.tanzim_update.aseilcead.value;
        var aseilceunvan = document.tanzim_update.aseilceunvan.value;
    
    http.open('get', noCache('tanzimdegistir.php?form_say='+form_say+'&formad='+formad+'&aheilad='+aheilad+'&aheilunvan='+aheilunvan+'&aseilad='+aseilad+'&aseilunvan='+aseilunvan+
    '&aheilcead='+aheilcead+'&aheilceunvan='+aheilceunvan+'&aseilcead='+aseilcead+'&aseilceunvan='+aseilceunvan));
        http.onreadystatechange = cevapTanzim;
        http.send(null);
    }
    
    function cevapTanzim() {
        if(http.readyState == 4){
            document.getElementById('sonuctanzim').innerHTML = http.responseText;
     }
    }
    //------------------------------------------------//
    //Tarih girisi
    var mm;
    var dd;
    var yyyy; 
    var daysInMonth;
    var minYear = 1930; //inclusive, 1930 is the lowest valid year
    var maxYear = 2003; //inclusive, 2003 is the highest valid year
    
    function checkDate(){
        mm = document.girdiekleme.month.value;
        dd = document.girdiekleme.day.value;
        yyyy = document.girdiekleme.year.value;
        setDaysInMonth(mm); 	
        var submitting = (checkMonth() && checkDay() && checkYear());
        if(submitting){
            //set the hidden field with the whole date string
            document.girdiekleme.mmddyyyy.value=mm+"/"+dd+"/"+yyyy;
        }
        return submitting;
    }
    function checkMonth(){
        if(mm!="" && mm >=1 && mm <=12){
            return true;
        }
        alert('valid months are 1 to 12');
        document.girdiekleme.month.value="";
        document.girdiekleme.month.focus();
        return false;
    }
    function checkDay(){
        if(dd!="" && dd >=1 && dd <= daysInMonth){
            return true;
        }
        alert('valid days are 1 to ' + daysInMonth);
        document.girdiekleme.day.value="";
        document.girdiekleme.day.focus();
        return false;
    }
    function checkYear(){
        if(yyyy.length==4 && yyyy >= minYear && yyyy <= maxYear){ 
            return true; 
        } 
        alert('Please enter a 4-digit year between '+minYear+' and '+maxYear); 
        document.girdiekleme.year.value=""; 
        document.girdiekleme.year.focus(); 
        return false; 
    }
    function setDaysInMonth(month){
        leap = (yyyy%400==0) || ((yyyy%4==0) && (yyyy%100 !=0));
        if(month==4 || month==6 || month==9 || month==11){
            daysInMonth = 30;
        }
        else if(month==2 && leap){
            daysInMonth = 29;
        }
        else if(month==2 && !leap){
            daysInMonth = 28;
        }
        else{
            daysInMonth = 31;
        }
    }
    function hoppa() {
        if
    (screen.width==1280||screen.height==1024){ // ��z�n�rl�k 1280*1024 Ise
     window.open("","hoppa","width=1200,height=900,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
    }else if 
    (screen.width==1280||screen.height==960){ // ��z�n�rl�k 1280*960 Ise
     window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
    }else{ // ��z�n�rl�k Bunlardan Hi�biri Degil veya Farkli Ise
    window.open("","hoppa","width=1000,height=800,left=0,top=0,resizable=1,menubar=1,scrollbars=1")
    }
     }
     /*function hoppa() {
     window.open("","hoppa","width=1000, height=1000")
     }*/
     
    