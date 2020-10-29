<!-- 課題用index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ログインページ</title>
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">ログイン</a></div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->

<!--Trigger-->
<!-- <a class="login-trigger" href="#" type="submit" value="ログイン">Login</a> -->

<div id="login" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <h2>WELCOME</h2>
        <form method="post" action="login_act.php">
          <input type="text" name="lid" class="username form-control" placeholder="User ID"/><br>
          <input type="password" name="lpw" class="password form-control" placeholder="password"/><br>
          <input type="checkbox" value="1" name="kanri_flg" class="password form-control" />
          <p id="check_p">※管理者ではない場合は絶対にチェックを入れないでください</p>
          <input type="submit" value="ログイン" class="login-trigger"><br>
          <a class="non_login"  href="g_index.php">ログインせずに続ける</a>
          <!-- <input class="btn login" type="submit" value="Login" /> -->
        </form>
      </div>
    </div>
  </div>  
</div>

<!-- <div id="login_body">
<form method="post" action="login_act.php">
  <div class="log-form">
   <fieldset>
    <h2>Welcome</h2>
     <label>ID：<input type="text" name="lid" ></label><br>
     <label>PW：<input type="text" name="lpw"></label><br>
     <label>管理者: <input name="kanri_flg" type="checkbox" value="1" /><p id="check_p">※管理者ではない場合は絶対にチェックを入れないでください</p></label><br>
    
     <input type="submit" value="ログイン" id="button">
    <br>
    <br>
    <br>
     <a class="non_login" href="g_index.php">ログインせずに続ける</a>

    </fieldset>
  </div>
</form>
</div> -->
<!-- Main[End] -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
<script>
  // document.getElementById("button").onclick = function(){
  //   if($('input[name="lid"]').val() == ""){
  //     alert('IDが入力されていません');
  //     return false;
  //   }else{
  //     alert('ログインしました！');
  //   }
    
  // };
  
</script>    
</body>
</html>