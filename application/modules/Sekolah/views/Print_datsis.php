<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title ?></title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap-theme.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/fc-3.2.5/fh-3.1.4/r-2.2.2/sl-1.3.0/datatables.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.min.css"/>
    </head>
    <body>
        <?php
        foreach ($value as $value) {
            
        }
        ?>
        <div class="container-fluid" style="clear:both;margin:5% 0px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <img src="assets/images/abc.jpg" style="width:100px;height:90px;" class="img-responsive img-thumbnail img-rounded"/>
                        <h2 class="text-uppercase">
                            <?= $value->nama_siswa ?>
                        </h2>
                        <p class="text-uppercase">
                            <?= $value->tempat_lahir . ', ' . $value->tanggal_lahir ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
            </div>
            <div style="border-bottom:2px solid #E6E9ED;margin:10px 0px;"></div>
            <table class="table table-responsive" style="width: 100%;">
                <tbody>
                    <tr>
                        <td class="text-uppercase">
                            <label>Jenis kelamin</label>
                        </td>
                        <td class="text-uppercase">: <?php
                            if ($value->jenis_kelamin == 1) {
                                echo 'laki-laki';
                            } else {
                                echo 'perempuan';
                            }
                            ?>
                        </td>
                        <td class="text-uppercase">
                            <label>nama sekolah</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->nama_sekolah ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">
                            <label>tempat tanggal lahir</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->tempat_lahir . ', ' . $value->tanggal_lahir; ?>
                        </td>
                        <td class="text-uppercase">
                            <label>n p s n</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->npsn; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">
                            <label>agama</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?php
                            if ($value->agama == 1) {
                                echo 'islam';
                            } elseif ($value->agama == 2) {
                                echo 'katolik';
                            } elseif ($value->agama == 3) {
                                echo 'protestan';
                            } elseif ($value->agama == 4) {
                                echo 'hindu';
                            } elseif ($value->agama == 5) {
                                echo 'budha';
                            } elseif ($value->agama == 6) {
                                echo 'khong hu chu';
                            } else {
                                echo 'lainnya';
                            }
                            ?>
                        </td>
                        <td class="text-uppercase">
                            <label>kepala sekolah</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->nama_kepsek; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">
                            <label>nama ibu</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->nama_ibu ?>
                        </td>
                        <td class="text-uppercase">
                            <label>email sekolah</label>
                        </td>
                        <td class="text-info">: 
                            <?= $value->email_sekolah; ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">
                            <label>rombel</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->nama_rombel ?>
                        </td>
                        <td class="text-uppercase">
                            <label>Telepon</label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->no_telp ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-uppercase">
                            <label>alamat</label>
                        </td>
                        <td class="text-uppercase" >: 
                            <?= $value->alamat_siswa ?>
                        </td>
                        <td class="text-uppercase">
                            <label>alamat sekolah </label>
                        </td>
                        <td class="text-uppercase">: 
                            <?= $value->alamat_sekolah ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group text-right">
                <img src="assets/qrcode/qr_<?= $value->no_induk ?>.png" style="width:50px;height:50px;"/>
            </div>
        </div>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.18/b-1.5.6/b-colvis-1.5.6/b-flash-1.5.6/b-html5-1.5.6/b-print-1.5.6/fc-3.2.5/fh-3.1.4/r-2.2.2/sl-1.3.0/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
    </body>
</html>
