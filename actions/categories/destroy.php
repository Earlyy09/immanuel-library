<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Kategori berhasil dihapus</h2>';
    echo 'ID kategori yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID kategori tidak ditemukan.';
}