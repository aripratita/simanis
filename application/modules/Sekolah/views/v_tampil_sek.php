<center><?php echo anchor('Data_sekolah/tambah', 'Tambah Data'); ?></center>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th class="text-center text-bold text-uppercase">No.</th>
                <th class="text-center text-bold text-uppercase">NPSN</th>
                <th class="text-center text-bold text-uppercase">Nama Sekolah</th>
                <th class="text-center text-bold text-uppercase">Status</th>
                <th class="text-center text-bold text-uppercase">Alamat</th>
                <th class="text-center text-bold text-uppercase">Kelurahan</th>
                <th class="text-center text-bold text-uppercase">Kecamatan</th>
                <th class="text-center text-bold text-uppercase">Kota</th>
                <th class="text-center text-bold text-uppercase">Provinsi</th>
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
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->npsn ?></td>
                <td><?php echo $u->nama_sekolah ?></td>
                <td><?php echo $u->status ?></td>
                <td><?php echo $u->alamat_sekolah ?></td>
                <td><?php echo $u->kelurahan ?></td>
                <td><?php echo $u->kecamatan ?></td>
                <td><?php echo $u->kota ?></td>
                <td><?php echo $u->provinsi ?></td>
                <td><?php echo $u->no_telp ?></td>
                <td><?php echo $u->email_sekolah ?></td>
                <td><?php echo $u->nama_kepsek ?></td>

                <td>
                    <?php echo anchor('Data_sekolah/edit/' . $u->id_sekolah, 'Edit'); ?>

            </tr>
        <?php } ?>
    </table>
</div>
<script>
    window.onload = function () {
        $('.table').DataTable({
            "dom": 'lBfrtip'
        });
    };
</script>