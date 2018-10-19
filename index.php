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
    <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>

    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<ul class="list-group">

  <li class="list-group-item list-group-item-warning">自己紹介登録ツールです。<br>
  趣味を登録することで共通の趣味の人を簡単に見つけることができます。</li>

</ul>


<div class="card" style="width: 900px;margin:auto;border:3px solid#e5e5e5;">
<div class="card-body">
<form method="post" action="insert_fileup.php" enctype="multipart/form-data">
  <div class="">
   <fieldset>
    <legend>自己紹介を登録しよう</legend>

     <label>あなたの画像を入れてね<input type="file"  class="form-control"  name="upfile" accept="image/*" capture="camera">
     <label>あなたの名前は?：<input type="text"  class="form-control"  name="bookname"></label><br>
     <label>みんなに伝えるひとことを入れてね：<textArea name="comments" class="form-control"  rows="4" cols="40"></textArea></label><br>
     <label>SNSのURLを入れてね：<input type="text" class="form-control"  name="url"></label><br>


     <input type="submit" value="NEXT" class="btn btn-primary">
    </fieldset>
  </div>
</form>
</div>
</div>
<!-- Main[End] -->



</body>
</html>
