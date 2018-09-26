<?php
//1.  DB接続します
include('functions.php');
$pdo=db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT*FROM gs_user_table');
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<a href="user_detail.php?id='.$result["id"].'"target_"blank">';
    $view .=$result['name'].'</a>';
    $view .= '<p>'.$result["lid"].'</p>';
    $view .= '<p>'.$result["lpw"].'</p>';
    $view .= '<p>'.$result["kanri_flg"].'</p>';
    $view .= '<p>'.$result["life_flg"].'</p>';
   
    $view .= '<a href="user_delete.php?id='.$result['id'].'">';  //削除用aタグを作成,マウスオーバーでIDが表示されるようになる
    $view .= '［削除］';
    $view .= '</a>';
  }
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}


</style>

</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="user_index.php">ユーザー一覧</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
