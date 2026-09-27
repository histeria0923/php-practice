<?php
// Q1 変数と文字列
$name = '片岡';
echo '私の名前は' . $name . 'です。';

// Q2 四則演算
$num = 20;
var_dump ($num);
var_dump ($num / 2)

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');

echo '現在時刻は、'. date('Y年m月d日　H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';

if ($device === 'windows') {
    echo '使用デバイスは' . $device . 'です。';
} else if ($device === 'mac') {
    echo '使用デバイスは' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
    }

// Q5 条件分岐-2 三項演算子
$age = 20;
$message = ($age >= 18) ? '成人です。': '未成年です。';

echo $message;

// Q6 配列
$purefecture = ['東京都','神奈川県','千葉県','茨城県','栃木県','群馬県','埼玉県'];

echo $purefecture[2] . 'と' . $purefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$purefecture = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','茨城県' => '水戸市','栃木県' => '宇都宮市','群馬県' => '前橋市','埼玉県' => 'さいたま市'];

var_dump($purefecture['東京都'],$purefecture['神奈川県'],$purefecture['千葉県'],$purefecture['茨城県'],$purefecture['栃木県'],$purefecture['群馬県'],$purefecture['埼玉県']);

// Q8 連想配列-2
$purefecture = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','茨城県' => '水戸市','栃木県' => '宇都宮市','群馬県' => '前橋市','埼玉県' => 'さいたま市'];
$last_key = array_key_last($purefecture);

foreach ($purefecture as $key => $value) {
if ($key === $last_key) 
    echo $key . 'の県庁所在地は、' .  $value . 'です。';
}

// Q9 連想配列-3
$purefecture = ['東京都' => '新宿区','神奈川県' => '横浜市','千葉県' => '千葉市','茨城県' => '水戸市','栃木県' => '宇都宮市','群馬県' => '前橋市','埼玉県' => 'さいたま市'
,'愛知県','大阪府'];
$kanto = ['東京都','神奈川県','千葉県','茨城県','栃木県','群馬県','埼玉県'];

foreach ($purefecture as $key => $value) {
    if (in_array($key, $kanto, true)){
        echo $key . 'の県庁所在地は、' .  $value . 'です。'. PHP_EOL;
    } else {
        echo $value . 'は関東地方ではありません。' . PHP_EOL;
    }
}

// Q10 関数-1
function hello($name)
{
    return $name. 'さん、こんにちは。';
}

echo hello('金谷') . PHP_EOL;
echo hello('安藤');

// Q11 関数-2
function calcTaxinlnPrice($price)
{
    return $price * 1.1;
}

$price = 1000;
$tanxlnPrice = calcTaxinlnPrice($price);

echo $price . 'の商品の税込み価格は' . $tanxlnPrice . 'です。';

// Q12 関数とif文
function distinguishNum($number)
{
    if ($number % 2 !== 0) {
        $result = $number . 'は奇数です。';
    } else {
        $result = $number . 'は偶数です。';  
    }
    
    return $result;
}

echo distinguishNum(11) . PHP_EOL;
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGlrade($score){
    
    switch($score){
        case 'A':
        case 'B':
            return '合格です。';
            
        case 'C':
            return '合格ですが追加課題があります。';
            
        case 'D':
            return '不合格です。';
            
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGlrade('A') . PHP_EOL;
echo evaluateGlrade('C');

?>