<div class="container-fluid">
    <div class="panel panel-default">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="form-group text-right">
                <a href="<?= base_url('Sekdikdas/Data_Siswa/Tambah/'); ?>" class="btn btn-default btn-success text-uppercase">tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th class="text-center text-uppercase">
                                NIS
                            </th>
                            <th class="text-center text-uppercase">
                                NISN
                            </th>
                            <th class="text-center text-uppercase">
                                nama
                            </th>
                            <th class="text-center text-uppercase">
                                jenis kelamin
                            </th>
                            <th class="text-center text-uppercase">
                                T T L
                            </th>
                            <th class="text-center text-uppercase">
                                agama
                            </th>
                            <th class="text-center text-uppercase">
                                ibu
                            </th>
                            <th class="text-center text-uppercase">
                                alamat
                            </th>
                            <th class="text-center text-uppercase">
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
                                    <?= $value->nama_siswa_b ?>
                                </td>
                                <td class="text-uppercase">
                                    <?php
                                    $jk = $value->jenis_kelamin_b;
                                    if ($jk == 1) {
                                        echo 'Laki-Laki';
                                    } else {
                                        echo 'Perempuan';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $value->tempat_lahir_b . ' / ' . $value->tanggal_lahir_b ?>
                                </td>
                                <td class="text-uppercase">
                                    <?php
                                    $agama = $value->agama_b;
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
                                    <?= $value->nama_ibu_b ?>
                                </td>
                                <td>
                                    <?= $value->alamat_b ?>
                                </td>
                                <td class="text-center">
                                    <a href="<?= base_url('manajemen_datsis/Ubah/' . $value->id_mdatsis . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Approve data siswa"><i class="glyphicon glyphicon-ok-sign"></i></a>
                                    <a href="<?= base_url('manajemen_datsis/Ubah/' . $value->id_mdatsis . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Reject data siswa"><i class="glyphicon glyphicon-remove-sign"></i></a>
                                    <a href="<?= base_url('manajemen_datsis/Baca/' . $value->id_mdatsis . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Lampiran"><i class="glyphicon glyphicon-eye-open"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip'
        });
    };
</script>