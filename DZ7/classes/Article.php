<?php

class Article
{
    public $title;
    public $content;

    public function __construct(string $title, string $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function getShortenedNews(int $limit): string
    {
        return mb_substr($this->content, 0, $limit) . '...';
    }
}