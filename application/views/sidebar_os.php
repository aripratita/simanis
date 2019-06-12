<li>
    <a href=<?= base_url('Sekolah/Dashboard/index') ?>>
        <i class="fa fa-home"></i>
        <span>Home</span>
    </a>
</li>
<li class=treeview>
    <a href=#>
        <i class="fa fa-folder"></i>
        <span>Data Siswa</span>
        <span class=pull-right-container>
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class=treeview-menu>
        <li><a href=<?= base_url('Sekolah/Data_Siswa/index') ?>><i class="fa fa-circle-o"></i> Data Siswa</a></li>
        <li><a href=<?= base_url('Sekolah/Data_Siswa/dat_sis_total') ?>><i class="fa fa-circle-o"></i> Rekap Data</a></li>
    </ul>
</li>
<li>
    <a href=<?= base_url('Sekolah/Data_Sekolah/index') ?>>
        <i class="fa fa-pie-chart"></i>
        <span>Data Sekolah</span>
        <span class=pull-right-container>
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
</li>
<li>
    <a href=<?= base_url('Sekolah/Manajemen_Datsis/index') ?>>
        <i class="fa fa-pie-chart"></i>
        <span>Manajemen Data</span>
        <span class=pull-right-container>
        </span>
    </a>
</li>