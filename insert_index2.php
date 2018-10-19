<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, "name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
session_start();


$userid= $_SESSION['userid'];
$cooking= $_POST["cooking"];
$music= $_POST["music"];
$dance= $_POST["dance"];
$book= $_POST["book"];
$movie= $_POST["movie"];


//2. DB接続します
include('functions.php');
$pdo=db_conn();

//３．データ登録SQL作成
$sql ="INSERT INTO gs_like_table(userid,cooking,music,dance,book,movie)
VALUES(:userid,:a1,:a2,:a3,:a4,:a5)";

//セキュリティ上bindValueを使う

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':userid', $userid, PDO::PARAM_INT); 
$stmt->bindValue(':a1', $cooking, PDO::PARAM_INT);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $music, PDO::PARAM_INT);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $dance, PDO::PARAM_INT);
$stmt->bindValue(':a4', $book, PDO::PARAM_INT);
$stmt->bindValue(':a5', $movie, PDO::PARAM_INT); 
 

$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト※スペースがないとだめ
  header("location: index3.php");

}
?>
