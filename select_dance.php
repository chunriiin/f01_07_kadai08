<?php
session_start();
// getで送信されたidを取得


$userid=$_SESSION['userid'];


//1.  DB接続します
include('functions.php');
$pdo=db_conn();





//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table as b JOIN gs_like_table as l ON b.userid = l.userid
WHERE dance=1');
// $stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
  $view .='<div class="card" style="width: 20rem;">';
    
  $view .='<img class="card-img-top" src="'.$result['image'].'" alt="Card image cap" style="height:100px;width:100px;border-radius: 50%;" >';
  $view .= '<div class="card-body">';
  $view .='<a href="select_02.php?id='.$result["id"].'"target_"blank" >'.$result['bookname'];
  $view .='</a>';


  $view .= '</div>';
  $view .= '</div>';


  }
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
<div class="card-body" style="display:flex;flex-direction: row;flex-wrap: wrap;">
<legend>#ダンス</legend>
     <?=$view?>

  </div>
  </div>
</form>




<!-- Main[End] -->










</body>
</html>


