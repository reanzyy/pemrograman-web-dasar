<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penerbang Rocket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <nav class="navbar">
    <div class="container">
      <div class="logo">Penerbang Rocket</div>
      <ul>
        <li><a href="#home">Beranda</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#anggota">Anggota</a></li>
      </ul>
    </div>
  </nav>
  <header id="home">
    <div class="container">
      <div class="left">
        <h1>Penerbang Rocket 🚀</h1>
        <p>
          Kami adalah kelompok mahasiswa yang sedang mengerjakan tugas proyek web.<br>
          Dengan semangat belajar dan kerja sama, kami berusaha menghasilkan karya terbaik untuk memenuhi tugas kuliah Pemrograman Web Dasar.
        </p>
      </div>
      <div class="right">
        <img src="./assets/img/rocket.png" class="rocket" alt="rocket">
      </div>
    </div>
  </header>
  <section class="about" id="about">
    <h2>Tentang Kami</h2>
    <p>
      Kelompok <b>"Penerbang Rocket"</b> terdiri dari mahasiswa yang berkolaborasi dalam pembuatan website sebagai tugas kelompok.<br>
      Kami percaya bahwa kerja sama, kreativitas, dan semangat belajar adalah kunci untuk menyelesaikan setiap tantangan tugas kuliah.<br>
      Melalui proyek ini, kami berharap dapat mengembangkan kemampuan dan pengalaman di bidang web development.
    </p>
  </section>
  <section class="anggota-section" id="anggota">
    <h2>Anggota Kelompok</h2>
    <div class="anggota">
      <?php

      function gravatar_url($name, $size = 80)
      {
        $hash = md5(strtolower(trim($name)));
        return "https://www.gravatar.com/avatar/$hash?s=$size&d=identicon";
      }

      $members = [
        [
          "name" => "Muhamad Adriansyah Suryawan",
          "nim" => "42240198",
          "link" => "cv/adriansyah.html",
        ],
        [
          "name" => "Aldyn Rahmadani",
          "nim" => "42240171",
          "link" => "cv/aldyn.html",
        ],
        [
          "name" => "Bagas Prasetyo",
          "nim" => "42240175",
          "link" => "cv/bagas.html",
        ],
        [
          "name" => "Deni Muhamad Taufik",
          "nim" => "42240177",
          "link" => "cv/deni.html",
        ],
        [
          "name" => "Gilang Dwi Putra",
          "nim" => "42240187",
          "link" => "cv/gilang.html",
        ],
        [
          "name" => "Mohamad Haikal Dwiki Akbar",
          "nim" => "42240196",
          "link" => "cv/haikal.html",
        ],
        [
          "name" => "Muhammad Rizki Riansyah",
          "nim" => "42240205",
          "link" => "cv/rizki.html",
        ],
      ];
      usort($members, function ($a, $b) {
        return strcmp($a['name'], $b['name']);
      });
      foreach ($members as $m) {
      ?>
        <a href="<?= $m['link'] ?>" class="card" target="_blank">
          <div class="profile-img"><img src="<?= gravatar_url($m['name']) ?>" alt="<?= $m['name'] ?>"></div>
          <h3><?= $m['name'] ?></h3>
          <p><?= $m['nim'] ?></p>
        </a>
      <?php
      }
      ?>
    </div>
  </section>
  <footer>
    &copy; <?= date("Y"); ?> Penerbang Rocket. Website tugas kelompok PWD.
  </footer>
</body>

</html>