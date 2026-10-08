<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $bio = $_POST['bio'] ?? '';

    echo '<h2>Profil berhasil diperbarui</h2>';

    print_r([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'address' => $address,
        'bio' => $bio
    ]);
}