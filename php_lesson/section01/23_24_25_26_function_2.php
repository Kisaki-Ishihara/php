<?php

// 文字の長さ

$text_1 = 'abc';

echo strlen($text_1);

echo '<br>';

// マルチバイト
// 日本語 SJIS, UTF-8 3~6バイト

$text_2 = 'あいうえお';

echo mb_strlen($text_2);

echo '<br>';

// 文字列の置換

$str = '文字列を置換します。';

echo str_replace('置換','ちかん',$str);

echo '<br>';

// 指定文字列で分解

$str_2 = '指定文字列で、分解します。';

echo '<pre>';
var_dump(explode('、', $str_2));
echo '</pre>';

// 文字列を結合する implode



// 正規表現
// 文字,数字,郵便番号,メールアドレス等を確認できる

$str_3 = '特定の文字列が含まれるか確認する。';

echo preg_match('/文字列/',$str_3);

echo '<br>';

// 指定文字列から文字列を取得する

echo substr('abcde', 2);

echo '<br>';

echo mb_substr('かきくけこ', 2);

echo '<br>';

// 配列に配列を追加する

$array = ['りんご','みかん'];

array_push($array, 'ぶどう', 'なし');

echo '<pre>';
var_dump($array);
echo '</pre>';

?>