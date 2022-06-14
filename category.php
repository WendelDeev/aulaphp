<?php
include_once('config/connection.php');

$cat = $_GET['cat'];

$stmt = $conectar->prepare('SELECT id, title, image, description, data FROM posts WHERE category = :cat');
    
$stmt->execute(array('cat' => $cat));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>
<body>
    <?php foreach($results as $post): ?>
		<h1><?= $post["title"] ?></h1>
		<p><img src="<?= $post["image"]?>" class="card-img-top" alt="..."></p>
		<p><?= $post["description"] ?></p>
		<p><?= date('d/m/Y', strtotime($post["data"])); ?></p>
    <?php endforeach; ?>

</body>
</html>

