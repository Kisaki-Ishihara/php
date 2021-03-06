<?php

// 複数の値 foreach

$members = [
    'name' => '本田',
    'height' => '170',
    'hobby' => 'サッカー'
];

// valueのみ表示
foreach($members as $member) {
    echo $member;
}

echo '<br>';

// keyとvalueそれぞれ表示
foreach($members as $member => $value){
    echo $member . 'は' . $value . 'です。';
}

echo '<br>';


$members_2 = [
    '本田' =>[
        'height' => '170',
        'hobby' => 'サッカー'
    ],
    '香川' =>[
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

// 多段階の配列を展開
foreach($members_2 as $member_1) {
    foreach($member_1 as $member => $value) {
        echo $member .'は' . $value . 'です。';
    }
}






?>