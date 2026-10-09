<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    echo '<h2>Pengguna berhasil dihapus</h2>';
    echo 'ID pengguna yang dihapus: ' . htmlspecialchars((string) $id);
} else {
    echo 'ID pengguna tidak ditemukan.';
}