// JavaScript Document
function nesneolustur() {
    var nesne;
    var tarayici = navigator.appName;
    if(tarayici == "Microsoft Internet Explorer"){
        nesne = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        nesne = new XMLHttpRequest();
    }
    return nesne;
}

 var http = nesneolustur();

function degistir() {
var selectil = document.gor.selectil.value;
var selectilce = document.gor.selectilce.value;
var selectoc = document.gor.selectoc.value;
var selectyil = document.gor.selectyil.value;
var selectay = document.gor.selectay.value;
 var v1 = document.gor.v1.value;
 /*var v2 = document.gor.v2.value;
 var v3 = document.gor.v3.value;
 var v4 = document.gor.v4.value;
 var v5 = document.gor.v5.value;
 var v6 = document.gor.v6.value;
 var v7 = document.gor.v7.value;
 var v8 = document.gor.v8.value;
 var v9 = document.gor.v9.value;
 var v10 = document.gor.v10.value;
 var v11 = document.gor.v11.value;
 var v12 = document.gor.v12.value;
 var v13 = document.gor.v13.value;
 var v14 = document.gor.v14.value;
 var v15 = document.gor.v15.value;
 var v16 = document.gor.v16.value;
 var v17 = document.gor.v17.value;
 var v18 = document.gor.v18.value;
 var v19 = document.gor.v19.value;
 var v20 = document.gor.v20.value;
 var v21 = document.gor.v21.value;
 var v22 = document.gor.v22.value;
 var v23 = document.gor.v23.value;
 var v24 = document.gor.v24.value;
 var v25 = document.gor.v25.value;
 var v26 = document.gor.v26.value;
 var v27 = document.gor.v27.value;
 var v28 = document.gor.v28.value;
 var v29 = document.gor.v29.value;
 var v30 = document.gor.v30.value;
 var v31 = document.gor.v31.value;
 var v32 = document.gor.v32.value;
 var v33 = document.gor.v33.value;
 var v34 = document.gor.v34.value;
 var v35 = document.gor.v35.value;
 var v36 = document.gor.v36.value;
 var v37 = document.gor.v37.value;
 var v38 = document.gor.v38.value;
 var v39 = document.gor.v39.value;
 var v40 = document.gor.v40.value;
 var v41 = document.gor.v41.value;
 var v42 = document.gor.v42.value;
 var v43 = document.gor.v43.value;
 var v44 = document.gor.v44.value;
 var v45 = document.gor.v45.value;
 var v46 = document.gor.v46.value;
 var v47 = document.gor.v47.value;
 var v48 = document.gor.v48.value;
 var v49 = document.gor.v49.value;
 var v50 = document.gor.v50.value;
 var v51 = document.gor.v51.value;
 var v52 = document.gor.v52.value;
 var v53 = document.gor.v53.value;
 var v54 = document.gor.v54.value;
 var v55 = document.gor.v55.value;
 var v56 = document.gor.v56.value;
 var v57 = document.gor.v57.value;
 var v58 = document.gor.v58.value;
 var v59 = document.gor.v59.value;
 var v60 = document.gor.v60.value;
 var v61 = document.gor.v61.value;
 var v62 = document.gor.v62.value;
 var v63 = document.gor.v63.value;
 var v64 = document.gor.v64.value;
 var v65 = document.gor.v65.value;
 var v66 = document.gor.v66.value;
 var v67 = document.gor.v67.value;
 var v68 = document.gor.v68.value;
 var v69 = document.gor.v69.value;
 var v70 = document.gor.v70.value;
 var v71 = document.gor.v71.value;
 var v72 = document.gor.v72.value;
 var v73 = document.gor.v73.value;
 var v74 = document.gor.v74.value;
 var v75 = document.gor.v75.value;
 var v76 = document.gor.v76.value;
 var v77 = document.gor.v77.value;
 var v78 = document.gor.v78.value;
 var v79 = document.gor.v79.value;
 var v80 = document.gor.v80.value;
 var v81 = document.gor.v81.value;
 var v82 = document.gor.v82.value;
 var v83 = document.gor.v83.value;
 var v84 = document.gor.v84.value;
 var v85 = document.gor.v85.value;
 var v86 = document.gor.v86.value;
 var v87 = document.gor.v87.value;
 var v88 = document.gor.v88.value;
 var v89 = document.gor.v89.value;
 var v90 = document.gor.v90.value;
 var v91 = document.gor.v91.value;
 var v92 = document.gor.v92.value;
 var v93 = document.gor.v93.value;
 var v94 = document.gor.v94.value;
 var v95 = document.gor.v95.value;
 var v96 = document.gor.v96.value;
 var v97 = document.gor.v97.value;
 var v98 = document.gor.v98.value;
 var v99 = document.gor.v99.value;
 var v100 = document.gor.v100.value;
 var v101 = document.gor.v101.value;
 var v102 = document.gor.v102.value;
 var v103 = document.gor.v103.value;
 var v104 = document.gor.v104.value;
 var v105 = document.gor.v105.value;
 var v106 = document.gor.v106.value;
 var v107 = document.gor.v107.value;
 var v108 = document.gor.v108.value;
 var v109 = document.gor.v109.value;
 var v110 = document.gor.v110.value;
 var v111 = document.gor.v111.value;
 var v112 = document.gor.v112.value;
 var v113 = document.gor.v113.value;
 var v114 = document.gor.v114.value;
 var v115 = document.gor.v115.value;
 var v116 = document.gor.v116.value;
 var v117 = document.gor.v117.value;
 var v118 = document.gor.v118.value;
 var v119 = document.gor.v119.value;
 var v120 = document.gor.v120.value;
 var v121 = document.gor.v121.value;
 var v122 = document.gor.v122.value;
 var v123 = document.gor.v123.value;
 var v124 = document.gor.v124.value;
 var v125 = document.gor.v125.value;
 var v126 = document.gor.v126.value;
 var v127 = document.gor.v127.value;
 var v128 = document.gor.v128.value;
 var v129 = document.gor.v129.value;
 var v130 = document.gor.v130.value;
 var v131 = document.gor.v131.value;
 var v132 = document.gor.v132.value;
 var v133 = document.gor.v133.value;
 var v134 = document.gor.v134.value;
 var v135 = document.gor.v135.value;
 var v136 = document.gor.v136.value;
 var v137 = document.gor.v137.value;
 var v138 = document.gor.v138.value;
 var v139 = document.gor.v139.value;
 var v140 = document.gor.v140.value;
 var v141 = document.gor.v141.value;
 var v142 = document.gor.v142.value;
 var v143 = document.gor.v143.value;
 var v144 = document.gor.v144.value;
 var v145 = document.gor.v145.value;
 var v146 = document.gor.v146.value;
 var v147 = document.gor.v147.value;
 var v148 = document.gor.v148.value;
 var v149 = document.gor.v149.value;
 var v150 = document.gor.v150.value;
 var v151 = document.gor.v151.value;
 var v152 = document.gor.v152.value;
 var v153 = document.gor.v153.value;
 var v154 = document.gor.v154.value;
 var v155 = document.gor.v155.value;
 var v156 = document.gor.v156.value;
 var v157 = document.gor.v157.value;
 var v158 = document.gor.v158.value;
 var v159 = document.gor.v159.value;
 var v160 = document.gor.v160.value;
 var v161 = document.gor.v161.value;
 var v162 = document.gor.v162.value;
 var v163 = document.gor.v163.value;
 var v164 = document.gor.v164.value;
 var v165 = document.gor.v165.value;
 var v166 = document.gor.v166.value;
 var v167 = document.gor.v167.value;
 var v168 = document.gor.v168.value;
 var v169 = document.gor.v169.value;
 var v170 = document.gor.v170.value;
 var v171 = document.gor.v171.value;
 var v172 = document.gor.v172.value;
 var v173 = document.gor.v173.value;
 var v174 = document.gor.v174.value;
 var v175 = document.gor.v175.value;
 var v176 = document.gor.v176.value;
 var v177 = document.gor.v177.value;
 var v178 = document.gor.v178.value;*/
    http.open('get', 'frm023degistir.php?selectil='+selectil+'&selectilce='+selectilce+'&selectoc='+selectoc+'&selectyil='+selectyil+'&selectay='+selectay+'&v1=' + v1/*+'&v2=' + v2+'&v3=' + v3+'&v4=' + v4+'&v5=' + v5+'&v6=' + v6+'&v7=' + v7+'&v8=' + v8+'&v9=' + v9+'&v10=' + v10+'&v11=' + v11+'&v12=' + v12+'&v13=' + v13+'&v14=' + v14+'&v15=' + v15+'&v16=' + v16+'&v17=' + v17+'&v18=' + v18+'&v19=' + v19+'&v20=' + v20+'&v21=' + v21+'&v22=' + v22+'&v23=' + v23+'&v24=' + v24+'&v25=' + v25+'&v26=' + v26+'&v27=' + v27+'&v28=' + v28+'&v29=' + v29+'&v30=' + v30+'&v31=' + v31+'&v32=' + v32+'&v33=' + v33+'&v34=' + v34+'&v35=' + v35+'&v36=' + v36+'&v37=' + v37+'&v38=' + v38+'&v39=' + v39+'&v40=' + v40+'&v41=' + v41+'&v42=' + v42+'&v43=' + v43+'&v44=' + v44+'&v45=' + v45+'&v46=' + v46+'&v47=' + v47+'&v48=' + v48+'&v49=' + v49+'&v50=' + v50+'&v51=' + v51+'&v52=' + v52+'&v53=' + v53+'&v54=' + v54+'&v55=' + v55+'&v56=' + v56+'&v57=' + v57+'&v58=' + v58+'&v59=' + v59+'&v60=' + v60+'&v61=' + v61+'&v62=' + v62+'&v63=' + v63+'&v64=' + v64+'&v65=' + v65+'&v66=' + v66+'&v67=' + v67+'&v68=' + v68+'&v69=' + v69+'&v70=' + v70+'&v71=' + v71+'&v72=' + v72+'&v73=' + v73+'&v74=' + v74+'&v75=' + v75+'&v76=' + v76+'&v77=' + v77+'&v78=' + v78+'&v79=' + v79+'&v80=' + v80+'&v81=' + v81+'&v82=' + v82+'&v83=' + v83+'&v84=' + v84+'&v85=' + v85+'&v86=' + v86+'&v87=' + v87+'&v88=' + v88+'&v89=' + v89+'&v90=' + v90+'&v91=' + v91+'&v92=' + v92+'&v93=' + v93+'&v94=' + v94+'&v95=' + v95+'&v96=' + v96+'&v97=' + v97+'&v98=' + v98+'&v99=' + v99+'&v100=' + v100+'&v101=' + v101+'&v102=' + v102+'&v103=' + v103+'&v104=' + v104+'&v105=' + v105+'&v106=' + v106+'&v107=' + v107+'&v108=' + v108+'&v109=' + v109+'&v110=' + v110+'&v111=' + v111+'&v112=' + v112+'&v113=' + v113+'&v114=' + v114+'&v115=' + v115+'&v116=' + v116+'&v117=' + v117+'&v118=' + v118+'&v119=' + v119+'&v120=' + v120+'&v121=' + v121+'&v122=' + v122+'&v123=' + v123+'&v124=' + v124+'&v125=' + v125+'&v126=' + v126+'&v127=' + v127+'&v128=' + v128+'&v129=' + v129+'&v130=' + v130+'&v131=' + v131+'&v132=' + v132+'&v133=' + v133+'&v134=' + v134+'&v135=' + v135+'&v136=' + v136+'&v137=' + v137+'&v138=' + v138+'&v139=' + v139+'&v140=' + v140+'&v141=' + v141+'&v142=' + v142+'&v143=' + v143+'&v144=' + v144+'&v145=' + v145+'&v146=' + v146+'&v147=' + v147+'&v148=' + v148+'&v149=' + v149+'&v150=' + v150+'&v151=' + v151+'&v152=' + v152+'&v153=' + v153+'&v154=' + v154+'&v155=' + v155+'&v156=' + v156+'&v157=' + v157+'&v158=' + v158+'&v159=' + v159+'&v160=' + v160+'&v161=' + v161+'&v162=' + v162+'&v163=' + v163+'&v164=' + v164+'&v165=' + v165+'&v166=' + v166+'&v167=' + v167+'&v168=' + v168+'&v169=' + v169+'&v170=' + v170+'&v171=' + v171+'&v172=' + v172+'&v173=' + v173+'&v174=' + v174+'&v175=' + v175+'&v176=' + v176+'&v177=' + v177+'&v178=' + v178*/);
    http.onreadystatechange = cevapFonksiyonu;
    http.send(null);
}

function cevapFonksiyonu() {
    if(http.readyState == 4){
        document.getElementById('sonuc').innerHTML = http.responseText;
 }
}