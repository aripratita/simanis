<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="text-uppercase">nama sekolah</h3>
    </div>
    <div class="panel-body">
        <div class="form-group text-right">
            <a href="<?= base_url('Sekolah/Data_Sekolah/tambah'); ?>" class="btn btn-default">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th class="text-center text-bold text-uppercase">No.</th>
                        <th class="text-center text-bold text-uppercase">NPSN</th>
                        <th class="text-center text-bold text-uppercase">Nama Sekolah</th>
                        <th class="text-center text-bold text-uppercase">Status</th>
                        <th class="text-center text-bold text-uppercase">Alamat</th>
                        <th class="text-center text-bold text-uppercase">No.Telepon</th>
                        <th class="text-center text-bold text-uppercase">Email</th>
                        <th class="text-center text-bold text-uppercase">Nama Kepsek</th>
                        <th class="text-center text-bold text-uppercase">Aksi</th>
                    </tr></thead>
                <?php
                static $no = 1;
                foreach ($index as $u) {
                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u->npsn ?></td>
                        <td><?= $u->nama_sekolah ?></td>
                        <td><?= $u->status ?></td>
                        <td><?= $u->alamat_sekolah . ' Kel. ' . $u->kelurahan . ' Kec. ' . $u->kecamatan . ' Kota. ' . $u->kota . ' prov. ' . $u->provinsi ?></td>
                        <td><?= $u->no_telp ?></td>
                        <td><?= $u->email_sekolah ?></td>
                        <td><?= $u->nama_kepsek ?></td>
                        <td class="text-center">
                            <a href="<?= base_url('Sekolah/Data_Sekolah/edit/'); ?><?php echo $u->id_sekolah ?>" class="btn btn-xs btn-default"><i class="glyphicon glyphicon-pencil"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
    <div class="panel-footer">

    </div>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip'
        });
    };
</script>