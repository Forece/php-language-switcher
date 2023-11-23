<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 设置语言
$_SESSION['lang'] = $_SESSION['lang'] ?? 'en';
$_SESSION['lang'] = $_GET['lang'] ?? $_SESSION['lang'];

// 获取路径文件名
$url = $_SERVER['PHP_SELF'];
$filename= substr($url , strrpos($url , '/')+1 );



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?lang=en">English</a>
    <a href="index.php?lang=cn">中文</a>

    <?php // 返回对应语言内容文件
require $_SESSION['lang']."/".$filename;
?>
</body>
</html>