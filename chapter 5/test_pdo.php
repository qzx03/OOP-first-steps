<?php
require 'db.php';

$db = (new Database())->getConnection();
$stmt = $db->query("SELECT * FROM articles");

$articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($articles as $article) {
    echo $article['title'] . " - " . $article['author'] . "<br>";
}

$sql = "INSERT INTO articles (title, content, author) VALUES (:title, :content, :author)";
$stmt = $db->prepare($sql);
$stmt->execute([
    'title' => 'New post',
    'content' => 'This is an article added via PDO.',
    'author' => 'Admin'
]);

$stmt = $db->prepare("UPDATE articles SET auteur = :auteur WHERE id = :id");
$stmt->execute(['auteur' => 'Alice', 'id' => 1]);

$stmt = $db->prepare("DELETE FROM articles WHERE id = :id");
$stmt->execute(['id' => 2]);
