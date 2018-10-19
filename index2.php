<?php
session_start();
//0.外部ファイル読み込みログインしていないと閲覧できない関数（※この3行でログイン必須のページになる）
include('functions.php');
chk_ssid();
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">HOME</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="card" style="width: 900px;margin:auto;border:3px solid#e5e5e5;">
<div class="card-body">
<form method="post" action="insert_index2.php" enctype="multipart/form-data">
  <div class="">
   <fieldset>
    <legend>あなたの趣味について登録してね</legend>

     <label>好きなこと：料理<input type="checkbox" class="checkbox-input" name="cooking" value=1></label>
     <label>音楽<input type="checkbox" class="checkbox-input" name="music" value=1><br></label>
     <label>ダンス<input type="checkbox" class="checkbox-input" name="dance" value=1><br></label>
     <label>読書<input type="checkbox" class="checkbox-input" name="book" value=1><br></label>
     <label>映画<input type="checkbox" class="checkbox-input" name="movie" value=1><br></label>
    
    


     <input type="submit" class="btn btn-primary" value="NEXT">
    </fieldset>
  </div>
</form>
</div>
</div>
<!-- Main[End] -->

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(window).on('load', function () {

            $('#btn').on('click', function () {
                $.ajax({
                    type: 'GET',
                    url: 'ajax_test.txt',
                    datatype: 'html'
                }).done(function (response, textStatus, xhr) {
                    $('body').append(response);
                }
                );
            });

            $('#send').on('click', function () {
                //一度ボタンを押すと押せないように
                $('button').attr('disabled', true);
                //FormDataよりフォームの中身を持ってくる
                var input_value = new FormData($('#post_form')[0]);
                $.ajax({
                    type: 'post',
                    url: 'ajax_post.php',
                    data: input_value,
                    //どんな形式で送るか
                    dataType: 'json',
                    processData: false,
                    contentType: false
                    //responseで戻ってきたjsonをconsoleに表示させることができるここは、画面表示にすることも可。
                    //php側でechoで出力したものをresponseに入れることができる
                }).done(function (response, textStatus, xhr) {
                    alert('done');
                    console.log(response);
                }).fail(function (response, textStatus, xhr) {
                    alert('fail');
                    return false;
                }).always(function () {
                    $('input').val('');
                    $('textarea').val('');
                    //無効にしたボタンを復活
                    $('button').attr('disabled', false);
                });
            });
            // ajax構文
            // $.ajax({
            //     type: 'post',               //getかpostを指定．データを持ってくる場合はget
            //     url: '*************.php',   //宛先のphpファイルを指定
            //     data: {                     //オブジェクト形式で送るとphpファイルで$_data1[]でとれる
            //         data1:'hoge',
            //         data2:'fuga'
            //     },
            //     dataType: 'json',           //データの種類を指定．html,jsonなど
            //     processData: false,         //送信のときにエラーが出たらつける
            //     contentType: false          //送信のときにエラーが出たらつける
            // }).done(function (response, textStatus, xhr) {
            //     alert('done');              //成功時の処理
            //     console.log(response);
            // }).fail(function (response, textStatus, xhr) {
            //     alert('fail');              //失敗時の処理
            // }).always(function () {
            //     alert('always');            //いつでも実行する処理
            // });
        });
    </script>


</body>
</html>
