<!-- 登録者用_view.php -->
<?php
// 1.GETでid値を取得
$id = $_GET["id"];


//1.  DB接続します(関数化)
include("funcs.php");
$pdo = db_connect();
  
//３．SELECT
$sql = "SELECT * FROM gs_user_table WHERE id =:id" ;
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();


// 4.データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //1データのみ抽出の場合は、whileループで取り出さない
  $row = $stmt->fetch();
   
}

?>


<!--------- ここからHTML部分 ----------->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ユーザー情報更新する</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザーDB更新</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>※更新※ユーザーDB</legend>
    <label>名前：<input type="text" name="u_name" value="<?= $row["u_name"] ?>"></label><br>
     <label>ID：<input type="text" name="u_id" value="<?= $row["u_id"] ?>"></label><br>
     <label>PW：<input type="text" name="u_pw" value="<?= $row["u_pw"] ?>"></label><br>
     <label>管理者：<input type="checkbox" name="kanri_flg" <?= $row["kanri_flg"]==1 ? 'checked' : '' ?>></label><br>
     <label>退職者：<input type="checkbox" name="life_flg" <?= $row["life_flg"]==0 ? 'checked' : '' ?>><br><br>
     <input type="hidden" name="id" value="<?=$row["id"]?>">
     <input type="submit" value="更新する" id="button">

    </fieldset>
  </div>
</form>

<a class="navbar-brand" href="user_select.php">ユーザー一覧に戻る</a>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
<script>
  document.getElementById("button").onclick = function(){

      alert('内容を変更しました！');
    
  };
  
</script> 
</body>
</html>