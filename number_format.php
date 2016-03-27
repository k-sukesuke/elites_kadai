<?php

$m = 71;
$n = 4;

if ($m > 0 && $n > 2) {

    // n 桁分の0を各配列に格納
    $number = array_fill (0, $n, "0");
    print_r ($number);

    // m の値を一桁ずつ上書きして格納
    $str_n = strval($n);
    vardump($str_n);
    for($i=0;$i<strlen($str_n);$i++){
        $c = $str[$i];
        array_push($number,$c);
    }

    // 出力
    echo $number;
    print_r ($number);



} else {
    echo "数値に誤りがあります。";
}

