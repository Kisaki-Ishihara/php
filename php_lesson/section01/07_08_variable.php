<?php

// 変数 動的型付 = 自動的に型に入れてくれる

$test_1 = 123;
$test_2 = 456;

$test_3 = $test_1 . $test_2;

// 変数は$をつける
// 先頭は英文字かアンダーバー
// 変数をピリオドで繋げる場合、文字として扱われる


// $test = 'テストです。';

// echo $test;

var_dump($test_3);
// どんな型が入っているか確認できる
// 配列 オブジェクト コレクション型



?>