<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title>Daftar Nilai</title>
</head>

<style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh;
  }

  .card {
    background-color: white;
    padding: 20px;
    margin: 15px;
    box-shadow: 10px 15px;
    border-radius: 10px;
    border: 1px solid gray;

  }
</style>

<body>
  <div class="card">
    <center>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama      = $_POST['nama'];
        $tugas = (int) $_POST['tugas'];
        $quiz  = (int) $_POST['quiz'];
        $uts   = (int) $_POST['uts'];
        $uas      = (int) $_POST['uas'];

        $nilaiTugas = $tugas / 100 * 20;
        $nilaiQuiz = $quiz / 100 * 10;
        $nilaiUts = $uts / 100 * 30;
        $nilaiUas = $uas / 100 * 40;

        $nilaiAkhir  = $nilaiTugas + $nilaiQuiz + $nilaiUts + $nilaiUas;

        if ($nilaiAkhir >= 80) {
          $index = 'A';
          $desc = 'Sangat Baik';
        } elseif ($nilaiAkhir >= 70) {
          $index = 'B';
          $desc = 'Baik';
        } elseif ($nilaiAkhir >= 60) {
          $index = 'C';
          $desc = 'Cukup';
        } elseif ($nilaiAkhir >= 50) {
          $index = 'D';
          $desc = 'Kurang';
        } else {
          $index = 'E';
          $desc = 'Sangat Kurang';
        }

        echo "<h2>Hasil Perhitungan Nilai</h2>
        <table border='1' cellpadding='5' cellspacing='0'>
          <tr><td>Nama</td><td>" . htmlspecialchars($nama) . "</td></tr>
          <tr><td>Nilai Tugas</td><td>$tugas</td></tr>
          <tr><td>Nilai Quiz</td><td>$quiz</td></tr>
          <tr><td>Nilai Uts</td><td>$uts</td></tr>
          <tr><td>Nilai Uas</td><td>$uas</td></tr>
          <tr><td>Nilai Akhir</td><td>$nilaiAkhir</td></tr>
          <tr><td>Index</td><td>$index</td></tr>
          <tr><td>Keterangan</td><td>$desc</td></tr>
        </table>
        <br>
        <a href='" . $_SERVER['PHP_SELF'] . "'>Kembali ke Form</a>";
      } else {
      ?>
        <h1>Kalkulasi Nilai Mahasiswa</h1>

        <form method="POST" action="">
          <table>
            <tr>
              <td>Nama</td>
              <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
              <td>Nilai Tugas</td>
              <td><input type="text" name="tugas" required></td>
            </tr>
            <tr>
              <td>Nilai Quiz</td>
              <td><input type="text" name="quiz" required></td>
            </tr>
            <tr>
              <td>Nilai Uts</td>
              <td><input type="text" name="uts" required></td>
            </tr>
            <tr>
              <td>Nilai Uas</td>
              <td><input type="text" name="uas" required></td>
            </tr>
          </table>
          <br>
          <input type="submit" value="Lihat Hasil">
        </form>
      <?php
      }
      ?>
    </center>
  </div>
</body>

</html>