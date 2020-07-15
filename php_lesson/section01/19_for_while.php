<?php

// for 繰り返す数が決まっている場合に使用することが多い
// while 繰り返す数が決まっていない場合に使用することが多い

for($i = 0; $i < 10; $i++) {

    if($i === 5){
        // break;      // 処理を終了する
        // continue;   // 処理をスキップする
    }

    echo $i;
}

echo '<br>';

$j = 0;
while($j < 5){
    echo $j;
    $j++;
}

echo '<br>';

// do while というものもある
// do{echo $j;}
// while($j < 5);

?>