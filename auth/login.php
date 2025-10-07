<?php
// login.php — Perbaikan dan pembersihan
session_start();

// Jika sudah login langsung ke dashboard
if (!empty($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
  header('Location: dashboard.php');
  exit;
}

// Kredensial demo (untuk pembelajaran saja)
$DEMO_USERNAME = 'mahasiswa';
$DEMO_PASSWORD_HASH = password_hash('rahasia123', PASSWORD_DEFAULT);

// Sticky & pesan
$username = '';
$pesan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = trim($_POST['username'] ?? '');
  $password = trim($_POST['password'] ?? '');

  if ($username === '' || $password === '') {
    $pesan = 'Username dan Password wajib diisi.';
  } else {
    if ($username !== $DEMO_USERNAME) {
      $pesan = 'Username tidak ditemukan.';
    } else {
      if (password_verify($password, $DEMO_PASSWORD_HASH)) {
        // Regenerasi session untuk mencegah session fixation
        session_regenerate_id(true);
        $_SESSION['is_logged_in'] = true;
        $_SESSION['user_name'] = $username;
        header('Location: dashboard.php');
        exit;
      } else {
        $pesan = 'Password salah.';
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — Simulasi</title>
  <style>
    body {
      font-family: system-ui, Arial, sans-serif;
      margin: 24px;
      background: #fafafa;
    }

    .card {
      max-width: 360px;
      margin: auto;
      background: #fff;
      border: 1px solid #eee;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, .04);
    }

    .row {
      margin-bottom: 12px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    button {
      padding: 10px 14px;
      border: 0;
      border-radius: 8px;
      cursor: pointer;
    }

    .btn {
      background: #0069d9;
      color: #fff;
    }

    .msg {
      margin: 8px 0;
      color: #b00020;
    }

    .hint {
      font-size: 12px;
      color: #666;
      margin-top: 6px;
    }
  </style>
</head>

<body>
  <div class="card">
    <h2>Login — Simulasi Tanpa DB</h2>

    <?php if ($pesan): ?>
      <div class="msg"><?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?></div>
    <?php endif; ?>

    <!-- Self-submit (action kosong -> submit ke URL saat ini) -->
    <form method="post" action="">
      <div class="row">
        <label for="username">Username</label>
        <input type="text" id="username" name="username"
          value="<?= htmlspecialchars($username, ENT_QUOTES, 'UTF-8') ?>"
          autocomplete="username" maxlength="100">
      </div>
      <div class="row">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" autocomplete="current-password">
      </div>
      <div class="row">
        <button type="submit" class="btn">Masuk</button>
      </div>
    </form>

    <p class="hint">Demo kredensial: <code>mahasiswa</code> / <code>rahasia123</code></p>
  </div>
</body>

</html>