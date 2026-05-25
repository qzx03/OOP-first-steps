<?php
class Article {
    protected $title;
    protected $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public function afficher() {
        return "Titre : " . $this->title . " - Contenu : " . $this->content;
    }
}


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
