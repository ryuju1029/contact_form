<?php
include('global_menu.php');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$title = $_POST['title'];
$email = $_POST['email'];
$content = $_POST['content'];
$sql = "INSERT INTO contacts (title, email, content) VALUES (:title, :email, :content)";
$stmt = $pdo->prepare($sql);
$params = array(':title' => $title,':email' => $email,':content' => $content,);
$stmt->execute($params);
?>

<h1>送信完了!!</h1>
<a href="./index.php">送信画面へ</a><br>
<a href="./history.php">送信履歴を見る</a>
