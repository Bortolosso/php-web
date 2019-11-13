<?php

require "../Config/Database/config.php";
include "../Controller/logic.php";
require "../Controller/redirect.php";

if($_SERVER["REQUEST_METHOD"] === "POST")
{
    $article = new Article($mysql);
    $article->removeArticle($_POST["id"]);

    redirect("/blog/admin/index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <meta charset="UTF-8">
    <title>Excluir Artigo</title>
</head>

<body>
<div id="container">
    <h1>Você realmente deseja excluir o artigo?</h1>
    <form method="post" action="delete-article.php">
        <p>
            <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>"/>
            <button class="botao">Excluir</button>
        </p>
    </form>
</div>
</body>

</html>