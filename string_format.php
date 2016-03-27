<?php

$s = "hoge";
$m = mb_strlen($s);
$n = 3;

if ($m >= $n) {

    // s の文字列を配列に格納
    for ($i=0 ; $i < $m ; $i++) {
        $str[] = mb_substr($s, $i, 1, "UTF-8");
    }

    echo "// s = \"" . $s . "\", n = " . $n . " ";
    // 指定文字を出力
    echo $str[$n];

} else {
    echo $m . "以下の正の整数を入力してください";
}