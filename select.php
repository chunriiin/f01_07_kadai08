<?php
session_start();
//0.外部ファイル読み込みログインしていないと閲覧できない関数（※この3行でログイン必須のページになる）
include('functions.php');
chk_ssid();


//1.  DB接続します

$pdo=db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT*FROM gs_bm_table');
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
    
   

    $view .='<div class="card" style="width: 20rem;">';
    
    $view .='<img class="card-img-top" src="'.$result['image'].'" alt="Card image cap" style="height:100px;width:100px;border-radius: 50%;" >';
    $view .= '<div class="card-body">';
    $view .='<a href="select_02.php?id='.$result["id"].'"target_"blank" >'.$result['bookname'];
    $view .= '</a>';
    $view .= '<a href="detail.php?id='.$result["id"].'"target_"blank">';
    $view .='✏️</a>';
    $view .= '<a href="'.$result["url"].'">'."📙".'<br>'.'</a>';
    $view .= '<p>'.$result["comments"].'</p>';
    $view .= '<a href="delete.php?id='.$result['id'].'">';  //削除用aタグを作成,マウスオーバーでIDが表示されるようになる
 
    $view .= '削除';
    $view .= '</a>';
    $view .= '</div>';
    $view .= '</div>';

  }
}

$view2="";
if($_SESSION['kanri_flg']==1){
  $view2 .= '<a class="navbar-brand" href="user_index.php">ユーザー登録</a>';
  $view2 .= '<a class="navbar-brand" href="user_select.php">ユーザー一覧</a>';
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
      <a class="navbar-brand" href="index.php">HOME</a>
      <?=$view2?>



    
     </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    
</div>

<div style="display:flex;flex-direction: row;flex-wrap: wrap;">
 <?=$view?>
</div>
<!-- Main[End] -->

</body>
</html>
