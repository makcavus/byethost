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

function girdiyidegistir() {
var selectil = document.girdiekleme.selectil.value;
var selectilce = document.girdiekleme.selectilce.value;
var selectoc = document.girdiekleme.selectoc.value;
var selectyil = document.girdiekleme.selectyil.value;
var selectay = document.girdiekleme.selectay.value;
 var v1 = document.girdiekleme.v1.value;
 var v2 = document.girdiekleme.v2.value;
 var v3 = document.girdiekleme.v3.value;
 var v4 = document.girdiekleme.v4.value;
 var v5 = document.girdiekleme.v5.value;
 var v6 = document.girdiekleme.v6.value;
 var v7 = document.girdiekleme.v7.value;
 var v8 = document.girdiekleme.v8.value;
 var v9 = document.girdiekleme.v9.value;
 var v10 = document.girdiekleme.v10.value;
 var v11 = document.girdiekleme.v11.value;
 var v12 = document.girdiekleme.v12.value;
 var v13 = document.girdiekleme.v13.value;
 var v14 = document.girdiekleme.v14.value;
 var v15 = document.girdiekleme.v15.value;
 var v16 = document.girdiekleme.v16.value;
 var v17 = document.girdiekleme.v17.value;
 var v18 = document.girdiekleme.v18.value;
 var v19 = document.girdiekleme.v19.value;
 var v20 = document.girdiekleme.v20.value;
 var v21 = document.girdiekleme.v21.value;
 var v22 = document.girdiekleme.v22.value;
 var v23 = document.girdiekleme.v23.value;
 var v24 = document.girdiekleme.v24.value;
 var v25 = document.girdiekleme.v25.value;
 var v26 = document.girdiekleme.v26.value;
 var v27 = document.girdiekleme.v27.value;
 var v28 = document.girdiekleme.v28.value;
 var v29 = document.girdiekleme.v29.value;
 var v30 = document.girdiekleme.v30.value;
 var v31 = document.girdiekleme.v31.value;
 var v32 = document.girdiekleme.v32.value;
 var v33 = document.girdiekleme.v33.value;
 var v34 = document.girdiekleme.v34.value;
 var v35 = document.girdiekleme.v35.value;
 var v36 = document.girdiekleme.v36.value;
 var v37 = document.girdiekleme.v37.value;
 var v38 = document.girdiekleme.v38.value;
 var v39 = document.girdiekleme.v39.value;
 var v40 = document.girdiekleme.v40.value;
 var v41 = document.girdiekleme.v41.value;
 var v42 = document.girdiekleme.v42.value;
 var v43 = document.girdiekleme.v43.value;
 var v44 = document.girdiekleme.v44.value;
 var v45 = document.girdiekleme.v45.value;
 var v46 = document.girdiekleme.v46.value;
 var v47 = document.girdiekleme.v47.value;
 var v48 = document.girdiekleme.v48.value;
 var v49 = document.girdiekleme.v49.value;
 var v50 = document.girdiekleme.v50.value;
 var v51 = document.girdiekleme.v51.value;
 var v52 = document.girdiekleme.v52.value;
 var v53 = document.girdiekleme.v53.value;
 var v54 = document.girdiekleme.v54.value;
 var v55 = document.girdiekleme.v55.value;
 var v56 = document.girdiekleme.v56.value;
 var v57 = document.girdiekleme.v57.value;
 var v58 = document.girdiekleme.v58.value;
 var v59 = document.girdiekleme.v59.value;
 var v60 = document.girdiekleme.v60.value;
 var v61 = document.girdiekleme.v61.value;
 var v62 = document.girdiekleme.v62.value;
 var v63 = document.girdiekleme.v63.value;
 var v64 = document.girdiekleme.v64.value;
 var v65 = document.girdiekleme.v65.value;
 var v66 = document.girdiekleme.v66.value;
 var v67 = document.girdiekleme.v67.value;
 var v68 = document.girdiekleme.v68.value;
 var v69 = document.girdiekleme.v69.value;
 var v70 = document.girdiekleme.v70.value;
 var v71 = document.girdiekleme.v71.value;
 var v72 = document.girdiekleme.v72.value;
 var v73 = document.girdiekleme.v73.value;
 var v74 = document.girdiekleme.v74.value;
 var v75 = document.girdiekleme.v75.value;
 var v76 = document.girdiekleme.v76.value;
 var v77 = document.girdiekleme.v77.value;
 var v78 = document.girdiekleme.v78.value;
 var v79 = document.girdiekleme.v79.value;
 var v80 = document.girdiekleme.v80.value;
 var v81 = document.girdiekleme.v81.value;
 var v82 = document.girdiekleme.v82.value;
 var v83 = document.girdiekleme.v83.value;
 var v84 = document.girdiekleme.v84.value;
 var v85 = document.girdiekleme.v85.value;
 var v86 = document.girdiekleme.v86.value;
 var v87 = document.girdiekleme.v87.value;
 var v88 = document.girdiekleme.v88.value;
 var v89 = document.girdiekleme.v89.value;
 var v90 = document.girdiekleme.v90.value;
 var v91 = document.girdiekleme.v91.value;
 var v92 = document.girdiekleme.v92.value;
 var v93 = document.girdiekleme.v93.value;
 var v94 = document.girdiekleme.v94.value;
 var v95 = document.girdiekleme.v95.value;
 var v96 = document.girdiekleme.v96.value;
 var v97 = document.girdiekleme.v97.value;
 var v98 = document.girdiekleme.v98.value;
 var v99 = document.girdiekleme.v99.value;
 var v100 = document.girdiekleme.v100.value;
 var v101 = document.girdiekleme.v101.value;
 var v102 = document.girdiekleme.v102.value;
 var v103 = document.girdiekleme.v103.value;
 var v104 = document.girdiekleme.v104.value;
 var v105 = document.girdiekleme.v105.value;
 var v106 = document.girdiekleme.v106.value;
 var v107 = document.girdiekleme.v107.value;
 var v108 = document.girdiekleme.v108.value;
 var v109 = document.girdiekleme.v109.value;
 var v110 = document.girdiekleme.v110.value;
 var v111 = document.girdiekleme.v111.value;
 var v112 = document.girdiekleme.v112.value;
 var v113 = document.girdiekleme.v113.value;
 var v114 = document.girdiekleme.v114.value;
 var v115 = document.girdiekleme.v115.value;
 var v116 = document.girdiekleme.v116.value;
 var v117 = document.girdiekleme.v117.value;
 var v118 = document.girdiekleme.v118.value;
 var v119 = document.girdiekleme.v119.value;
 var v120 = document.girdiekleme.v120.value;
 var v121 = document.girdiekleme.v121.value;
 var v122 = document.girdiekleme.v122.value;
 var v123 = document.girdiekleme.v123.value;
 var v124 = document.girdiekleme.v124.value;
 var v125 = document.girdiekleme.v125.value;
 var v126 = document.girdiekleme.v126.value;
 var v127 = document.girdiekleme.v127.value;
 var v128 = document.girdiekleme.v128.value;
 var v129 = document.girdiekleme.v129.value;
 var v130 = document.girdiekleme.v130.value;
 var v131 = document.girdiekleme.v131.value;
 var v132 = document.girdiekleme.v132.value;
 var v133 = document.girdiekleme.v133.value;
 var v134 = document.girdiekleme.v134.value;
 var v135 = document.girdiekleme.v135.value;
 var v136 = document.girdiekleme.v136.value;
 var v137 = document.girdiekleme.v137.value;
 var v138 = document.girdiekleme.v138.value;
 var v139 = document.girdiekleme.v139.value;
 var v140 = document.girdiekleme.v140.value;
 var v141 = document.girdiekleme.v141.value;
 var v142 = document.girdiekleme.v142.value;
 var v143 = document.girdiekleme.v143.value;
 var v144 = document.girdiekleme.v144.value;
 var v145 = document.girdiekleme.v145.value;
 var v146 = document.girdiekleme.v146.value;
 var v147 = document.girdiekleme.v147.value;
 var v148 = document.girdiekleme.v148.value;
 var v149 = document.girdiekleme.v149.value;
 var v150 = document.girdiekleme.v150.value;
 var v151 = document.girdiekleme.v151.value;
 var v152 = document.girdiekleme.v152.value;
 var v153 = document.girdiekleme.v153.value;
 var v154 = document.girdiekleme.v154.value;
 var v155 = document.girdiekleme.v155.value;
 var v156 = document.girdiekleme.v156.value;
 var v157 = document.girdiekleme.v157.value;
 var v158 = document.girdiekleme.v158.value;
 var v159 = document.girdiekleme.v159.value;
 var v160 = document.girdiekleme.v160.value;
 var v161 = document.girdiekleme.v161.value;
 var v162 = document.girdiekleme.v162.value;
 var v163 = document.girdiekleme.v163.value;
 var v164 = document.girdiekleme.v164.value;
 var v165 = document.girdiekleme.v165.value;
 var v166 = document.girdiekleme.v166.value;
 var v167 = document.girdiekleme.v167.value;
 var v168 = document.girdiekleme.v168.value;
 var v169 = document.girdiekleme.v169.value;
 var v170 = document.girdiekleme.v170.value;
 var v171 = document.girdiekleme.v171.value;
 var v172 = document.girdiekleme.v172.value;
 var v173 = document.girdiekleme.v173.value;
 var v174 = document.girdiekleme.v174.value;
 var v175 = document.girdiekleme.v175.value;
 var v176 = document.girdiekleme.v176.value;
 var v177 = document.girdiekleme.v177.value;
 var v178 = document.girdiekleme.v178.value;
    http.open('get', noCache('023kdegistir.php?selectil='+selectil+'&selectilce='+selectilce+'&selectoc='+selectoc+'&selectyil='+selectyil+'&selectay='+selectay+'&v1=' + v1+'&v2=' + v2+'&v3=' + v3+'&v4=' + v4+'&v5=' + v5+'&v6=' + v6+'&v7=' + v7+'&v8=' + v8+'&v9=' + v9+'&v10=' + v10+'&v11=' + v11+'&v12=' + v12+'&v13=' + v13+'&v14=' + v14+'&v15=' + v15+'&v16=' + v16+'&v17=' + v17+'&v18=' + v18+'&v19=' + v19+'&v20=' + v20+'&v21=' + v21+'&v22=' + v22+'&v23=' + v23+'&v24=' + v24+'&v25=' + v25+'&v26=' + v26+'&v27=' + v27+'&v28=' + v28+'&v29=' + v29+'&v30=' + v30+'&v31=' + v31+'&v32=' + v32+'&v33=' + v33+'&v34=' + v34+'&v35=' + v35+'&v36=' + v36+'&v37=' + v37+'&v38=' + v38+'&v39=' + v39+'&v40=' + v40+'&v41=' + v41+'&v42=' + v42+'&v43=' + v43+'&v44=' + v44+'&v45=' + v45+'&v46=' + v46+'&v47=' + v47+'&v48=' + v48+'&v49=' + v49+'&v50=' + v50+'&v51=' + v51+'&v52=' + v52+'&v53=' + v53+'&v54=' + v54+'&v55=' + v55+'&v56=' + v56+'&v57=' + v57+'&v58=' + v58+'&v59=' + v59+'&v60=' + v60+'&v61=' + v61+'&v62=' + v62+'&v63=' + v63+'&v64=' + v64+'&v65=' + v65+'&v66=' + v66+'&v67=' + v67+'&v68=' + v68+'&v69=' + v69+'&v70=' + v70+'&v71=' + v71+'&v72=' + v72+'&v73=' + v73+'&v74=' + v74+'&v75=' + v75+'&v76=' + v76+'&v77=' + v77+'&v78=' + v78+'&v79=' + v79+'&v80=' + v80+'&v81=' + v81+'&v82=' + v82+'&v83=' + v83+'&v84=' + v84+'&v85=' + v85+'&v86=' + v86+'&v87=' + v87+'&v88=' + v88+'&v89=' + v89+'&v90=' + v90+'&v91=' + v91+'&v92=' + v92+'&v93=' + v93+'&v94=' + v94+'&v95=' + v95+'&v96=' + v96+'&v97=' + v97+'&v98=' + v98+'&v99=' + v99+'&v100=' + v100+'&v101=' + v101+'&v102=' + v102+'&v103=' + v103+'&v104=' + v104+'&v105=' + v105+'&v106=' + v106+'&v107=' + v107+'&v108=' + v108+'&v109=' + v109+'&v110=' + v110+'&v111=' + v111+'&v112=' + v112+'&v113=' + v113+'&v114=' + v114+'&v115=' + v115+'&v116=' + v116+'&v117=' + v117+'&v118=' + v118+'&v119=' + v119+'&v120=' + v120+'&v121=' + v121+'&v122=' + v122+'&v123=' + v123+'&v124=' + v124+'&v125=' + v125+'&v126=' + v126+'&v127=' + v127+'&v128=' + v128+'&v129=' + v129+'&v130=' + v130+'&v131=' + v131+'&v132=' + v132+'&v133=' + v133+'&v134=' + v134+'&v135=' + v135+'&v136=' + v136+'&v137=' + v137+'&v138=' + v138+'&v139=' + v139+'&v140=' + v140+'&v141=' + v141+'&v142=' + v142+'&v143=' + v143+'&v144=' + v144+'&v145=' + v145+'&v146=' + v146+'&v147=' + v147+'&v148=' + v148+'&v149=' + v149+'&v150=' + v150+'&v151=' + v151+'&v152=' + v152+'&v153=' + v153+'&v154=' + v154+'&v155=' + v155+'&v156=' + v156+'&v157=' + v157+'&v158=' + v158+'&v159=' + v159+'&v160=' + v160+'&v161=' + v161+'&v162=' + v162+'&v163=' + v163+'&v164=' + v164+'&v165=' + v165+'&v166=' + v166+'&v167=' + v167+'&v168=' + v168+'&v169=' + v169+'&v170=' + v170+'&v171=' + v171+'&v172=' + v172+'&v173=' + v173+'&v174=' + v174+'&v175=' + v175+'&v176=' + v176+'&v177=' + v177+'&v178=' + v178));
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}

//TANZİM BİLGİLERİ DEĞİŞTİRME
function tanzimidegistir() {
	var selectil = document.tanzim_update.aheilad.value;
	var selectilce = document.tanzim_update.aheilunvan.value;
	var selectoc = document.tanzim_update.aseilad.value;
	var selectyil = document.tanzim_update.aseilunvan.value;
	var selectil = document.tanzim_update.aheilcead.value;
	var selectilce = document.tanzim_update.aheilceunvan.value;
	var selectoc = document.tanzim_update.aseilcead.value;
	var selectyil = document.tanzim_update.aseilceunvan.value;

http.open('get', noCache('tanzimdegistir.php?aheilad='+aheilad+'&aheilunvan='+aheilunvan+'&aseilad='+aseilad+'&aseilunvan='+aseilunvan));
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
 
