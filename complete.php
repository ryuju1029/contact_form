<h1>送信完了!!</h1>
<a href="./index.php">送信画面へ</a><br>
<a href="./history.php">送信履歴を見る</a>

<!-- データベースへ登録   -->
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
  $dsn = 'mysql:dbname=contact_form;host=localhost;charset=utf8';
  $user = 'root';
  $password = 'root';
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $title = $_POST['title'];
  $email = $_POST['email'];
  $content = $_POST['content'];
  $sql = "INSERT INTO contacts (title, email, content) VALUES (:title, :email, :content)";
  $stmt = $pdo->prepare($sql);
  $params = array(':title' => $title,':email' => $email,':content' => $content,);
  $stmt->execute($params);

} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'. $e->getMessage());
}

?>
