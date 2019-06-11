<li>
	<a href="<?= base_url('dashboard') ?>">
		<i class="fa fa-dashboard"></i>
		<span>Home</span>
		<span class="pull-right-container">
			<span class="label label-primary pull-right"></span>
		</span>
	</a>
</li>
<!-- <li>
          <a href="pages/widgets.html">
            <i class="fa fa-th"></i> <span>Widgets</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li> -->

<li class="treeview">
	<a href="#">
		<i class="fa fa-folder"></i>
		<span>Data Siswa</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		</span>
	</a>
	<ul class="treeview-menu">
		<li><a href="<?= base_url('data_siswa') ?>"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
		<li><a href="<?= base_url('data_siswa/dat_sis_total') ?>"><i class="fa fa-circle-o"></i> Rekap Data</a></li>
	</ul>
</li>
<li>
	<a href="<?= base_url('data_sekolah') ?>">
		<i class="fa fa-pie-chart"></i>
		<span>Data Sekolah</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-right"></i>
		</span>
	</a>

</li>
<li>
	<a href="<?= base_url('Manajemen_Datsis') ?>">
		<i class="fa fa-pie-chart"></i>
		<span>Manajemen Data</span>
		<span class="pull-right-container">
			<!-- <i class="glyphicon glyphicon-menu-right"></i> -->
		</span>
	</a>
</li>
