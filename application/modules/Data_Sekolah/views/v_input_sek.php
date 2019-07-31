
    <center>
        <h1>INPUT DATA SEKOLAH</h1>
        <h3>Tambah Data Baru</h3>

    </center>
    <form action="<?php echo base_url('Data_sekolah/tambah_aksi')?>" method="POST">
        <table style="margin:20px auto;">
            <tr>
                <td>NPSN</td>
                <td><input type="text" name="npsn"></td>
            </tr>
         
            <tr>
              <td>Nama Sekolah</td>
              <td><input type="text" name="nama_sekolah"></td></tr>
            </tr>

            <tr>
              <td>Status</td>
              <td><input type="text" name="status"></td>
            </tr>

            <tr>
              <td>Alamat</td>
              <td><input type="text" name="alamat_sekolah"></td>
            </tr>
            <tr>
              <td>Kelurahan</td>
              <td><input type="text" name="kelurahan"></td>
            </tr>
            <tr>
              <td>Kecamatan</td>
              <td><input type="text" name="kecamatan"></td>
            </tr>
             <tr>
                <td>Kota</td>
                <td><input type="text" name="kota"></td>
            </tr>
             <tr>
                <td>Provinsi</td>
                <td><input type="text" name="provinsi"></td>
            </tr>
             <tr>
                <td>No.Telepon</td>
                <td><input type="text" name="no_telp"></td>
            </tr>
             <tr>
                <td>Email</td>
                <td><input type="text" name="email_sekolah"></td>
            </tr>
             <tr>
                <td>Nama Kepsek</td>
                <td><input type="text" name="nama_kepsek"></td>
            </tr>

            <tr>
              <td></td>
              <td><input type="submit" value="tambah"></td>
            </tr>
      </table>
    </form>
