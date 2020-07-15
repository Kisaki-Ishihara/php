<?php

$globalVariable = "グローバル変数です。";

function checkScope(){
    $localVariable = "ローカル変数です。";
    echo $localVariable;
    // global $globalVariable;  // ほとんど使わない
    // echo $globalVariable;
}

echo $globalVariable;
// echo $localVariable;   // 表示されない

checkScope();  // ローカル

function checkGlobal($str){
    echo $str;
}

checkGlobal($globalVariable);


?>