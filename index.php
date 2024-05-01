<?php
require_once 'Database.php';
require_once 'BookManager.php';

// Membuat instance dari BookManager
$bookManager = new BookManager();

// Menambahkan buku baru ke database
$book1 = new Book("Rumah Kaca", "Pramoedya Ananta Toer", "Fiksi Historis", 1988);
$bookManager->addBook($book1);


$book2 = new Book("Bumi Manusia", "Pramoedya Ananta Toer", "Drama histori", 1980);
$bookManager->addBook($book2);

$book3 = new Book("Jejak Langkah (Footsteps)", "Pramoedya Ananta Toer", "Fiksi Sejarah", 1985);
$bookManager->addBook($book3);

// Mendapatkan semua buku dari database
$books = $bookManager->getAllBooks();

// Menampilkan semua buku yang ada
echo " -> Daftar Buku:\n" ;
echo "<br>";
foreach ($books as $book) {
    echo "Judul: " . $book['judul'] . "<br>", " Penulis: " . $book['penulis'] . "<br>", " Genre: " . $book['genre'] . "<br>", " Tahun Publikasi: " . $book['tahun'] . "\n";
    echo "<br>";
}

