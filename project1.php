<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Новостной портал</title>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<div><h1>Новостной портал сотрудников</h1></div>
	<h2><a href="add.php">Добавить запись</a></h2>
	

<?php
include_once("bd.php");


$result = mysql_query("SELECT *   FROM news ORDER BY  date DESC ");

while($row = mysql_fetch_array($result))
{?>

<h1><?php echo $row['title']?></h1>
<p><?php echo $row ['text']?></p>
<p>Дата публикации: <?php echo $row ['date'] ?>/ <?php echo $row ['time']?></p>
<p>Автор новости: <?php echo $row['author'] ?></p>
<div id="social">
<a href="delete.php?id=<?php echo $row ['id']?>"title="Удалить новость" target="_balnk"><img src="/img/del1.png" alt="Удалить" title="Удалить"></a>
<a href="edit.php?id=<?php echo $row ['id']?>"title="Редактировать новость" target="_balnk"><img src="/img/edit.png" alt="Редактировать" title="Редактировать"></a>
</div>

 <?php } ?>

	
	</hr>
	</body>
	</html>