<?php
require_once '../../repositories/book-repository.php'; // Sesuaikan repository buku Anda jika ada

// 1. Pastikan request menggunakan method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "Akses tidak valid.";
    exit;
}

// 2. Validasi kelengkapan data
if (
    isset($_POST['title'], $_POST['isbn'], $_POST['year'], $_POST['stock'], $_POST['category_id'], $_POST['description'])
) {
    $data = [
        'title'       => trim($_POST['title']),
        'isbn'        => trim($_POST['isbn']),
        'year'        => (int) $_POST['year'],
        'stock'       => (int) $_POST['stock'],
        'category_id' => (int) $_POST['category_id'],
        'description' => trim($_POST['description']),
        'author_ids'  => $_POST['author_ids'] ?? [],
    ];

    // Untuk pengujian/debug:
    echo "Buku baru berhasil diterima:<br>";
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    // Jika ingin langsung mengarahkan kembali setelah simpan data ke DB:
    // storeBook($data);
    // header('Location: ../../pages/books/index.php');
    // exit;
} else {
    echo "Data buku tidak lengkap.";
}