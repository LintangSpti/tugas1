<?php

class Book
{
    private $judul;
    private $penulis;
    private $genre;
    private $tahun;

    public function __construct($judul, $penulis, $genre, $tahun)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->genre = $genre;
        $this->tahun = $tahun;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function getTahun()
    {
        return $this->tahun;
    }
}

