<?php
// File: d:/KULIAH/PWD/pertemuan-3/latihan/table3.php
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <title>Latihan 3 - Table Layout</title>
  <style>
    body {
      font-family: Georgia, serif;
      background: #fff;
      padding: 20px;
    }

    table.layout {
      width: 820px;
      border-collapse: collapse;
      margin: 0 auto;
    }

    table.layout td {
      vertical-align: middle;
      padding: 8px;
    }

    .logo {
      background: #bfbfbf;
      width: 140px;
      text-align: center;
      font-size: 28px;
      height: 120px;
    }
    .logo > div {
      padding-top: 8px;
    }

    .header {
      background: #f6d7d7;
      text-align: center;
      font-size: 44px;
      height: 120px;
    }
    .header h1 {
      margin: 0;
      font-size: 44px;
    }
    .header .subtitle {
      font-size: 14px;
      margin-top: 6px;
    }

    .contact {
      padding-left: 10px;
      font-size: 13px;
      color: #333;
      vertical-align: middle;
    }

    .nav {
      background: #c9ffdd;
      height: 28px;
      padding-left: 10px;
      font-size: 18px;
    }
    .nav nav {
      display: flex;
      gap: 16px;
      align-items: center;
      height: 100%;
    }

    .search {
      background: #b05bd7;
      color: #fff;
      text-align: center;
      width: 80px;
      font-size: 12px;
    }
    .search form {
      display: flex;
      gap: 6px;
      align-items: center;
      justify-content: center;
    }
    .search input[type="text"] {
      padding: 4px;
      font-size: 12px;
      width: 60px;
      box-sizing: border-box;
    }
    .search button {
      padding: 4px 6px;
      font-size: 12px;
      cursor: pointer;
    }

    .content {
      background: #ef5350;
      color: #111;
      min-height: 260px;
      text-align: center;
      font-size: 48px;
      padding-top: 40px;
    }
    .content .inner {
      text-align: left;
      color: #fff;
      padding: 20px;
      font-size: 16px;
      line-height: 1.5;
    }

    .categories {
      vertical-align: top;
      padding: 8px;
      font-size: 13px;
    }
    .categories ul {
      list-style: none;
      padding-left: 0;
      margin: 8px 0 0 0;
      font-size: 13px;
    }

    .sidebar {
      background: #fff570;
      width: 160px;
      text-align: center;
      font-size: 20px;
      height: 260px;
    }
    .sidebar > div {
      padding: 8px;
    }
    .sidebar p {
      font-size: 13px;
      margin-top: 8px;
    }
    .sidebar hr {
      border: none;
      border-top: 1px solid #ccc;
      margin: 8px 0;
    }
    .sidebar ol {
      text-align: left;
      padding-left: 18px;
      margin-top: 6px;
    }

    .footer {
      background: #66ff66;
      text-align: center;
      font-size: 20px;
      padding: 12px;
    }
    .footer a {
      color: inherit;
      text-decoration: underline;
    }

    .layout a {
      color: inherit;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <table class="layout" cellspacing="0" cellpadding="0">
    <tr>
      <td class="logo">
        <div>
          <strong>MyCompany</strong><br>
          <small>Solusi &amp; Layanan</small>
        </div>
      </td>
      <td class="header" colspan="2">
        <div>
          <h1>Situs Contoh</h1>
          <div class="subtitle">Portal informasi dan tutorial web</div>
        </div>
      </td>
    </tr>
    <tr>
      <td class="contact">
        Kontak: (021) 123-4567<br>
        Email: info@mycompany.id
      </td>
      <td class="nav">
        <nav>
          <a href="#">Beranda</a>
          <a href="#">Artikel</a>
          <a href="#">Tutorial</a>
          <a href="#">Kontak</a>
        </nav>
      </td>
      <td class="search">
        <form action="#" method="get">
          <input type="text" name="q" placeholder="Cari...">
          <button type="submit">Go</button>
        </form>
      </td>
    </tr>
    <tr>
      <td class="categories">
        <strong>Kategori</strong>
        <ul>
          <li><a href="#">Web</a></li>
          <li><a href="#">Desain</a></li>
          <li><a href="#">Pemrograman</a></li>
        </ul>
      </td>
      <td class="content">
        <div class="inner">
          <h2>Judul Artikel</h2>
          <p>
            Ini adalah contoh isi konten. Anda dapat mengganti teks ini dengan deskripsi,
            artikel, instruksi, atau informasi lain yang ingin ditampilkan pada bagian konten.
          </p>

          <h3>Ringkasan Poin</h3>
          <ul>
            <li>Penjelasan singkat mengenai topik utama.</li>
            <li>Informasi tambahan atau langkah-langkah penting.</li>
            <li>Link atau sumber referensi bila diperlukan.</li>
          </ul>

          <p>
            Untuk menambahkan gambar, gunakan tag &lt;img src="path/to/gambar.jpg" alt="..."/&gt;
            di dalam elemen ini.
          </p>
        </div>
      </td>
      <td class="sidebar">
        <div>
          <strong>Sidebar</strong>
          <p>
            Berita singkat, tautan penting, atau iklan dapat diletakkan di sini.
          </p>
          <hr>
          <strong>Popular</strong>
          <ol>
            <li><a href="#">Tutorial PHP</a></li>
            <li><a href="#">Desain CSS</a></li>
            <li><a href="#">JavaScript Tips</a></li>
          </ol>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="3" class="footer">
        &copy; 2025 MyCompany — Semua hak cipta dilindungi. | <a href="#">Kebijakan Privasi</a>
      </td>
    </tr>
  </table>
</body>

</html>