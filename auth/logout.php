<?php
// logout.php
// Tujuan: Menghapus data session dan mengakhiri sesi login, lalu kembali
session_start(); // mulai session untuk bisa menghapus datanya
// Hapus seluruh data session
$_SESSION = []; // kosongkan array session
// (Opsional) Hapus cookie session jika ada
if (ini_get('session.use_cookies')) {
  $params = session_get_cookie_params();
  setcookie(
    session_name(),
    '',
    time() - 42000,
    $params['path'],
    $params['domain'],
    $params['secure'],
    $params['httponly']
  );
}
// Hapuskan session di server
session_destroy();
// Kembali ke halaman login
header('Location: login.php');
exit;
