<?php

$db_file = dirname(__FILE__) . '/資料庫.txt';
$time = file_get_contents($db_file);

// 當這個頁面重新整理的時候，將會使用GET而不是POST

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>感謝您的下訂</title>
</head>

<body>
    <h1>感謝您的下訂</h1>
    <p>刷卡時間為 <?= $time ?></p>
</body>

</html>