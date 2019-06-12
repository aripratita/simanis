<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <title><?= $title; ?></title>
        <link rel="icon" href="<?= base_url('favicon.ico'); ?>" type="image/x-icon" />
        <meta content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" name=viewport>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/font-awesome/css/font-awesome.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/bower_components/Ionicons/css/ionicons.min.css') ?>>
        <link rel=stylesheet href=<?= base_url('assets/css/datatables.min.css') ?>>
        <link rel=stylesheet href="<?= base_url('assets/css/bootstrap-datepicker.min.css'); ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/AdminLTE.min.css') ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/skins/_all-skins.min.css'); ?>">
        <link rel=stylesheet href="<?= base_url('assets/css/font.css'); ?>">
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class=wrapper>
            <header class=main-header>
                <a href="#" class=logo>
                    <span class=logo-lg><b>SIMANIS</b></span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href=# class=sidebar-toggle data-toggle=push-menu role=button>
                        <span class=sr-only>Toggle navigation</span>
                    </a>
                    <div class=navbar-custom-menu>
                        <ul class="nav navbar-nav">
                            <li class="dropdown user user-menu">
                                <a href=# class=dropdown-toggle data-toggle=dropdown>
                                    <img src=<?= base_url('assets/img/user2-160x160.jpg') ?> class=user-image alt="User Image">
                                    <span class="hidden-xs text-uppercase">
                                        <?= $this->session->userdata('username'); ?>
                                    </span>
                                </a>
                                <ul class=dropdown-menu>
                                    <li class=user-footer>
                                        <div class=pull-right>
                                            <a href="<?= base_url('Login/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class=main-sidebar>
                <section class=sidebar>
                    <div class=user-panel>
                        <div class="pull-left image">
                            <img src=<?= base_url('assets/img/user2-160x160.jpg') ?> class=user-image alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p class="text-uppercase"><?= $this->session->userdata('username'); ?></p>
                            <small class="text-uppercase text-info">
                                <?php
                                if ($this->session->userdata('lvl') == 1) {
                                    echo 'kepala dinas';
                                } elseif ($this->session->userdata('lvl') == 2) {
                                    echo 'Dikdas / PPLK';
                                } elseif ($this->session->userdata('lvl') == 3) {
                                    echo 'satlak';
                                } else {
                                    echo 'administrator sekolah';
                                }
                                ?>
                            </small>
                        </div>
                    </div>
                    <ul class=sidebar-menu data-widget=tree>
                        <li class=header>MAIN NAVIGATION</li>
                        <?php
                        if ($this->session->userdata('lvl') == 1) {
                            $this->load->view('sidebar_kepdin');
                        } elseif ($this->session->userdata('lvl') == 2) {
                            $this->load->view('sidebar_dikdas');
                        } elseif ($this->session->userdata('lvl') == 3) {
                            $this->load->view('sidebar_satlak');
                        } elseif ($this->session->userdata('lvl') == 4) {
                            $this->load->view('sidebar_os');
                        } else {
                            echo '';
                        }
                        ?>
                    </ul>
                </section>
            </aside>
            <!--=====================================================================================================-->
            <div class=content-wrapper>
                <section class=content>
                    <?= $content ?>
                </section>
            </div>
            <!--=====================================================================================================-->
            <footer class=main-footer>
                <strong>Copyright &copy; 2019 <a href="#">Ari Pratitasari</a>.</strong>
            </footer>
        </div>
        <script src=<?= base_url('assets/css/bower_components/jquery/dist/jquery.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>></script>
        <script src=<?= base_url('assets/js/adminlte.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/fastclick/lib/fastclick.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>></script>
        <script src=<?= base_url('assets/js/datatables.min.js') ?>></script>
        <script src=<?= base_url('assets/css/bower_components/chart.js/Chart.js') ?>></script>
        <script src=<?= base_url('assets/js/bootstrap-datepicker.min.js'); ?>></script>
    </body>
</html>