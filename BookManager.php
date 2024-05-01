<?php
require_once 'Database.php';
require_once 'Book.php';

class BookManager
{
    public function addBook(Book $book)
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("INSERT INTO books (judul, penulis, genre, tahun) VALUES (:judul, :penulis, :genre, :tahun)");
        $stmt->bindValue(':judul', $book->getJudul());
        $stmt->bindValue(':penulis', $book->getPenulis());
        $stmt->bindValue(':genre', $book->getGenre());
        $stmt->bindValue(':tahun', $book->getTahun());
        $stmt->execute();
    }

    public function getAllBooks()
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->query("SELECT * FROM books");
        $books = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $books;
    }

    // Metode lain untuk memanipulasi data buku (menghapus, memperbarui, dll.)
}
