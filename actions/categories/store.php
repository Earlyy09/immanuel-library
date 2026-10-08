<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';

    echo '<h2>Kategori berhasil diterima</h2>';

    print_r([
        'name' => $name
    ]);
}