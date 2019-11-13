<?php

require '../Config/Database/config.php';
include '../Controller/logic.php';

$article = new Article($mysql);
$articles = $article->showAllArticle();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
<div id="container">
    <h1>Página Administrativa</h1>
    <div>
        <?php foreach ($articles as $art) { ?>
            <div id="artigo-admin">
                <p><?php echo $art['titulo']; ?></p>
                <nav>
                    <a class="botao" href="edit-article.php?id=<?php echo $art['id']; ?>">Editar</a>
                    <a class="botao" href="delete-article.php?id=<?php echo $art['id']; ?>">Excluir</a>
                </nav>
            </div>
        <?php } ?>
    </div>
    <a class="botao botao-block" href="add-article.php">Adicionar Artigo</a>
</div>
</body>
</html>