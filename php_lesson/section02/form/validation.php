<?php

function validation($data){

    $error = [];

    // 氏名
    if(empty($data['your_name']) || 20 < mb_strlen($data['yuor_name'])){
        $error[] = '「氏名」は20文字以内で入力してください。';
    }

    // メールアドレス
    // url

    // 性別
    if(!isset($data['gender'])){
        $error[] = '「性別」は必ず入力してください。';
    }
    
    // 年齢

    // お問い合わせ内容
    if(empty($data['contact']) || 200 < mb_strlen($data['contact'])){
        $error[] = '「お問い合わせ内容」は200文字以内で入力してください。';
    }

    // 注意事項
    if($data['caution'] !== '1'){
        $error[] = '「注意事項」をご確認ください。';
    }

    return $error;
}

?>