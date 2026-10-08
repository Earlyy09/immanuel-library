<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? '';
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    echo '<h2>Pengguna berhasil diperbarui</h2>';

    print_r([
        'id' => $id,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ]);
}