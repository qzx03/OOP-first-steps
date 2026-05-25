<?php
class Article {
    public $title;
    public $content;

    public function show() {
        return "Title : " . $this->title . " - Content : " . $this->content;
    }
}

$article1 = new Article();
$article1->title = "Introcution to PHP";
$article1->content = "PHP is backend coding language.";

echo $article1->show();


$article2 = new Article();
$article2->title = "object oriented programming";
$article2->content = "OOP makes programming easier and more consistant.";

echo "<br>" . $article2->show();
