<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';

    echo '<h2>Kategori berhasil diperbarui</h2>';

    print_r([
        'id' => $id,
        'name' => $name
    ]);
}