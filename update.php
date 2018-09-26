<?php
//入力チェック(受信確認処理追加)
if(
    //データが入っているか（データが入っていない時または、空のとき）
    !isset($_POST["bookname"]) || $_POST["bookname"]=="" ||
    !isset($_POST["url"]) || $_POST["url"]=="" ||
    !isset($_POST["comments"]) || $_POST["comments"]=="" 
  
  ){
    exit('ParamError');
  }

//1. POSTデータ取得
$id     =$_POST["id"] ;
$bookname = $_POST["bookname"];
$url = $_POST["url"];
$comments = $_POST["comments"];

//2. DB接続します(エラー処理追加)
include('functions.php');
$pdo=db_conn();


//3．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE gs_bm_table SET bookname=:a1,url=:a2,comments=:a3 WHERE id=:id");
$stmt->bindValue(':a1', $bookname, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comments, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute();

//4．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //Location:半角スペースが必要,うまくいたらselectに戻ってねの指示
  header('Location: select.php');
  exit;
}
?>
