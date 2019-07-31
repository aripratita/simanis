<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th class="text-center text-uppercase">
                        nisn
                    </th>
                    <th class="text-center text-uppercase">
                        nama
                    </th>
                    <th class="text-center text-uppercase">
                        j_kel
                    </th>
                    <th class="text-center text-uppercase">
                        ttl
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
                        tgl pengajuan
                    </th>
                    <th class="text-center text-uppercase">
                        status pengajuan
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($value as $value) { ?>
                    <tr>
                        <td>
                            <?= $value->nisn ?>
                        </td>
                        <td>
                            <?= $value->nama_siswa_b ?>
                        </td>
                        <td>
                            <?= $value->jenis_kelamin_b ?>
                        </td>
                        <td>
                            <?= $value->nama_siswa_b ?>
                        </td>
                        <td>
                            <?= $value->jenis_kelamin_b ?>
                        </td>
                        <td>
                            <?= $value->tempat_lahir_b ?>
                        </td>
                        <td>
                            <?= $value->tempat_lahir_b ?><br>
                            <?= $value->tanggal_lahir_b ?>
                        </td>
                        <td>
                            <?= $value->agama_b ?>
                        </td>
                        <td>
                            <?= $value->nama_ibu_b ?>
                        </td>
                        
                    </tr>
                <?php } ?>
            </tbody>
        </table>
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