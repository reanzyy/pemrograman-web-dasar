<!DOCTYPE html>
<html>

<head>
  <title>Table</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
      background: #f9f9f9;
    }

    table {
      border-collapse: collapse;
      margin-bottom: 30px;
      width: 80%;
      background: #fff;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    }

    th,
    td {
      border: 1px solid #bbb;
      padding: 8px 14px;
      text-align: center;
    }

    th {
      background: #e3e8f0;
      color: #333;
    }

    tr:nth-child(even) {
      background: #f4f7fa;
    }

    td[style*="text-align:left;"] {
      text-align: left !important;
    }
  </style>
</head>

<body>
  <table>
    <tr>
      <th rowspan="2">No</th>
      <th rowspan="2">Nama</th>
      <th colspan="5">Pertemuan</th>
    </tr>
    <tr>
      <th>1</th>
      <th>2</th>
      <th>3</th>
      <th>4</th>
      <th>5</th>
    </tr>
    <tr>
      <td>1</td>
      <td style="text-align:left;">Neymar</td>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
      <td></td>
      <td>s</td>
    </tr>
    <tr>
      <td>2</td>
      <td style="text-align:left;">Cristiano</td>
      <td>a</td>
      <td>✓</td>
      <td>i</td>
      <td>s</td>
      <td>✓</td>
    </tr>
    <tr>
      <td>3</td>
      <td style="text-align:left;">Bale</td>
      <td>a</td>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
      <td>✓</td>
    </tr>
  </table>

  <table>
    <tr>
      <td>apel</td>
      <td rowspan="2">jeruk</td>
      <td>mangga</td>
    </tr>
    <tr>
      <td>pisang</td>
      <td>nanas</td>
    </tr>
  </table>

  <table>
    <tr>
      <th rowspan="2">Benua</th>
      <th colspan="2">EROPA</th>
      <th colspan="2">ASIA</th>
    </tr>
    <tr>
      <td>Belanda</td>
      <td>Italia</td>
      <td>Indonesia</td>
      <td>India</td>
    </tr>
  </table>

  <table>
    <tr>
      <th>Benua</th>
      <th>Negara</th>
    </tr>
    <tr>
      <td rowspan="4">ASIA</td>
      <td>Arab Saudi</td>
    </tr>
    <tr>
      <td>India</td>
    </tr>
    <tr>
      <td>Indonesia</td>
    </tr>
    <tr>
      <td>Singapura</td>
    </tr>
    <tr>
      <td rowspan="4">EROPA</td>
      <td>Belanda</td>
    </tr>
    <tr>
      <td>Italia</td>
    </tr>
    <tr>
      <td>Inggris</td>
    </tr>
    <tr>
      <td>Jerman</td>
    </tr>
  </table>
</body>

</html>