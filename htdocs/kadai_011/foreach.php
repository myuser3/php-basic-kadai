<?php
$vegetable = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

// 連想配列$vegetableのキーと値を1つずつ出させる
foreach ($vegetable as $each => $value) {
  echo "{$each} : {$value}<br>"; 
}

?>
