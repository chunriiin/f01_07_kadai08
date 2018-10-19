<?php
session_start();
// getで送信されたidを取得
$id = $_GET['id'];
echo "GET:".$id;

$userid=$_SESSION['userid'];


//1.  DB接続します
include('functions.php');
$pdo=db_conn();





//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table as b JOIN gs_like_table as l ON b.userid = l.userid
WHERE b.id=:id');
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

$view="";
if(isset($rs["cooking"])){
 $view .= '<div><a class="btn btn-primary" href="select_cooking.php">料理</a></div>';
}  
if(isset($rs["music"])){
 $view .= '<div><a class="btn btn-success" href="select_music.php">音楽</a></div>';

}  
if(isset($rs["dance"])){
    $view .= '<div><a class="btn btn-info" href="select_dance.php">ダンス</a></div>';

} 
if(isset($rs["book"])){
    $view .= '<div><a class="btn btn-warning" href="select_book.php">読書</a></div>';

} 
if(isset($rs["movie"])){
    $view .= '<div><a class="btn btn-danger" href="select_movie.php">映画</a></div>';

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
<form method="post" action="update.php">
   <fieldset>
    <legend><?=$rs["bookname"]?></legend>

    <img class="card-img-top" src="<?=$rs['image']?>" alt="Card image cap" style="height:200px;width:200px;border-radius: 50%;" >

    
    <p>リンク：<a href="<?=$rs["url"]?>">📙</a>

<!-- textAreaの場合値の入れ方が異なる-->
    <p>ひとこと:<?=$rs["comments"]?></p>
    <div  style="display:flex;flex-direction: row;flex-wrap: wrap;">
     <?=$view?>
</div>
     <!-- idは変えたくない = ユーザーから見えないようにする(hidden)-->
     <input type="hidden" name="id" value="<?=$rs["id"]?>">
    </fieldset>
  </div>
  </div>
</form>

<div id="like" style="display:none;">料理：<?=$rs["cooking"]?></div>


<!-- Main[End] -->










</body>
</html>


