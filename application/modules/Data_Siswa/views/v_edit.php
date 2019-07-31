<?php
foreach ($data_siswa as $u) {
    
}
?>
<form method="POST" action="<?php echo base_url('Data_Siswa/update')?>" method="POST" enctype="multipart/form-data">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label class="text-uppercase">No.Induk</label>
					<input type="text" name="no_induk" class="form-control" value="<?php echo $u->no_induk ?>"
						readonly="">
				</div>
				<div class="form-group">
					<label class="text-uppercase">NISN</label>
					<input type="text" name="nisn" value="<?php echo $u->nisn ?>" class="form-control" readonly="">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Nama Siswa </label>
					<input type="text" name="nama_siswa" class="form-control" value="<?php echo $u->nama_siswa ?>"
						required="" autocomplete="off">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Jenis Kelamin</label>
					<select name="jenis_kelamin" required="true" class="form-control"
						value="<?php echo $u->jenis_kelamin ?>">
						<option value="0">
							pilih jenis kelamin
						</option>
						<option value="1" <?php
						if($u->jenis_kelamin == 1){
							echo "selected";
						}else{echo "";}
						?>>
							Laki-laki
						</option>
						<option value="2" <?php
						if($u->jenis_kelamin == 2){
							echo "selected";
						}else{echo "";}
						?>>
							Perempuan
						</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-uppercase">Tempat Tanggal Lahir</label>
					<div class="form-inline">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Tempat Lahir" autocomplete="off"
								name="tempat_lahir" value="<?php echo $u->tempat_lahir ?>" required="">
						</div>
						<div class="form-group">
							<input type="text" class="form-control datepicker" autocomplete="off" name="tanggal_lahir"
								placeholder="Tanggal lahir" value="<?php echo $u->tanggal_lahir ?>" required="">
						</div>
					</div>
				</div>
			</div>

			<!-- ================================================================================================== -->
			<div class="col-md-4">
				<div class="form-group">
					<label class="text-uppercase">Agama</label>
					<select class="form-control text-uppercase" name="agama" required="">
						<option value="" class="text-uppercase">
							pilih agama
						</option>
						<option value="1" class="text-uppercase" <?php
						if($u->agama == 1){
							echo "selected";
						}else{echo "";}
						?>>
							ISLAM
						</option>
						<option value="2" class="text-uppercase" <?php
								if($u->agama == 2){
									echo "selected";
								}else{echo "";}
								?>>
							KATOLIK
						</option>
						<option value="3" class="text-uppercase" <?php
								if($u->agama == 3){
									echo "selected";
								}else{echo "";}
								?>>
							PROTESTAN
						</option>
						<option value="4" class="text-uppercase" <?php
								if($u->agama == 4){
									echo "selected";
								}else{echo "";}
								?>>
							HINDU
						</option>
						<option value="5" class="text-uppercase" <?php
								if($u->agama == 5){
									echo "selected";
								}else{echo "";}
								?>>
							BUDHA
						</option>
						<option value="6" class="text-uppercase" <?php
								if($u->agama == 6){
									echo "selected";
								}else{echo "";}
								?>>
							KONG HU CU
						</option>
						<option value="7" class="text-uppercase" <?php
								if($u->agama == 7){
									echo "selected";
								}else{echo "";}
								?>>
							Lainnya
						</option>
					</select>
				</div>

				<div class="form-group">
					<label class="text-uppercase">Nama Ibu</label>
					<input type="text" class="form-control" autocomplete="off" name="nama_ibu" required=""
						value="<?php echo $u->nama_ibu ?>">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Alamat </label>
					<textarea class="form-control" name="alamat_siswa" minlength="15"
						required=""><?php echo $u->alamat_siswa ?></textarea>
				</div>
				<div class="form-group">
					<label class="text-uppercase">Status</label>
					<select name="status" required="true" class="form-control" value="<?php echo $u->status ?>">
						<option value="0">
							pilih status
						</option>
						<option value="1" <?php
						if($u->status == 1){
							echo "selected";
						}else{echo "";}
						?>>
							Siswa Baru
						</option>
						<option value="2" <?php
						if($u->status == 2){
							echo "selected";
						}else{echo "";}
						?>>
							Naik Kelas
						</option>
						<option value="3" <?php
						if($u->status == 3){
							echo "selected";
						}else{echo "";}
						?>>
							Mengulang
						</option>
						<option value="4" <?php
						if($u->status == 4){
							echo "selected";
						}else{echo "";}
						?>>
							Lulus
						</option>
					</select>
				</div>
			</div>
			<!-- ================================================================================================== -->
			<div class="col-md-4">
				<div class="form-group-lg">
					<label class="text-uppercase">Foto</label>
					<img src="<?= $u->foto?>" class="img-thumbnail" style="width: 180px; height: 200px";>
					<input type="file" name="foto" class="btn btn-block btn-default">
				</div>
				<div class="btn-group btn-group-sm" role="group" style="clear:both;margin:20px 0px;">
					<a href="<?= base_url('Data_Siswa/index');?>" class="btn btn-danger text-uppercase">Batal</a>
					<button type="submit" class="btn btn-success text-uppercase">Simpan</button>
				</div>
			</div>

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