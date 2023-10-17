<?php

require_once __DIR__ . '/Author.php';

class Book
{
    public function __construct(
        private string $title,
        private int $releaseYear,
        private int $nbPages,
        private string $isbn,
        private Author $author
    ) {
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getReleaseYear()
    {
        return $this->releaseYear;
    }
    public function setReleaseYear($releaseYear): self
    {
        $this->releaseYear = $releaseYear;
        return $this;
    }

    public function getNbPages()
    {
        return $this->nbPages;
    }
    public function setNbPages($nbPages): self
    {
        $this->nbPages = $nbPages;
        return $this;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
    public function setIsbn($isbn): self
    {
        $this->isbn = $isbn;
        return $this;
    }

    public function getAuthor(): Author
    {
        return $this->author;
    }
    public function setAuthor($author): self
    {
        $this->author = $author;
        return $this;
    }
}
