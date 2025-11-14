<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します\n";

for ($i = 1; $i <= 100; $i++) {
    
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo "tic-tac\n";
    } elseif ($i % 4 == 0) {
        echo "tic\n";
    } elseif ($i % 5 == 0) {
        echo "tac\n";
    } else {
        echo $i . "\n";
    }
}

// Q2 多次元連想配列
// 問題1
var_dump($personalInfos);

echo $personalInfos[1]['name'] . "の電話番号は" . $personalInfos[1]['tel'] . "です。\n";

//問題2
foreach ($personalInfos as $item => $detail) {
    $item += 1;

    echo $item. "番目の". $detail['name'] ."のメールアドレスは" . $detail['mail'] . "で、電話番号は" . $detail['tel']."です。\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($personalInfos as $item => $detail) {
    $personalInfos[$item]['age'] = $ageList[$item];
}

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
      $this->studentId = $id;
      $this->studentName = $name;
    }

    public function attend()
    {
      echo '授業に出席しました。';
    }
}

$student = new Student(120, '山田');

echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
      $this->studentId = $id;
      $this->studentName = $name;
    }

    public function attend($subject)
    {
      echo "{$this->studentName}は{$subject}の授業に参加しました。学籍番号：{$this->studentId}";
    }
  }

$yamada = new Student(120, '山田');
$yamada -> attend("PHP");

// Q5 定義済みクラス
//問題1
$date = new DateTime('2021-03-02');
$date->modify('-1 month');
echo $date->format('Y-m-d') . "\n";

// 問題2
$today = new DateTime('2021-03-02');
$oneday = new DateTime('1992-04-25');

$interval = $today->diff($oneday);
echo "あの日から" . $interval->days . "日経過しました。\n";

?>