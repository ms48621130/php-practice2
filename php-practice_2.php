<?php
// Q1 tic-tac問題
echo '1から100までのカウントを開始します';
 echo "\n";
 echo "\n";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 4 === 0 && $i % 5 === 0) {
        echo 'tic-tac';
        echo "\n";
    }
    elseif ( $i % 4 === 0 ) {
        echo 'tic';
        echo "\n";
    }
    elseif ($i % 5 === 0) {
        echo 'tac';
        echo "\n";
    }
    else {
        echo $i;
        echo "\n";
    }
}
// for文で1から100をループで取得している。for文内にif,elseif,else文で条件分岐とその処理内容を書いている。

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';
// 変数のインデックス番号と指定したキー名を[]に入れることで、指定のバリューが取得できる。

foreach ($personalInfos as $x => $y) {
    echo ($x+1) .'番目の' . $personalInfos[$x]['name'] . 'のメールアドレスは' . $personalInfos[$x]['mail'] . 'で、電話番号は'. $personalInfos[$x]['tel'] . 'です。';
    // 上の問題と同様にしてバリューを取得。こちらはforeachで配列内要素をループ処理で取得している。
    echo "\n";
}

$ageList = [25, 30, 18];
foreach ($ageList as $x => $y) {
// キーが'age'、バリューが25,30,18
$personalInfos[$x]['age'] = $y; // ここで0番目のageは25,1番目のageは30,2番目のageは30という処理をループで取得し、更に$personalInfosに追加している。
}
var_dump($personalInfos);

// Q3,4 オブジェクト-1,2
class Student //クラス作成。クラスとはオブジェクトを構成する大きな枠組み。オブジェクトの設計図の役割を果たす。
              // 関連のあるメソッドやプロパティをまとめることで一つのクラスとなる。
{
    public $studentId; // $studentIdプロパティを作成。publicはアクセス修飾子と呼ばれ、プロパティ、メソッドを呼び出すキーワード。
    public $studentName; // $studentNameプロパティを作成。

    public function __construct($id, $name) // コンストラクトメソッド作成。インスタンス化の際に自動で実行される
    {
        $this->studentId = $id; // 1つ目の引数を$studentIdプロパティにセット。$thisはインスタンス自身を表す。
                                // $this->studentIdは$studentIdということらしい(別に$studentIdでいいやんと思ってしまう...)
        $this->studentName = $name; // 2つ目の引数を$studentNameプロパティにセット
    }

    public function attend($className) // 変数classNameに呼び出し元の引数PHPが代入される。
    {
        echo $this->studentName . 'は' . $className . 'の授業に参加しました。学籍番号:' . $this->studentId;
        // クラス内ではインスタンス自身を表す$thisを使って変数を指定する
    }
}

$yamada = new Student(120, '山田'); // インスタンス化（クラスを実体化したもの)。クラスを呼び出すことでインスタンス化できる。
echo '学生番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。'
echo "\n";
$shimizu = new Student(6, '清水');
$shimizu->attend('PHP'); // クラス内のattendメソッドを呼び出す

// Q5 定義済みクラス
$now = new DateTime(); // DateTimeクラスに引数を入れない場合、現在時刻が取得できる。
echo $now->modify('-1 months')->format('Y-m-d');
echo "\n";
// formatメソッドで現在日時や曜日を文字列型で取得できる。
// modifyメソッドは日時変更をしたい際に使用する。

$past = new DateTime('1992-04-25'); // 変数pastに指定日時を代入
echo 'あの日から' . $now->diff($past)->format('%a') . '日経過しました。';
// diffメソッドで現在日時と指定日時の差分を取得。
// formatメソッドを使って差分日数を取得して出力。
// メソッドチェーンを使って記述。
?>






















