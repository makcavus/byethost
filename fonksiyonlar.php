<?php
function replace_tr($text) {
   $text = trim($text);
   $search = array('a','b','c','ç','d','e','f','g','ğ','h','ı','i','j','k','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z','x','w','q');
   $replace = array('A','B','C','Ç','D','E','F','G','Ğ','H','I','İ','J','K','L','M','N','O','Ö','P','R','S','Ş','T','U','Ü','V','Y','Z','X','W','Q');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}


function replace_tr_krt($text) {
   $text = trim($text);
   $search = array('ı','ğ','ü','ş','ö','ç','İ','Ğ','Ü','Ş','Ö','Ç');
   $replace = array('i','g','u','s','o','c','I','G','U','S','O','C');
   $new_text = str_replace($search,$replace,$text);
   return $new_text;
}
/*
function toUpperCase( $input ){	
return strtoupper( strtr( $input,'ğüşıiöç', 'ĞÜŞIİÖÇ') );
}
*/

//function trsuz($str){ $str=mb_convert_encoding($str, "iso-8859-9","utf-8");  return $str;   } 
?>