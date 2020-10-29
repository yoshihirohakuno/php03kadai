
<!-- 課題用index.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>読む本メモメモ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<!-- <header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">読む本メモメモ</a></div>
    </div>
  </nav>
</header> -->
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="index" class="modal fade" role="dialog">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-body">
        <h2>読む本メモメモ</h2>
        <form method="post" action="insert.php">
          <input type="text" name="title" class="username form-control" placeholder="TITLE"/><br>
          <input type="text" name="url" class="password form-control" placeholder="URL"/><br>
          <textArea name="comment" rows="4" cols="40"></textArea><br>
          
          <input type="submit" value="送信" class="submit_b">
        
        </form>
      </div>
    </div>
  </div>  
</div>
    <div id="index_footer">
        <a id="list" href="select.php">積み本リスト</a>
        <a id="login" href="login.php">ログイン</a>
        <a id="logout" href="logout.php">ログアウト</a>
    </div>
<!-- <form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>読む本メモメモ</legend>
     <label>TITLE：<input type="text" name="title" id="title"></label><br>
     <label>URL：<input type="text" name="url"></label><br>
     <label>メモメモ<textArea name="comment" rows="4" cols="40"></textArea></label><br>
    
     <input type="submit" value="送信" id="button">

    </fieldset>
  </div>
</form> -->
<!-- Main[End] -->
     

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>    
<script>
  // document.getElementById("button").onclick = function(){
  //   if($('input[name="title"]').val() == ""){
  //     alert('TITLEが入力されていません');
  //     return false;
  //   }else{
  //     alert('本棚に追加されました！');
  //   }
    
  // };
  
</script>    
</body>
</html>
