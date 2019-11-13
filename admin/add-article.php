<?php

require "../Config/Database/config.php";
require "../Controller/logic.php";
require "../Controller/redirect.php";

if ($_SERVER["REQUEST_METHOD"] === "POST"){

    $article = new Article($mysql);
    $article->addArticle($_POST["titulo"],$_POST["conteudo"]);

    redirect("/blog/admin/index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
<div id="container">
    <h1>Adicionar Artigo</h1>
    <form action="add-article.php" method="post">
        <p>
            <label for="">Digite o título do artigo</label>
            <input class="campo-form" type="text" name="titulo" id="titulo" />
        </p>
        <p>
            <label for="">Digite o conteúdo do artigo</label>
            <textarea class="campo-form" type="text" name="conteudo" id="conteudo"></textarea>
        </p>
        <p>
            <button class="botao">Criar Artigo</button>
        </p>
    </form>
</div>
</body>

</html>