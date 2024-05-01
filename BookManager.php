<?php

use PDO;
use Book;
use Database;

require_once 'Database.php';
require_once 'Book.php';

class BookManager
{
    public function addBook(Book $book)
    {
        $db = Database::getInstance();
        $conn = $db->getConnection();

        $stmt = $conn->prepare("INSERT INTO books (title, author, genre, publication_year) VALUES (:title, :author, :genre, :publication_year)");
        $stmt->bindValue(':title', $book->getTitle());
        $stmt->bindValue(':author', $book->getAuthor());
        $stmt->bindValue(':genre', $book->getGenre());
        $stmt->bindValue(':publication_year', $book->getPublicationYear());
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
