<?php 
include('global_menu.php');
$sql = "SELECT * FROM contacts";
$stmt = $pdo->query($sql);
?>
<h1>送信履歴</h1>
<table>
<?php
foreach($stmt as $row){
?>
  <tr>
    <td><?php echo "<strong>".$row['title']."</strong>"; ?></td>
    <td><?php echo $row['content']; ?></td>
  </tr>

<?php
}
?>
</table>
<a href="./index.php">戻る</a><br>