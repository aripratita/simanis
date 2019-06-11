
	<center><h1></tr></h1></center>
	<center><?php echo anchor('Data_sekolah/tambah','Tambah Data'); ?></center>
	<table style="margin:25px auto;" class="table table-bordered" border="1">
		<thead style="background: ;" ><tr>
			<th>No.</th>
			<th>NPSN</th>
			<th>Nama Sekolah</th>
			<th>Status</th>
			<th>Alamat</th>
			<th>Kelurahan</th>
			<th>Kecamatan</th>
			<th>Kota</th>
			<th>Provinsi</th>
			<th>No.Telepon</th>
			<th>Email</th>
			<th>Nama Kepsek</th>
			<th>Aksi</th>
			</tr></thead>
		<?php 
		$no = 1;
		foreach($index as $u){ 
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
			      <?php echo anchor('Data_sekolah/edit/'.$u->id_sekolah,'Edit'); ?>
                              
		</tr>
		<?php } ?>
	</table>
