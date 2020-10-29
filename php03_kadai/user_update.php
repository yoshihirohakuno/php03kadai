<?php

// 1.POSTでid,title,url,commentを取得
$id        = $_POST["id"];
$u_name    = $_POST["u_name"];
$u_id      = $_POST["u_id"];
$u_pw      = $_POST["u_pw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg  = $_POST["life_flg"];


include("funcs.php");

//2.  DB接続します(関数化)
$pdo = db_connect();

//３．UPDATE
$sql = 'UPDATE gs_user_table SET u_name=:u_name, u_id=:u_id, u_pw=:u_pw, kanri_flg=:kanri_flg, life_flg=:life_flg WHERE id =:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':u_name',$u_name,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':u_id',$u_id,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':u_pw',$u_pw,PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':kanri_flg',$kanri_flg,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':life_flg',$life_flg,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id',$id,PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

// 4.データ登録処理後
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //select.phpへリダイレクト
  header("Location: user_select.php");
  exit;
   
}




// var_dump($u_name);


?>