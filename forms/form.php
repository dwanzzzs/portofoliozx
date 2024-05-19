<?php
// Ambil nilai dari formulir
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Buat pesan email
$to = 'tujuan@example.com'; // Ganti dengan alamat email tujuan Anda
$subject = 'Pesan dari ' . $name;
$body = 'Nama: ' . $name . "\n" .
        'Email: ' . $email . "\n" .
        'Pesan: ' . $message;

// Kirim email
if (mail($to, $subject, $body)) {
    echo 'Pesan Anda telah berhasil dikirim.';
} else {