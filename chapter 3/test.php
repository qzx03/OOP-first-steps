<?php
require 'article.php';

$article = new Article();
$article->setTitle("Object oriented PHP");
$article->setContent("<p>Introdution to object oriented PHP.</p>");
echo $article->show();
