<?php

require 'Config/Database/config.php';

include 'Controller/logic.php';

$article = new Article($mysql);
$articles = $article->showAllArticle();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
    <h1>Meu Blog</h1>
    <?php foreach ($articles as $article) : ?>
        <h2>
            <a href="Controller/logic.php?id=<?php echo $article['id']; ?>">
                <?php echo $article['titulo']; ?>
            </a>
        </h2>
        <p>
            <?php echo $article['conteudo']; ?>
        </p>
    <?php endforeach; ?>
</div>
</body>
</html>