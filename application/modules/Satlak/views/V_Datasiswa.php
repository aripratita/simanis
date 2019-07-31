<div class="container-fluid">
<div class="panel panel-default">
	<div class="panel-heading">

	</div>
	<div class="panel-body" style="overflow:auto">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<div class="box-header">
						<h3 class="box-title"><b></b></h3>
					</div>
				</tr>

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
						Action
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
					
					<td class="text-center">
						<div class="btn-group" role="group">
						<a href="<?= base_url('Satlak/Datasiswa/Baca/' . $value->id_siswa . ''); ?>" class="btn btn-xs btn-default" data-toggle="tooltip" title="Rinci Data Siswa"><i class="glyphicon glyphicon-eye-open"></i></a>
						</div>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
	<div class="panel-footer">

	</div>
</div>
</div>
<script>
	window.onload = function () {
		$('.table').DataTable({
			"dom": 'lBfrtip'
		});
	};
</script>