<div class="panel panel-default panel-info">
    <div class="panel-heading text-uppercase">tambah data siswa baru</div>
    <div class="panel-body">
        <form class="form-group" enctype="multipart/form-data" method="POST"
              action="<?= base_url('Sekolah/Data_siswa/tambah_aksi'); ?>">
            <div class="container-fluid" style="clear:both;margin:5% 0px;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group text-uppercase">
                            <label>no induk siswa</label>
                            <input type="text" class="form-control" name="no_induk" autocomplete="off" required="" />
                        </div>
                        <div class="form-group">
                            <div class="form-group text-uppercase">
                                <label>n i s n</label>
                                <input type="text" class="form-control" name="nisn" autocomplete="off" required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group text-uppercase">
                                <label>nama siswa</label>
                                <input type="text" class="form-control" name="nama_siswa" autocomplete="off"
                                       required="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group text-uppercase">
                                <label>jenis kelamin</label>
                                <select class="form-control text-uppercase" name="jenis_kelamin" required="">
                                    <option value="0">
                                        pilih jenis kelamin
                                    </option>
                                    <option value="1">
                                        laki-laki
                                    </option>
                                    <option value="2">
                                        peremppuan
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">tempat tanggal lahir</label>
                            <div class="form-inline">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Tempat Lahir"
                                           autocomplete="off" name="tempat_lahir" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control datepicker" autocomplete="off" name="tanggal_lahir"
                                           placeholder="Tanggal lahir" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group text-uppercase">

                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">

                        </div>
                        <div class="form-group">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group text-uppercase">
                            <label>agama</label>
                            <select class="form-control text-uppercase" name="agama" required="">
                                <option value="0">
                                    pilih agama
                                </option>
                                <option value="1">
                                    islam
                                </option>
                                <option value="2">
                                    katholik
                                </option>
                                <option value="3">
                                    protestan
                                </option>
                                <option value="4">
                                    hindu
                                </option>
                                <option value="5">
                                    budha
                                </option>
                                <option value="6">
                                    khong hu chu
                                </option>
                                <option value="7">
                                    lainnya
                                </option>
                            </select>
                        </div>
                        <div class="form-group text-uppercase">
                            <label>nama ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" autocomplete="off" required="" />
                        </div>
                        <div class="form-group text-uppercase">
                            <label>alamat</label>
                            <textarea type="text" class="form-control" name="alamat_siswa" autocomplete="off" required=""
                                      minlength="15"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-group text-uppercase">
                                <label>Status</label>
                                <select class="form-control text-uppercase" name="status" required="">
                                    <option value="0">
                                        pilih status
                                    </option>
                                    <option value="1">
                                        Siswa Baru
                                    </option>
                                    <option value="2">
                                        Naik Kelas
                                    </option>
                                    <option value="3">
                                        Mengulang
                                    </option>
                                    <option value="3">
                                        Lulus
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-uppercase">
                            <label style="margin:20px 0px;">Foto</label>
                            <input type="file" name="foto" class="btn btn-block btn-default" readonly="">
                        </div>
                        <div class="form-group">

                        </div>
                    </div>
                </div>
                <div class="btn-group btn-group" role="group" style="clear:both;margin:20px 0px;">
                    <a href="<?= base_url('Sekolah/Data_Siswa/index'); ?>" class="btn btn-danger text-uppercase">Batal</a>
                    <button type="submit" class="btn btn-success text-uppercase">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    window.onload = function () {
        $.fn.datepicker.defaults.format = "yyyy-mm-dd";
        $('.datepicker').datepicker({

        });
    };
</script>