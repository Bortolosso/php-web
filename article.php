<?php

require "Config/Database/config.php";
require "src/Controller/logic.php";

$obj_article = new Article($mysql);
$article = $obj_article->findForIdArticle($_GET['id']);

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
    <h1>
        <?php echo $article["titulo"];?>
    </h1>
    <p>
        <?php echo nl2br($article["conteudo"]);?>
    </p>
    <div>
        <a class="botao botao-block" href="index.php">Voltar</a>
    </div>
</div>
</body>

</html>