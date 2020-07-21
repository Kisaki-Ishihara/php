<?php

// 商品クラス
class Product{
    private $price = 1000;

    // 価格取得
    public function getPrice(){
        return $this->$price;
    }
}

// カートクラス
class Cart{
    private $products = [];

    // 商品追加
    public function addItem($products){
        $this->$products[] = $product;
    }
    // 商品取得
    public function getItem($index){
        return $this->products[$index];
    }
}

$cart = new Cart();

// 引数にインスタンス
$cart->addItem(new Product()); // エラー

// 通常(それぞれメソッド実行)
$gotItem = $cart->getItem(0); // エラー
$price = $gotItem->getPrice();

echo '<br>';
echo '通常メソッド' . '<br>';
echo $price;
echo '<br>';

// メソッドチェーン
// メソッドの後にインスタンス(この場合はProduct)のメソッド(getPrice)をチェーンしている
$price = $cart->getItem(0)->getPrice();

echo 'メソッドチェーン' . '<br>';
echo $price;
echo '<br>';

?>