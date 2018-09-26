<?php
// getで送信されたidを取得
$id = $_GET['id'];
echo "GET:".$id;


//1.  DB接続します
include('functions.php');
$pdo=db_conn();




//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_user_table WHERE id=:id');
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
  <title>ユーザー情報更新ページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user_select.php">ユーザー一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザ情報更新ページ</legend>

    <label>名前：<input type="text" name="name" value="<?=$rs["name"]?>"></label><br>
    <label>ログインID：<input type="text" name="lid" value="<?=$rs["lid"]?>"></label><br>
    <label>ログインパスワード：<input type="text" name="lpw" value="<?=$rs["lpw"]?>"></label><br>
    <label>ユーザータイプ：<input type="text" name="kanri_flg" value="<?=$rs["kanri_flg"]?>"></label><br>
    <label>使用状況：<input type="text" name="life_flg" value="<?=$rs["life_flg"]?>"></label><br>



     <input type="submit" value="送信">
     <!-- idは変えたくない = ユーザーから見えないようにする(hidden)-->
     <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
