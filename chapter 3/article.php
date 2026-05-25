<?php
class Article {
    private $title;
    private $content;

    public function setTitle($title) {
        if (!empty($title) && strlen($title) > 3) {
            $this->title = $title;
        } else {
            echo "Invalid text.";
        }
    }

    public function getTitle() {
        return $this->title;
    }

    public function setContent($content) {
        $this->content = htmlspecialchars($content);
    }

    public function getContent() {
        return $this->content;
    }

    public function show() {
        return "Title : {$this->title} - Content : {$this->content}";
    }
}
