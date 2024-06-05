<?php
// Q1 変数と文字列
$name = '清水';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$sum = 5 * 4;
echo $sum;
echo "\n" . $sum /2;

// Q3 日付操作
echo date('現在時刻は、Y年m月d日 H時i分s秒です。');

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは' . $device . 'です。';
}
else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 19;
$message = ($age >= 20) ? '成人です。' : '未成人です。';
echo $message;

// Q6 配列
$kantou = [
    '東京都',
    '神奈川県',
    '埼玉県',
    '栃木県',
    '千葉県',
    '群馬県',
    '茨城県'
];
echo $kantou[3] . 'と' . $kantou[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$capital = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市'
    ];
foreach ($capital as $x => $y) {
    echo $y;
    echo "\n";
}

// Q8 連想配列-2
$capital = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '大阪府' => '大阪市',
    '静岡県' => '静岡市'
];
foreach ($capital as $key => $value) {
    if ($key == '埼玉県') {
        echo $key . 'の県庁所在地は' . $value . 'です。';
        exit;
    }
}

// Q9 連想配列-3
foreach ($capital as $key => $value) {
  if ($key === '大阪府' || $key === '静岡県') {
      echo $key . 'は関東地方ではありません。';
      echo "\n";
  }
  else {
      echo $key . 'の県庁所在地は' . $value . 'です。';
      echo "\n";
  }
}

  // if (in_array('大阪府', $capital)) {
  //   echo $key . 'は関東地方ではありません。';
  //   echo "\n";
  // }
  // else {
  //     echo $key . 'の県庁所在地は' . $value . 'です。';
  //     echo "\n";
  // }

// Q10 関数-1
function hello($name) {
    return $name . 'さん、こんにちは。';
}
echo hello('清水');
echo "\n";
echo hello('中村');

// Q11 関数-2
function calcTaxInPrice($price) {
    $taxInPrice = $price * 1.1;
    return $taxInPrice;
    // ③$taxInPriceを返り値として呼び出し元に返す
  }
  $price = 1000;
  // ①税抜価格を変数に代入
  echo $price . '円の商品の税込価格は' . calcTaxInPrice($price) . '円です。';
  // ②引数を渡して関数を呼び出す

// Q12 関数とif文
function distinguishNum($num) {
  if ($num % 2 === 0) {
      echo $num . 'は偶数です。';
  }
  else {
      echo $num . 'は奇数です。';
  }
}
distinguishNum(7);
echo "\n";
distinguishNum(12);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
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
  echo evaluateGrade('C');

?>