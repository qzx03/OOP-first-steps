<?php
require 'blogarticle.php';

$article = new BlogArticle("Object oriented PHP", "dicover the heritage.", "Alice");
echo $article->afficher();
