<?php
session_start();
//0.外部ファイル読み込みログインしていないと閲覧できない関数（※この3行でログイン必須のページになる）
include('functions.php');
chk_ssid();

// getで送信されたidを取得
$id = $_GET['id'];
echo "GET:".$id;


//1.  DB接続します
$pdo=db_conn();




//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id=:id');
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}

?>

<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新ページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->

<div class="card" style="width: 900px;margin:auto;border:3px solid#e5e5e5;">
<div class="card-body">
<form method="post" action="update.php" enctype="multipart/form-data">
  <div class="">
   <fieldset>
    <legend>編集ページ</legend>

     <label>あなたの画像を入れてね<input type="file"  class="form-control"  name="upfile" accept="image/*" capture="camera">
     <label>あなたの名前は?：<input type="text" name="bookname" value="<?=$rs["bookname"]?>"></label><br>
     <label>みんなに伝えるひとことを入れてね：<textArea name="comments" rows="4" cols="40" ><?=$rs["comments"]?></textArea></label><br>
     <label>SNSのURLを入れてね：<input type="text" name="url" value="<?=$rs["url"]?>"></label><br>


     <input type="submit" value="保存" class="btn btn-primary">
      <!-- idは変えたくない = ユーザーから見えないようにする(hidden)-->
      <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
</form>
</div>
</div>







</body>
</html>
