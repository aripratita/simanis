<div class="container-fluid" style="clear:both;margin:5% 0px;">
    <div class="form-group text-right">
        <a href="<?= base_url('manajemen_datsis/Tambah/'); ?>" class="btn btn-default btn-success text-uppercase">tambah</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" style="width:100%;">
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
                        TTL
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
                        action
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($value as $value) { ?>
                    <tr>
                        <td>
                            <?= $value->no_induk ?>
                        </td>
                        <td>
                            <?= $value->nisn ?>
                        </td>
                        <td>
                            <?= $value->nama_siswa ?>
                        </td>
                        <td class="text-uppercase">
                            <?php
                            $jk = $value->jenis_kelamin;
                            if ($jk == 1) {
                                echo 'Laki-Laki';
                            } else {
                                echo 'Perempuan';
                            }
                            ?>
                        </td>
                        <td>
                            <?= $value->tempat_lahir . ' / ' . $value->tanggal_lahir ?>
                        </td>
                        <td class="text-uppercase">
                            <?php
                            $agama = $value->agama;
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
                            <?= $value->nama_ibu ?>
                        </td>
                        <td>
                            <?= $value->alamat_siswa ?>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="...">
                                <a href="<?= base_url('Sekolah/manajemen_datsis/Ubah/' . $value->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Ubah data siswa"><i class="glyphicon glyphicon-pencil"></i></a>
                            <a href="<?= base_url('Sekolah/manajemen_datsis/Baca/' . $value->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Rinci data siswa"><i class="glyphicon glyphicon-eye-open"></i></a>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>      
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip'
        });
    };
</script>