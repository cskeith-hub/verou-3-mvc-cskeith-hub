<?php

declare(strict_types=1);

class Article
{
    public int $id;
    public string $title;
    public ?string $description;
    public ?string $publishDate;
    public int $totalArticles;

    public function __construct(int $id,string $title, ?string $description, ?string $publishDate, int $totalArticles)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->publishDate = $publishDate;
        $this->totalArticles = $totalArticles;
    }

    public function formatPublishDate($format = 'DD-MM-YYYY')
    {
        // TODO: return the date in the required format
    }
    
    // TODO Pass $article to  nextPage function
    public function nextPage()
    {
        $count = $this->id;
        if($count === $this->totalArticles)
        {
            return 1;
        }
        return ++$count;
    }
    // TODO Pass $article to  previousPage function
    public function previousPage()
    {   
        $count = $this->id;
        if($count === $this->totalArticles)
        {
            return --$count;
        }
        elseif($count === 1)
        {
            return $this->totalArticles;
        }
        return 1;
    }
}