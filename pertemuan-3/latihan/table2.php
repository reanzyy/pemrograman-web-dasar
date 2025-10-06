<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Daftar Kehadiran</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 90%;
      margin-top: 20px;
      border: 3px solid #444;
    }

    th,
    td {
      border: 2px solid #444;
      padding: 10px;
    }

    thead th {
      background: #9fffa0;
      padding: 12px;
    }

    thead th.no {
      background: #f48c8c;
    }

    thead th.siswa {
      background: #86c9ff;
      text-align: left;
    }

    .subhead {
      background: #d6f7ef;
      padding: 8px;
      text-align: center;
    }

    td.center {
      text-align: center;
      padding: 8px;
    }

    td.name {
      text-align: left;
      padding: 10px;
    }
  </style>
</head>

<body>
  <table>
    <thead>
      <tr>
        <th class="no" rowspan="2" scope="col">No.</th>
        <th class="siswa" rowspan="2" scope="col">Siswa</th>
        <th colspan="5" scope="col">Pertemuan</th>
      </tr>
      <tr>
        <th class="subhead" scope="col">1</th>
        <th class="subhead" scope="col">2</th>
        <th class="subhead" scope="col">3</th>
        <th class="subhead" scope="col">4</th>
        <th class="subhead" scope="col">5</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="center" scope="row">1</td>
        <td class="name">Asep</td>
        <td class="center">&#10003;</td>
        <td class="center">&#10003;</td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
        <td class="center"></td>
      </tr>
      <tr>
        <td class="center" scope="row">2</td>
        <td class="name">Budi</td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
        <td class="center"></td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
      </tr>
      <tr>
        <td class="center" scope="row">3</td>
        <td class="name">Citra</td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
        <td class="center">&#10003;</td>
        <td class="center">&#10003;</td>
        <td class="center">&#10003;</td>
      </tr>
      <tr>
        <td class="center" scope="row">4</td>
        <td class="name">Muhamad Adriansyah Suryawan</td>
        <td class="center">&#10003;</td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
        <td class="center"></td>
        <td class="center">&#10003;</td>
      </tr>
    </tbody>
  </table>
</body>

</html>