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

function girdiyiekle() {
var yeniyil = document.girdiekle.yeniyil.value;
/*var selectilce = document.girdiekle.selectilce.value;
var selectoc = document.girdiekle.selectoc.value;
var selectyil = document.girdiekle.selectyil.value;
 var v1 = document.girdiekle.v1.value;
 var v2 = document.girdiekle.v2.value;
 var v3 = document.girdiekle.v3.value;
 var v4 = document.girdiekle.v4.value;
 var v5 = document.girdiekle.v5.value;
 var v6 = document.girdiekle.v6.value;
 var v7 = document.girdiekle.v7.value;
 var v8 = document.girdiekle.v8.value;
 var v9 = document.girdiekle.v9.value;
 var v10 = document.girdiekle.v10.value;
 var v11 = document.girdiekle.v11.value;
 var v12 = document.girdiekle.v12.value;
 var v13 = document.girdiekle.v13.value;
 var v14 = document.girdiekle.v14.value;
 var v15 = document.girdiekle.v15.value;
 var v16 = document.girdiekle.v16.value;
 var v17 = document.girdiekle.v17.value;
 var v18 = document.girdiekle.v18.value;
 var v19 = document.girdiekle.v19.value;
 var v20 = document.girdiekle.v20.value;
 var v21 = document.girdiekle.v21.value;
 var v22 = document.girdiekle.v22.value;
 var v23 = document.girdiekle.v23.value;
 var v24 = document.girdiekle.v24.value;
 var v25 = document.girdiekle.v25.value;
 var v26 = document.girdiekle.v26.value;
 var v27 = document.girdiekle.v27.value;
 var v28 = document.girdiekle.v28.value;
 var v29 = document.girdiekle.v29.value;
 var v30 = document.girdiekle.v30.value;
 var v31 = document.girdiekle.v31.value;
 var v32 = document.girdiekle.v32.value;
 var v33 = document.girdiekle.v33.value;
 var v34 = document.girdiekle.v34.value;
 var v35 = document.girdiekle.v35.value;
 var v36 = document.girdiekle.v36.value;
 var v37 = document.girdiekle.v37.value;
 var v38 = document.girdiekle.v38.value;
 var v39 = document.girdiekle.v39.value;
 var v40 = document.girdiekle.v40.value;
 var v41 = document.girdiekle.v41.value;
 var v42 = document.girdiekle.v42.value;
 var v43 = document.girdiekle.v43.value;
 var v44 = document.girdiekle.v44.value;
 var v45 = document.girdiekle.v45.value;
 var v46 = document.girdiekle.v46.value;
 var v47 = document.girdiekle.v47.value;
 var v48 = document.girdiekle.v48.value;
 var v49 = document.girdiekle.v49.value;
 var v50 = document.girdiekle.v50.value;
 var v51 = document.girdiekle.v51.value;
 var v52 = document.girdiekle.v52.value;
 var v53 = document.girdiekle.v53.value;
 var v54 = document.girdiekle.v54.value;
 var v55 = document.girdiekle.v55.value;
 var v56 = document.girdiekle.v56.value;
 var v57 = document.girdiekle.v57.value;
 var v58 = document.girdiekle.v58.value;
 var v59 = document.girdiekle.v59.value;
 var v60 = document.girdiekle.v60.value;
 var v61 = document.girdiekle.v61.value;
 var v62 = document.girdiekle.v62.value;
 var v63 = document.girdiekle.v63.value;
 var v64 = document.girdiekle.v64.value;
 var v65 = document.girdiekle.v65.value;
 var v66 = document.girdiekle.v66.value;
 var v67 = document.girdiekle.v67.value;
 var v68 = document.girdiekle.v68.value;
 var v69 = document.girdiekle.v69.value;
 var v70 = document.girdiekle.v70.value;
 var v71 = document.girdiekle.v71.value;
 var v72 = document.girdiekle.v72.value;
 var v73 = document.girdiekle.v73.value;
 var v74 = document.girdiekle.v74.value;
 var v75 = document.girdiekle.v75.value;
 var v76 = document.girdiekle.v76.value;
 var v77 = document.girdiekle.v77.value;
 var v78 = document.girdiekle.v78.value;
 var v79 = document.girdiekle.v79.value;
 var v80 = document.girdiekle.v80.value;
 var v81 = document.girdiekle.v81.value;
 var v82 = document.girdiekle.v82.value;
 var v83 = document.girdiekle.v83.value;
 var v84 = document.girdiekle.v84.value;
 var v85 = document.girdiekle.v85.value;
 var v86 = document.girdiekle.v86.value;
 var v87 = document.girdiekle.v87.value;
 var v88 = document.girdiekle.v88.value;
 var v89 = document.girdiekle.v89.value;
 var v90 = document.girdiekle.v90.value;
 var v91 = document.girdiekle.v91.value;
 var v92 = document.girdiekle.v92.value;
 var v93 = document.girdiekle.v93.value;
 var v94 = document.girdiekle.v94.value;
 var v95 = document.girdiekle.v95.value;
 var v96 = document.girdiekle.v96.value;
 var v97 = document.girdiekle.v97.value;
 var v98 = document.girdiekle.v98.value;
 var v99 = document.girdiekle.v99.value;
 var v100 = document.girdiekle.v100.value;
 var v101 = document.girdiekle.v101.value;
 var v102 = document.girdiekle.v102.value;
 var v103 = document.girdiekle.v103.value;
 var v104 = document.girdiekle.v104.value;
 var v105 = document.girdiekle.v105.value;
 var v106 = document.girdiekle.v106.value;
 var v107 = document.girdiekle.v107.value;
 var v108 = document.girdiekle.v108.value;
 var v109 = document.girdiekle.v109.value;
 var v110 = document.girdiekle.v110.value;
 var v111 = document.girdiekle.v111.value;
 var v112 = document.girdiekle.v112.value;
 var v113 = document.girdiekle.v113.value;
 var v114 = document.girdiekle.v114.value;
 var v115 = document.girdiekle.v115.value;
 var v116 = document.girdiekle.v116.value;
 var v117 = document.girdiekle.v117.value;
 var v118 = document.girdiekle.v118.value;
 var v119 = document.girdiekle.v119.value;
 var v120 = document.girdiekle.v120.value;
 var v121 = document.girdiekle.v121.value;
 var v122 = document.girdiekle.v122.value;
 var v123 = document.girdiekle.v123.value;
 var v124 = document.girdiekle.v124.value;
 var v125 = document.girdiekle.v125.value;
 var v126 = document.girdiekle.v126.value;
 var v127 = document.girdiekle.v127.value;
 var v128 = document.girdiekle.v128.value;
 var v129 = document.girdiekle.v129.value;
 var v130 = document.girdiekle.v130.value;
 var v131 = document.girdiekle.v131.value;
 var v132 = document.girdiekle.v132.value;
 var v133 = document.girdiekle.v133.value;
 var v134 = document.girdiekle.v134.value;
 var v135 = document.girdiekle.v135.value;
 var v136 = document.girdiekle.v136.value;
 var v137 = document.girdiekle.v137.value;
 var v138 = document.girdiekle.v138.value;
 var v139 = document.girdiekle.v139.value;
 var v140 = document.girdiekle.v140.value;
 var v141 = document.girdiekle.v141.value;
 var v142 = document.girdiekle.v142.value;
 var v143 = document.girdiekle.v143.value;
 var v144 = document.girdiekle.v144.value;
 var v145 = document.girdiekle.v145.value;
 var v146 = document.girdiekle.v146.value;
 var v147 = document.girdiekle.v147.value;
 var v148 = document.girdiekle.v148.value;
 var v149 = document.girdiekle.v149.value;
 var v150 = document.girdiekle.v150.value;
 var v151 = document.girdiekle.v151.value;
 var v152 = document.girdiekle.v152.value;
 var v153 = document.girdiekle.v153.value;
 var v154 = document.girdiekle.v154.value;
 var v155 = document.girdiekle.v155.value;
 var v156 = document.girdiekle.v156.value;
 var v157 = document.girdiekle.v157.value;
 var v158 = document.girdiekle.v158.value;
 var v159 = document.girdiekle.v159.value;
 var v160 = document.girdiekle.v160.value;
 var v161 = document.girdiekle.v161.value;
 var v162 = document.girdiekle.v162.value;
 var v163 = document.girdiekle.v163.value;
 var v164 = document.girdiekle.v164.value;
 var v165 = document.girdiekle.v165.value;
 var v166 = document.girdiekle.v166.value;
 var v167 = document.girdiekle.v167.value;
 var v168 = document.girdiekle.v168.value;
 var v169 = document.girdiekle.v169.value;
 var v170 = document.girdiekle.v170.value;
 var v171 = document.girdiekle.v171.value;
 var v172 = document.girdiekle.v172.value;
 var v173 = document.girdiekle.v173.value;
 var v174 = document.girdiekle.v174.value;
 var v175 = document.girdiekle.v175.value;
 var v176 = document.girdiekle.v176.value;
 var v177 = document.girdiekle.v177.value;
 var v178 = document.girdiekle.v178.value;*/
    http.open('get', 'yilkekle.php?yeniyil='+yeniyil);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuckay').innerHTML = http.responseText;
 }
}