<!DOCTYPE html>
<html>

<head>
  <title>Formulir Pendaftaran Siswa</title>
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <fieldset>
      <legend>Formulir Pendaftaran Siswa Baru</legend>
      <table>
        <tr>
          <td>Nama Calon Siswa</td>
          <td> : <input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Tempat/Tanggal Lahir</td>
          <td> : <input type="text" name="tempat"> <input type="date" name="tanggal-lahir"></td>
        </tr>
        <tr>
          <td>Agama</td>
          <td> :
            <select name="agama">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td> : <textarea name="alamat" rows="4" cols="30"></textarea></td>
        </tr>
        <tr>
          <td>No Telp/HP</td>
          <td> : <input type="text" name="telepon" placeholder="083122212121"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td> :
            <input type="radio" name="jk" value="Pria"> Pria
            <input type="radio" name="jk" value="Wanita"> Wanita
          </td>
        </tr>
        <tr>
          <td>Hobi</td>
          <td> :
            <input type="checkbox" name="hobi[]" value="Membaca"> Membaca
            <input type="checkbox" name="hobi[]" value="Menulis"> Menulis
            <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga
          </td>
        </tr>
        <tr>
          <td>Pas Foto</td>
          <td> : <input type="file" name="foto"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="SUBMIT">
          </td>
        </tr>
      </table>
      </fie>
  </form>
</body>

</html>