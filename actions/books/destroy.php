<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Buku berhasil dihapus</h2>';
    echo 'ID buku yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID buku tidak ditemukan.';
}