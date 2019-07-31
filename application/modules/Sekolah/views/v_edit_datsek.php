<?php
foreach ($data_sekolah as $u) {
  ?>
<form method="POST" action="<?php echo base_url('Sekolah/Data_Sekolah/update')?>" enctype="multipart/form-data">
	<div class="container-fluid" style="clear:both;margin:5% 0px;">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label class="text-uppercase">NPSN</label>
					<input type="text" name="npsn" class="form-control" value="<?php echo $u->npsn ?>" readonly>
				</div>
				<div class="form-group">
					<label class="text-uppercase">Nama_Sekolah</label>
					<input type="text" name="nama_sekolah" value="<?php echo $u->nama_sekolah ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Status</label>
					<input type="text" name="status" value="<?php echo $u->status ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Alamat</label>
					<input type="text" name="alamat_sekolah" value="<?php echo $u->alamat_sekolah ?>"
						class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Kelurahan</label>
					<input type="text" name="kelurahan" value="<?php echo $u->kelurahan ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Kecamatan</label>
					<input type="text" name="kecamatan" value="<?php echo $u->kecamatan ?>" class="form-control">
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
			<div class="form-group">
					<label class="text-uppercase">Kota</label>
					<input type="text" name="kota" value="<?php echo $u->kota ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Provinsi</label>
					<input type="text" name="provinsi" value="<?php echo $u->provinsi ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">No.Telepon</label>
					<input type="text" name="no_telp" value="<?php echo $u->no_telp ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Email</label>
					<input type="text" name="email_sekolah" value="<?php echo $u->email_sekolah ?>"
						class="form-control">
				</div>
				<div class="form-group">
					<label class="text-uppercase">Kepala Sekolah</label>
					<input type="text" name="nama_kepsek" value="<?php echo $u->nama_kepsek ?>" class="form-control">
				</div>
				<div class="btn-group btn-group-sm" role="group" style="clear:both;margin:20px 0px;">
					<a href="<?= base_url('data_sekolah/index');?>" class="btn btn-danger text-uppercase">Batal</a>
					<button type="submit" class="btn btn-success text-uppercase">Simpan</button>
				</div>
				
			</div>
</form>
<?php  
}
?>
<script>
	window.onload = function () {
		$.fn.datepicker.defaults.format = "yyyy-mm-dd";
		$('.datepicker').datepicker({

		});
	};
</script>