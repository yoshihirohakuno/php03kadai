<?php

//1. POSTデータ取得
session_start();
$lid =$_POST['lid'];
$lpw =$_POST['lpw'];
$kanri_flg =$_POST['kanri_flg'];


//2.  DB接続します(関数化)
include("funcs.php");
$pdo = db_connect();

//３．データ登録SQL作成
$sql = "SELECT * FROM gs_user_table WHERE u_id =:lid AND u_pw =:lpw ";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $lid);
$stmt->bindValue(':lpw', $lpw);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

// 5.抽出データ数を取得
$val = $stmt->fetch(); //１レコードだけ取得する

//6.該当レコードがあればSESSIONに値を代入
if( $val["id"] != ""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["u_name"] = $val['u_name'];
    // Login処理OKの場合select.phpへ遷移
    header("Location: menu.php");

}else{
    // Login処理NGの場合login.phpへ遷移
    header("Location: login.php");
}
    //処理終了
    exit();
?>