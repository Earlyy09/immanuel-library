<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role = $_POST['role'] ?? '';

    echo '<h2>Pengguna berhasil diterima</h2>';

    print_r([
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ]);
}