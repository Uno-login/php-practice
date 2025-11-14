<?php
// Q1 変数と文字列
$name = "安藤";
echo "私の名前は「" . $name . "」です。";

// Q2 四則演算
$times = 5*4;
echo $times . "\n";
echo $times / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo "現在時刻は、" . date('Y年m月d日 H時i分s秒') . "です。";

// Q4 条件分岐-1 if文
$device ="mac";

if ($device == "windows"){
    echo "使用OSは、windowsです。";
} else {
    if ($device == 'mac'){
        echo "使用のOSは、macです。";
    } else {
        echo "どちらでもありません。";
    }
}

// Q5 条件分岐-2 三項演算子
$age = 23;
echo ($age < 18) ? "未成年です。" : "成人です。";

// Q6 配列
$kanto = ["東京都", "群馬県", "栃木県", "千葉県"];

echo $kanto[2] . "と" .$kanto[3] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capital = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市",
    "埼玉県" => "さいたま市",
    "栃木県" => "宇都宮市",
    "群馬県" => "前橋市",
    "茨城県" => "水戸市"
];

foreach ($kanto_capital as $capital_city) {
    echo $capital_city . "\n";
}

// Q8 連想配列-2
$pref = "埼玉県";

if ($pref == "埼玉県") {
    echo $pref . "の県庁所在地は、" . $kanto_capital[$pref] . "です。";
}

// Q9 連想配列-3
foreach ($kanto_capital as $pref => $capital) {

 if (in_array($pref, ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"])) {
        echo $pref . "の県庁所在地は、" . $capital . "です。\n";
    } else {
        echo $pref . "は関東地方ではありません。\n";
    }
}

// Q10 関数-1
function hello($name) {
    return $name . "さん、こんにちは。";
}

echo hello("金谷") . "\n";
echo hello("安藤") . "\n";

// Q11 関数-2
 function calcTaxInPrice($price) {
     return $price * 1.1;
 }

 $price = 1000;
 $taxInPrice = calcTaxInPrice($price); 
 
 echo "$price" . "円の商品の税込価格は" . $taxInPrice . "円です。";

// Q12 関数とif文
function distinguishNum($number) {
    if ($number % 2 === 0) {
        return $number . "は偶数です。";
    } else {
        return $number . "は奇数です。";
    }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($score) {
    switch ($score) {
        case "A":
        case "B":
            return "合格です。";
            break;
            
        case "C":
            return "合格ですが追加課題があります。";
            break;
            
        case "D":
            return "不合格です。";
            break;
            
        default:
            return "判定不明です。講師に問い合わせてください。";
            break;
    }
}
echo evaluateGrade('A') . "\n";
echo evaluateGrade('Z') . "\n";

?>