<?php

session_start();
include("funcs.php");
loginCheck();

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link href="css/menu.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<h2>管理者用メニュー</h2>

<div class="container">
        <a href="select.php" class="btn-animation-02"><span>本棚一覧<span></a>
    </div>


    <div class="container">
        <a href="user_select.php" class="btn-animation-02"><span>登録者一覧<span></a>
    </div>
    
    <div class="logout">
        <br>
        <br>
    <a  href="logout.php">ログアウト</a>  
    </div>
</body>
</html>





