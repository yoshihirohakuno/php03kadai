<?php


//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
$title =$_POST['title'];
$url =$_POST['url'];
$comment =$_POST['comment'];


include("funcs.php");


//2.  DB接続します(関数化)
$pdo = db_connect();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table( id,title,url,comment,indate )VALUES(NULL,:title, :url, :comment, sysdate()) ");
$stmt->bindValue(':title', $title, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment , PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("ErrorMessage:".$error[2]);
}else{

//書き込みが成功した場合
//５．index.phpへリダイレクト status='OK!'
  
  header("Location: index.php");
  exit;



}
?>
