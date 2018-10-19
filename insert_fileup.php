<?php
session_start();

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
$userid=$_SESSION['userid'];




// アップロード関連を追加
if (isset($_FILES['upfile'] ) && $_FILES['upfile']['error'] ==0 ) {
  // ファイルをアップロードしたときの処理
  //アップロードしたファイルの情報取得
  $file_name = $_FILES['upfile']['name'];     //アップロードしたファイルのファイル名
  $tmp_path  = $_FILES['upfile']['tmp_name']; //アップロード先のTempフォルダ
  $file_dir_path = 'upload/';                 //画像ファイル保管先のディレクトリ名，自分で設定する
  
  //File名の変更
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);              //拡張子取得
  $uniq_name = date('YmdHis').md5(session_id()) . "." . $extension;   //ユニークファイル名作成
  $file_name = $file_dir_path.$uniq_name;                             //ファイル名とパス

  // FileUpload [--Start--]
  $img='';
  if ( is_uploaded_file( $tmp_path ) ) {
      if ( move_uploaded_file( $tmp_path, $file_name ) ) {
          chmod( $file_name, 0644 );
         
      } else {
          exit('Error:アップロードできませんでした．');
      }
  }
  // FileUpload [--End--]
}else{
  // ファイルをアップしていないときの処理
  $img = '画像が送信されていません'; //Error文字
}



//2. DB接続します
include('functions.php');
$pdo=db_conn();

//３．データ登録SQL作成
$sql ="INSERT INTO gs_bm_table(id,userid,bookname,url,comments,date,image)
VALUES(NULL,:userid,:a1,:a2,:a3,sysdate(),:image)";

//セキュリティ上bindValueを使う

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':userid', $userid, PDO::PARAM_INT); 
$stmt->bindValue(':a1', $bookname, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $comments, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':image', $file_name, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("sqlError:".$error[2]);
}else{
  //５．index.phpへリダイレクト※スペースがないとだめ
  header("location: index2.php");

}
?>
