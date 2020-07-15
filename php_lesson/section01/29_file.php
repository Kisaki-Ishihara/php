<?php

// ファイルの読み込み
// エラーで処理が止まる
require 'common/common.php';

echo $commonVariable;

echo '<br>';

// 絶対パスを表示
echo __DIR__;

echo '<br>';

// ファイル名を表示
echo __FILE__;

echo '<br>';

commonTest();

?>