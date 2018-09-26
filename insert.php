<?php

if(
  //データが入っているか（データが入っていない時または、空のとき）
  !isset($_POST["bookname"]) || $_POST["bookname"]=="" ||
  !isset($_POST["url"]) || $_POST["url"]=="" ||
  !isset($_POST["comments"]) || $_POST["comments"]=="" 

){
  exit('ParamError');
}

//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ

$bookname = $_POST["bookname"];
$url = $_POST["url"];
$comments = $_POST["comments"];



//2. DB接続します
include('functions.php');
$pdo=db_conn();

//３．データ登録SQL作成
$sql ="INSERT INTO gs_bm_table(id,bookname,url,comments,date)
VALUES(NULL ,:a1,:a2,:a3,sysdate())";

//セキュリティ上bindValueを使う

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $bookname, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comments, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト※スペースがないとだめ
  header("location: index.php");

}
?>
