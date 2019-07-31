<div class="panel panel-default">
	<div class="panel-heading">

	</div>
	<div class="panel-body" style="overflow:auto">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th class="text-center text-uppercase" style="padding-bottom:25px;">
						NO.
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px;">
						NPSN
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px;">
						NAMA SEKOLAH
					</th>

					<th class="text-center text-uppercase" style="padding-bottom:25px;">
						Status
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px;">
						Alamat
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px">
						No.Telepon
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px">
						Email
					</th>
					<th class="text-center text-uppercase" style="padding-bottom:25px">
						Nama Kepsek
					</th>

				</tr>
			</thead>
			<tbody>
				<?php
                static $no = 1;
			foreach($value as $value){?>
				<tr>
					
                    <td>
                    <?= $no++ ?>
					</td>
					<td>
						<?= $value->npsn;?>
					</td>
					<td>
						<?= $value->nama_sekolah;?>
					</td>
					<td>
						<?= $value->status;?>
					</td>
					<td><?= $value->alamat_sekolah . ' Kel. ' . $value->kelurahan . ' Kec. ' . $value->kecamatan . ' Kota. ' . $value->kota . ' prov. ' . $value->provinsi ?>
					</td>
					<td>
						<?= $value->no_telp;?>
					</td>
					<td>
						<?= $value->email_sekolah;?>
					</td>
					<td>
						<?= $value->nama_kepsek;?>
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