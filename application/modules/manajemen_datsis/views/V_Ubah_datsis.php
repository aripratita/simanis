<?php
foreach ($value as $value) {
    
}
?>
<form method="POST" action="<?= base_url('manajemen_datsis/Perbarui/' . $value->id_mdatsis . ' '); ?>" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-uppercase">no induk</label>
                    <p><?= $value->no_induk ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">no induk nasional</label>
                    <p><?= $value->nisn ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">nama siswa</label>
                    <p><?= $value->nama_siswa ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">jenis_kelamin</label>
                    <p><?php
                        if ($value->jenis_kelamin == 1) {
                            echo 'Laki-Laki';
                        } else {
                            echo 'Perempuan';
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tempat tanggal lahir</label>
                    <p><?= $value->tempat_lahir . ', ' . $value->tanggal_lahir ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">agama</label>
                    <p>
                        <?php
                        if ($value->agama == 1) {
                            echo 'ISLAM';
                        } elseif ($value->agama == 2) {
                            echo 'PROTESTAN';
                        } elseif ($value->agama == 3) {
                            echo 'KATOLIK';
                        } elseif ($value->agama == 4) {
                            echo 'HINDU';
                        } elseif ($value->agama == 5) {
                            echo 'BUDHA';
                        } elseif ($value->agama == 6) {
                            echo 'KHONG HU CHU';
                        } elseif ($value->agama == 7) {
                            echo 'Lainnya';
                        }
                        ?>
                    </p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">nama_ibu</label>
                    <p><?= $value->nama_ibu ?></p>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">alamat</label>
                    <p><?= $value->alamat ?></p>
                </div>
            </div>
            <!--========================================================================================================-->
            <div class="col-md-4">
                <div class="form-group">
                    <label class="text-uppercase">nama siswa baru</label>
                    <input type="text" name="namabaru" class="form-control" required="" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">jenis_kelamin baru</label>
                    <select class="form-control text-uppercase" name="jkel" required="">
                        <option value="" class="text-uppercase">
                            pilih jenis kelamin
                        </option>
                        <option value="1" class="text-uppercase">
                            laki-laki
                        </option>
                        <option value="2" class="text-uppercase">
                            perempuan
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">tempat tanggal lahir baru</label>
                    <div class="form-inline">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tempat Lahir" autocomplete="off" name="tempat" required="">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control datepicker" autocomplete="off" readonly="" name="tgl" placeholder="Tanggal lahir" required="">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">agama baru</label>
                    <select class="form-control text-uppercase" name="agama" required="">
                        <option value="" class="text-uppercase">
                            pilih agama
                        </option>
                        <option value="1" class="text-uppercase">
                            islam
                        </option>
                        <option value="2" class="text-uppercase">
                            Katolik
                        </option>
                        <option value="3" class="text-uppercase">
                            protestan
                        </option>
                        <option value="4" class="text-uppercase">
                            Hindu
                        </option>
                        <option value="5" class="text-uppercase">
                            budha
                        </option>
                        <option value="6" class="text-uppercase">
                            KHONG HU CHU
                        </option>
                        <option value="7" class="text-uppercase">
                            lainnya
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-uppercase">nama_ibu baru</label>
                    <input type="text" class="form-control" autocomplete="off" name="ibutxt" required="">
                </div>
                <div class="form-group">
                    <label class="text-uppercase">alamat baru</label>
                    <textarea class="form-control" name="alamat" minlength="15" required=""></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="form-group-lg">
                    <label> Upload Document Pendukung</label>
                    <input type="file" name="doctxt" class="btn btn-block btn-success" value="Upload" required="" accept=".jpg,.jpeg,.png,.doc,.docx,.pdf">
                </div>  
            </div>
            <div class="col-md-4">

            </div>
        </div>
        <div class="btn-group btn-group-sm" role="group" style="clear:both;margin:20px 0px;">
            <a href="<?= base_url('manajemen_datsis/index');?>" class="btn btn-danger text-uppercase">Batal</a>
            <button type="submit" class="btn btn-success text-uppercase">Simpan</button>
        </div>
    </div>
</form>
<script>
    window.onload = function () {
        $.fn.datepicker.defaults.format = "yyyy-mm-dd";
        $('.datepicker').datepicker({

        });
    };
</script>