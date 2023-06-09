<?php
function func_name($docnum){

    // make sure there is just numbers in $docnum
    $docnum = preg_replace("/[^0-9]/","",$docnum);      

    // change order of values to use in foreach
    $vals = array_reverse(str_split($docnum));

    // multiply every other value by 2
    $mult = true;
    foreach($vals as $k => $v){
        $vals[$k] = $mult ? $v*2: $v;
        $vals[$k] = (string)($vals[$k]);
        $mult = !$mult;
    }

    // checks for two digits (>9)
    $mp = array_map(function($v){
        return ($v > 9) ? $v[0] + $v[1] : $v;
    }, $vals);

    // adds the values
    $sum = array_sum($mp);

    //gets the mod
    $md = $sum % 10;

    // checks how much for 10
    $result = 10 - $md;

    // returns the value
    return $result;
}
$docnum="1868356119301";
echo func_name($docnum);
?>
