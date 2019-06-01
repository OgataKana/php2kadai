<?php require './header.php'; ?>

<table>
<tr><th>書籍名</th><th>著者</th><th>感想</th></tr>
<?php
$pdo = new PDO('mysql:dbname=gs_db_0525;charset=utf8;host=localhost','root','');
// $pdo=new PDO('mysql:host=localhost;dbname=gs_db_0525;charset=utf8',
// 	'', '');
    $sql=$pdo->prepare('select * from product where name like ?');
    $sql->execute(['%'.$_REQUEST['keyword'].'%']);
    foreach ($sql as $row) {
	echo '<tr>';
	echo '<td>', $row['name'], '</td>';
	echo '<td>', $row['sakusya'], '</td>';
	echo '<td>', $row['comment'], '</td>';
	echo '</tr>';
	echo "\n";
}
?>
<?php require './footer.php'; ?>
