<?php
session_start();

// Reset game jika tombol mulai ulang ditekan
if (isset($_POST['reset'])) {
  unset($_SESSION['angka_rahasia']);
  unset($_POST['tebakan']);
  unset($_POST['percobaan']);
}

// Inisialisasi angka rahasia
if (!isset($_SESSION['angka_rahasia'])) {
  $_SESSION['angka_rahasia'] = rand(1, 100);
}
$angka_rahasia = $_SESSION['angka_rahasia'];

// Inisialisasi percobaan dan tebakan
$percobaan = isset($_POST['percobaan']) ? (int)$_POST['percobaan'] : 0;
$tebakan = isset($_POST['tebakan']) ? (int)$_POST['tebakan'] : null;
$pesan = "";

// logika permainan
if ($tebakan !== null) {
  // Validasi input
  if ($tebakan < 1 || $tebakan > 100) {
    $pesan = "Tebakan harus antara 1 sampai 100!";
    $bg = "red";
  } else {
    // Proses tebakan
    $percobaan++;
    if ($tebakan < $angka_rahasia) {
      $pesan = "Salah, tebakan Anda terlalu kecil! Coba lagi.";
      $bg = "gray";
    } elseif ($tebakan > $angka_rahasia) {
      $pesan = "Salah, tebakan Anda terlalu besar! Coba lagi.";
      $bg = "gray";
    } else {
      $pesan = "Selamat! Anda berhasil menebak angka $angka_rahasia setelah $percobaan kali percobaan.";
      $bg = "green";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GAME TEBAK ANGKA</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
</head>

<style>
  body {
    font-family: 'Orbitron', Arial, sans-serif;
    background-color: #f7b42c;
    min-height: 100vh;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .container {
    background: rgba(255, 255, 255, 0.85);
    border-radius: 20px;
    box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
    padding: 40px 30px;
    width: 350px;
    max-width: 90vw;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  h1 {
    font-size: 2.2em;
    letter-spacing: 2px;
    color: #fc575e;
    margin-bottom: 10px;
    text-shadow: 2px 2px 8px #f7b42c88;
  }

  p {
    font-size: 1.1em;
    margin-bottom: 15px;
    position: relative;
    z-index: 1;
  }

  input[type="number"] {
    padding: 12px;
    font-size: 18px;
    width: 180px;
    margin-right: 10px;
    border-radius: 8px;
    border: 2px solid #fc575e;
    outline: none;
    transition: border 0.2s;
    margin-bottom: 10px;
  }

  input[type="number"]:focus {
    border: 2px solid #f7b42c;
    background: #fffbe6;
  }

  button {
    padding: 12px 28px;
    font-size: 18px;
    border-radius: 8px;
    border: none;
    background: #fc575e;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    box-shadow: 0 2px 8px #fc575e44;
    transition: background 0.2s, transform 0.2s;
    margin-top: 10px;
  }

  button:hover {
    background: #f7b42c;
    transform: scale(1.05);
  }

  .count {
    display: block;
    margin-top: 12px;
    color: #555;
    font-size: 0.95em;
    letter-spacing: 1px;
  }

  .secret-number {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 0.9em;
    color: #ffb011ff;
    user-select: none;
  }

  .message {
    font-size: 1.1em;
    font-weight: bold;
    padding: 10px 2px;
    border-radius: 8px;
    margin-bottom: 10px;
    background: #fffbe6;
    box-shadow: 0 2px 8px #f7b42c22;
    color: #fff;
    text-shadow: 1px 1px 4px #fc575e88;
  }

  .message.red {
    background: #fc575e;
  }

  .message.gray {
    background: #ffdc14ff;
  }

  .message.green {
    background: #4caf50;
  }
</style>

<body>
  <div class="container">
    <h1>GAME TEBAK ANGKA</h1>
    <p>Pikirkan sebuah angka antara <b>1-100</b></p>

    <!-- // Menampilkan pesan jika ada -->
    <?php if ($pesan): ?>
      <div class="message <?= $bg ?>"><?= $pesan ?></div>
    <?php endif; ?>

    <!-- // Menampilkan form input jika tebakan salah atau belum ada tebakan -->
    <?php if ($tebakan !== $angka_rahasia || $tebakan === null || ($tebakan < 1 || $tebakan > 100)): ?>
      <form action="" method="post">
        <input type="number" name="tebakan" min="1" max="100" placeholder="Masukkan tebakan...">
        <input type="hidden" name="percobaan" value="<?= $percobaan ?>">
        <button type="submit">Tebak!</button>
        <small class="count">Jumlah percobaan : <b><?= $percobaan ?></b></small>
      </form>

      <!-- // Menampilkan tombol mulai ulang jika tebakan benar -->
    <?php else: ?>
      <form action="" method="post">
        <button type="submit" name="reset" value="1">Mulai Ulang</button>
      </form>
    <?php endif; ?>
  </div>
  <small class="secret-number"><?= $angka_rahasia ?></small>
</body>

</html>