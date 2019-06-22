<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel panel-heading">

        </div>
        <div class="panel panel-body">
            <div class="form-group text-right">
                <a href="<?= base_url('Sekolah/Data_siswa/tambah'); ?>" class="btn btn-default btn-success text-uppercase">tambah</a>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center text-bold text-uppercase">
                            NIS
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            NISN
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            nama
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            kelamin
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            T T L
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            agama
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            ibu
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            alamat
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            status
                        </th>
                        <th class="text-center text-bold text-uppercase">
                            action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data_siswa as $u) { ?>
                        <tr>
                            <td>
                                <?= $u->no_induk ?>
                            </td>
                            <td>
                                <?= $u->nisn ?>
                            </td>
                            <td>
                                <?= $u->nama_siswa ?>
                            </td>
                            <td class="text-uppercase">
                                <?php
                                $jk = $u->jenis_kelamin;
                                if ($jk == 1) {
                                    echo 'Laki-Laki';
                                } else {
                                    echo 'Perempuan';
                                }
                                ?>
                            </td>
                            <td>
                                <?= $u->tempat_lahir . ' / ' . $u->tanggal_lahir ?>
                            </td>
                            <td class="text-uppercase">
                                <?php
                                $agama = $u->agama;
                                if ($agama == 1) {
                                    echo 'ISLAM';
                                } elseif ($agama == 2) {
                                    echo 'Katolik';
                                } elseif ($agama == 3) {
                                    echo 'Protestan';
                                } elseif ($agama == 4) {
                                    echo 'Hindu';
                                } elseif ($agama == 5) {
                                    echo 'Budha';
                                } elseif ($agama == 6) {
                                    echo 'KHONG HU CHU';
                                } elseif ($agama == 7) {
                                    echo 'Lainnya';
                                }
                                ?>
                            </td>
                            <td>
                                <?= $u->nama_ibu ?>
                            </td>
                            <td>
                                <?= $u->alamat_siswa ?>
                            </td>
                            <td class="text-uppercase">
                                <?php
                                $status = $u->status;
                                if ($status == 1) {
                                    echo 'Siswa Baru';
                                } elseif ($status == 2) {
                                    echo 'Naik Kelas';
                                } elseif ($status == 3) {
                                    echo 'Mengulang';
                                } elseif ($status == 4) {
                                    echo 'Lulus';
                                } elseif ($status == 5) {
                                    echo 'Hapus';
                                }
                                ?>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="<?= base_url('Sekolah/Data_Siswa/edit/' . $u->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Ubah Data Siswa"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="<?= base_url('Sekolah/Data_Siswa/hapus/' . $u->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Hapus Data Siswa"><i class="glyphicon glyphicon-trash"></i></a>    
                                    <a href="<?= base_url('Sekolah/Data_Siswa/Baca/' . $u->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Rinci Data Siswa"><i class="glyphicon glyphicon-eye-open"></i></a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip',
            responsive: true
        });
    };
</script>