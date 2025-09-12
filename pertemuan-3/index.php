<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Data Pribadi</h1>

  <?php
  $nama = 'Muhamad Adriansyah Suryawan';
  $prodi = 'Rekayasa Perangkat Lunak';
  $semester = '3';
  $nim = '42240198';
  $umur = '19';
  $tinggi_badan = '173';
  ?>

  <?php foreach (range(1, 50) as $index => $i) { ?>
    <div>
      <div><?= $index + 1 ?></div>
      <div>Nama saya <?= $nama ?></div>
      <div>Nama saya <?= $nama ?></div>
      <div>Sekarang saya semester <?= $semester ?> Prodi <?= $prodi ?></div>
      <div>NIM saya <?= $nim ?></div>
      <div>Sekarang saya berumur <?= $umur ?></div>
      <div>Tinggi badan saya <?= $tinggi_badan ?></div>
    </div>
    <hr>
  <?php } ?>


</body>

</html>