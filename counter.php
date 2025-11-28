<?php
header('Content-Type: application/json');

$filename = 'count.json';

// 讀取次數
if(file_exists($filename)) {
    $data = json_decode(file_get_contents($filename), true);
} else {
    $data = ["count" => 0];
}

// 增加次數
$data['count']++;

// 存回 JSON
file_put_contents($filename, json_encode($data));

// 回傳 JSON
echo json_encode($data);
?>
