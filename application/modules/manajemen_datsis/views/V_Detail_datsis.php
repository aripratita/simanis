<?php
foreach ($value as $value) {
    
}
?>
<div class="container-fluid" style="clear:both;margin:5% 0px;">
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <img src="<?= base_url('assets/images/abc.jpg') ?>" style="width:100px;height:90px;" class="img-responsive img-thumbnail img-rounded"/>
                <h2 class="text-uppercase">
                    <?= $value->nama_siswa ?>
                </h2>
                <p class="text-uppercase">
                    <?= $value->tempat_lahir . ', ' . $value->tanggal_lahir ?>
                </p>
            </div>
        </div>
        <div class="col-md-4">

        </div>
        <div class="col-md-4">

        </div>
    </div>
    <div style="border-bottom:2px solid #E6E9ED;margin:10px 0px;"></div>
    <div class="table-responsive">
        <table class="table table-responsive table-hover" style="width: 100%;">
            <tbody>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">Jenis kelamin</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: <?php
                        if ($value->jenis_kelamin == 1) {
                            echo 'laki-laki';
                        } else {
                            echo 'perempuan';
                        }
                        ?>
                    </td>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">nama sekolah</label>
                    </td>
                    <td style="white-space: nowrap;width:1px;">: 
                        <?= $value->nama_sekolah ?>
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">tempat tanggal lahir</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->tempat_lahir . ', ' . $value->tanggal_lahir; ?>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">
                        <label>n p s n</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->npsn; ?>
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">agama</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?php
                        if ($value->agama == 1) {
                            echo 'islam';
                        } elseif ($value->agama == 2) {
                            echo 'katolik';
                        } elseif ($value->agama == 3) {
                            echo 'protestan';
                        } elseif ($value->agama == 4) {
                            echo 'hindu';
                        } elseif ($value->agama == 5) {
                            echo 'budha';
                        } elseif ($value->agama == 6) {
                            echo 'khong hu chu';
                        } else {
                            echo 'lainnya';
                        }
                        ?>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">
                        <label>kepala sekolah</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->nama_kepsek; ?>
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">nama ibu</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->nama_ibu ?>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">
                        <label>email sekolah</label>
                    </td>
                    <td class="text-info" style="white-space: nowrap;width:1px;">: 
                        <?= $value->email_sekolah; ?>
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">rombel</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->id_rombel ?>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">
                        <label>Telepon</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->no_telp ?>
                    </td>
                </tr>
                <tr>
                    <td style="white-space: nowrap;width:1px;">
                        <label class="text-uppercase">alamat</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->alamat_siswa ?>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">
                        <label>alamat sekolah</label>
                    </td>
                    <td class="text-uppercase" style="white-space: nowrap;width:1px;">: 
                        <?= $value->alamat_sekolah ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="btn-group btn-group-sm <?php
    if ($addclass != "") {
        echo $addclass;
    } else {
        echo '';
    }
    ?>" role="group" style="clear:both;margin:20px 0px;">
        <a href="<?= base_url('manajemen_datsis/index'); ?>" class="btn btn-danger text-uppercase">kembali</a>
        <a href="<?= base_url('manajemen_datsis/Cetak/' . $value->id_siswa . ' '); ?>" target="_new" class="btn btn-success text-uppercase">print</a>
    </div>
</div>