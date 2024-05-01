<?php

class Book
{
    private $title;
    private $author;
    private $genre;
    private $publicationYear;

    public function __construct($title, $author, $genre, $publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->genre = $genre;
        $this->publicationYear = $publicationYear;
    }

    // Getter dan setter untuk properti buku (jika diperlukan)
}
