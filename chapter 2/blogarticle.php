<?php
require "article.php";

class BlogArticle extends Article {
    private $author;

    public function __construct($title, $content, $author) {
        parent::__construct($title, $content);
        $this->author = $author;
    }

    public function afficher() {
        return parent::afficher() . " - author : " . $this->author;
    }
}
