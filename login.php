<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<title>ログイン</title>
</head>
<body>

<header>

<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
  <a class="navbar-brand" href="index.php">LOGIN</a>
  <!-- <a class="navbar-brand" href="select_nologin.php">一覧画面（閲覧のみ）</a> -->



</header>

<!-- login_act.php は認証処理用のPHPです。 postで送る！！-->
<form name="form1" action="login_act.php" method="post">
ID:<input type="text" name="lid" />
PW:<input type="password" name="lpw" />
<input type="submit" value="LOGIN" />
</form>


</body>
</html>