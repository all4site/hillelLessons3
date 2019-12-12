<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<!--Данные должны быть где то в таком виде http://localhost:3000/?uri=asdasd&name=ssss-->
<?php
if (isset($_GET['uri'])):
$uri = $_GET['uri'];
else:
echo 'Введите данные URI' .'<br>';
endif;

if (isset($_GET['name'])):
	$name = $_GET['name'];
else:
echo 'Введите данные NAME' .'<br>';
endif;

if (isset($uri) && isset($name)):
echo 'Ваша ссылка: ';
echo "<a href='http://lessons.osp/{$uri}'>{$name}</a>";
else:
echo 'Данных недостаточно для формирования ссылки';
endif;
?>

</body>
</html>

