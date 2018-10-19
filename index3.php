<?php
session_start();
//0.外部ファイル読み込みログインしていないと閲覧できない関数（※この3行でログイン必須のページになる）
include('functions.php');
chk_ssid();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">HOME</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="card" style="width: 900px;margin:auto;border:3px solid#e5e5e5;">
<div class="card-body">

  <div class="">
   <fieldset>
   <p>登録は以上です</p>
   <a class="btn btn-primary" href="select.php">HOME</a>
    </fieldset>
  </div>

</div>
</div>
<!-- Main[End] -->

 


</body>
</html>
