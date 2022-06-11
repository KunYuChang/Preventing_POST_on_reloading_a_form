<?php

$db_file = dirname(__FILE__) . '/資料庫.txt';
file_put_contents($db_file, date('H:i:s'));

// 轉址到結果頁
header('HTTP/1.1 301 Moved Permanently');
header('Location: 結果.php');
exit();
