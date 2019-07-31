<div class="panel panel-default">
    <div class="panel-heading">

    </div>
    <div class="panel-body" style="overflow:auto">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center text-uppercase">
                        NO.
                    </th>
                    <th class="text-center text-uppercase">
                        NAMA SEKOLAH
                    </th>
                    <th class="text-center text-uppercase">
                        NPSN
                    </th>
                    <th class="text-center text-uppercase">
                        Status
                    </th>
                    <th class="text-center text-uppercase">
                        Alamat
                    </th>
                    <th class="text-center text-uppercase">
                        No.Telepon
                    </th>
                    <th class="text-center text-uppercase">
                        Email
                    </th>
                    <th class="text-center text-uppercase">
                        Nama Kepsek
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($value as $value) { ?>
                    <tr>
                        <td class="text-center">
                            <?php
                            static $i = 1;
                            echo $i++;
                            ?>
                        </td>
                        <td><?= $value->nama_sekolah ?></td>
                        <td><?= $value->npsn ?></td>
                        <td class="text-center"><?= $value->status ?></td>
                        <td><?= $value->alamat_sekolah . ', Kel. ' . $value->kelurahan . ', Kec. ' . $value->kecamatan . ', Kota. ' . $value->kota . ', Prov. ' . $value->provinsi ?></td>
                        <td><?= $value->no_telp ?></td>
                        <td><?= $value->email_sekolah ?></td>
                        <td><?= $value->nama_kepsek ?></td>
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