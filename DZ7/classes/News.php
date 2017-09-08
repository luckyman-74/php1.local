<?php
require __DIR__ . '/Article.php';

class News
{
    protected $path;
    protected $news = [];

    public function __construct(string $path)
    {
        $this->path = $path;
        $newsData = file($path, FILE_IGNORE_NEW_LINES);

        foreach ($newsData as $key => $value) {
            $newsContent = explode('##', $value); //Разбираем на заголовки и текст по разделителю "##"
            $key++; //Чтобы id  новости начинался с единицы, а не с нуля.
            $this->news[$key] = new Article($newsContent[0], $newsContent[1]);

            /*Еще можно было сделать так:

            [$title, $comment] = explode('##', $value);
            $this->news[$key] = new Article($title,$comment);

            Но мы не изучали конструкцию list(), поэтому оставил первый вариант.*/
        }
    }

    public function getNews(): array
    {
        return $this->news;
    }

    public function getNewsById(int $id)
    {
        if ($this->dataAvailability($id)) {
            return $this->news[$id];
        }

    }

    protected function dataAvailability(int $key): bool //Проверяем, есть ли запись в массиве по переданному id
    {
        return array_key_exists($key, $this->news);
    }

    public function add(Article $article): News
    {
        $this->news[] = $article;
        return $this;
    }

    public function save()
    {
        $newsData = [];
        foreach ($this->getNews() as $id => $line) {

            //$newsData[] = Тут надо что-то придумать;
        }
        //file_put_contents($this->path, implode("\n", $newsData));
    }
}
