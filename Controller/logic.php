<?php

class Article
{
    private $mysql; //atribundo aqui

    public function __construct(mysqli $mysql) //recebendo aqui
    {
        $this->mysql = $mysql;
    }

    public function addArticle(string $titulo, string $conteudo): void
    {
        $insertArticle = $this->mysql->prepare("INSERT INTO artigos (titulo, conteudo) VALUES (?, ?);");
        $insertArticle->bind_param("ss",  $titulo, $conteudo);
        $insertArticle->execute();
    }

    public function showAllArticle(): array
    {
        $result = $this->mysql->query('SELECT id, titulo, conteudo FROM artigos');
        $articles = $result->fetch_all(MYSQLI_ASSOC);

        return $articles;
    }

    public function findForIdArticle(string $id): array
    {
        $selectArticle = $this->mysql->prepare("SELECT id, conteudo, titulo FROM artigos WHERE id = ?");
        $selectArticle->bind_param("s", $id);
        $selectArticle->execute();
        $article = $selectArticle->get_result()->fetch_assoc();

        return $article;

        //echo $id;
    }

    public function removeArticle(string $id): void
    {
        $removeArticle = $this->mysql->prepare("DELETE FROM artigos WHERE id = ?");
        $removeArticle->bind_param("s", $id);
        $removeArticle->execute();
    }

    public function editArticle(string $id, string $titulo, string $conteudo): void
    {
        $editArticle = $this->mysql->prepare("UPDATE artigos SET titulo = ?, conteudo = ? WHERE id = ? ");
        $editArticle->bind_param("sss", $titulo, $conteudo, $id);
        $editArticle->execute();
    }
}

