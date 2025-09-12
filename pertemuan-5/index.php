<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Daftar Nilai</title>
</head>

<body>
  <center>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama      = $_POST['nama'];
      $algoritma = (int) $_POST['algoritma'];
      $database  = (int) $_POST['database'];
      $inggris   = (int) $_POST['inggris'];
      $java      = (int) $_POST['java'];

      $total = $algoritma + $database + $inggris + $java;
      $rata  = $total / 4;

      if ($rata >= 85) {
        $grade = 'A (Kompeten)';
      } elseif ($rata >= 75) {
        $grade = 'B (Kompeten)';
      } elseif ($rata >= 65) {
        $grade = 'C (Kompeten)';
      } elseif ($rata >= 55) {
        $grade = 'D (Tidak Kompeten)';
      } else {
        $grade = 'E (Tidak Kompeten)';
      }

      echo "<h2>Hasil Perhitungan Nilai</h2>
        <table border='1' cellpadding='5' cellspacing='0'>
          <tr><td>Nama</td><td>" . htmlspecialchars($nama) . "</td></tr>
          <tr><td>Algoritma</td><td>$algoritma</td></tr>
          <tr><td>Database</td><td>$database</td></tr>
          <tr><td>B. Inggris</td><td>$inggris</td></tr>
          <tr><td>Pemrograman Java</td><td>$java</td></tr>
          <tr><td>Total Nilai</td><td>$total</td></tr>
          <tr><td>Rata-rata</td><td>" . number_format($rata, 2) . "</td></tr>
          <tr><td>Grade</td><td>$grade</td></tr>
        </table>
        <br>
        <a href='" . $_SERVER['PHP_SELF'] . "'>Kembali ke Form</a>";
    } else {
    ?>
      <form method="POST" action="">
        <table>
          <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" required></td>
          </tr>
          <tr>
            <td>Nilai Algoritma</td>
            <td><input type="number" name="algoritma" min="0" max="100" required></td>
          </tr>
          <tr>
            <td>Nilai Database</td>
            <td><input type="number" name="database" min="0" max="100" required></td>
          </tr>
          <tr>
            <td>Nilai B.Inggris</td>
            <td><input type="number" name="inggris" min="0" max="100" required></td>
          </tr>
          <tr>
            <td>Nilai Pemrograman Java 1</td>
            <td><input type="number" name="java" min="0" max="100" required></td>
          </tr>
        </table>
        <br>
        <input type="submit" value="Lihat Hasil">
      </form>
    <?php
    }
    ?>
  </center>
</body>

</html>