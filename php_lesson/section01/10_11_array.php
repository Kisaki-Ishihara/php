<?php

// 配列 1行
$array_1 = ['あああ',2,3];


// 配列 2行
$array_2 = [
    ['赤','青','黄'],
    ['緑','紫','黒']
];

echo '<pre>';
var_dump($array_2);
echo '</pre>';

echo $array_2[1][1];

// 連想配列
$array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '</pre>';


?>