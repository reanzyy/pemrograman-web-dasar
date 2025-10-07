<?php
// dashboard.php
// Tujuan: Hanya dapat diakses jika pengguna sudah login (ada session is_logged_in=true)
session_start(); // mulai session untuk membaca status login
// Jika belum login, paksa kembali ke login.php
if (empty($_SESSION['is_logged_in']) || $_SESSION['is_logged_in'] !== true) {
  header('Location: login.php'); // redirect jika belum login
  exit;
}
// Ambil nama user dari session untuk sapaan
$nama = $_SESSION['user_name'] ?? 'User';
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      font-family: system-ui, Arial, sans- serif;
      margin: 24px;
      background: #f6fffb
    }

    .wrap {
      max-width: 720px;
      margin: auto
    }

    .top {
      display: flex;
      justify-content: space-between;
      align-items: center
    }

    a.btn {
      display: inline-block;
      padding: 8px 12px;
      background: #ff4757;
      color: #fff;
      border-radius: 8px;
      text-decoration: none
    }

    .card {
      margin-top: 16px;
      background: #fff;
      border: 1px solid #e8f5ef;
      border-radius: 12px;
      padding: 16px;
    }
  </style>
</head>

<body>
  <div class="wrap">
    <div class="top">
      <h2>Selamat datang, <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8')
                          ?>!</h2>
      <!-- Tombol logout mengarah ke logout.php -->
      <a href="logout.php" class="btn">Logout</a>
    </div>
    <div class="card">
      <p>Ini adalah halaman <strong>terlindungi</strong>. Anda hanya bisa
        melihat halaman ini setelah berhasil login.</p>
      <ul>
        <li>Gunakan tombol <em>Logout</em> di kanan atas untuk keluar.</li>
        <li>Coba akses langsung <code>dashboard.php</code> tanpa login:
          Anda akan diarahkan balik ke <code>login.php</code>.</li>
      </ul>
    </div>
  </div>
</body>

</html>