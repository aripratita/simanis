<li>
    <a href="<?= base_url('Kadin/Dashboard/index'); ?>">
        <i class="fa fa-home"></i>
        <span>Home</span>
    </a>
</li>
<li class=treeview>
    <a href=#>
        <i class="fa fa-folder"></i>
        <span>Laporan</span>
        <span class=pull-right-container>
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class=treeview-menu>
        <li><a href=<?= base_url('Kadin/Datasiswa/index') ?>><i class="fa fa-circle-o"></i> Data Siswa</a></li>
        <li><a href=<?= base_url('Kadin/Datasekolah/index') ?>><i class="fa fa-circle-o"></i> Data Sekolah</a></li>
        <li><a href=<?= base_url('Kadin/Manajemen/index') ?>><i class="fa fa-circle-o"></i> Manajemen Data</a></li>
    </ul>
</li>
