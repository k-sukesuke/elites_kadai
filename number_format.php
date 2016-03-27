<?php

$m = 71;
$n = 4;

if ($m > 0 && $n > 2) {

    // m の値を文字列置換して一文字ずつ配列へ格納
    $str_n = strval($m);
    $len_n = mb_strlen($str_n);
    $number = array_fill (0, $n - $len_n, "0");

    for ($j=0 ; $j < $len_n ; $j++) {
        $number[] = mb_substr($str_n, $j, 1, "UTF-8");
    }

    echo "// m = " . $m . ", n = " . $n . " のとき ";

    foreach ($number as $num) {
        echo "{$num}";
    }

} else {
    echo "数値に誤りがあります。";
}

