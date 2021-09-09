<h1>送信履歴</h1>
<?php 

$dsn = 'mysql:dbname=contact_form;host=localhost;charset=utf8';
$user = 'root';
$password = 'root';
$pdo = new PDO($dsn, $user, $password);
$sql = "SELECT * FROM contacts";
$stmt = $pdo->query($sql);
foreach ($stmt as $row) {
  echo "<strong>".$row['title']."</strong>".'<br>';
  echo $row['content'];
  echo "<br />";
  echo "<br />";
}

?>

<a href="./index.php">戻る</a><br>