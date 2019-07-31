<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrator SIMANIS | Log in</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body style="background-color:black;">
        <div class="container-fluid">
            <div class="row" style="margin:8% 0px;">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="card card-default card-primary">
                        <div class="card-header">
                            <p class="text-center text-uppercase" style="cursor:default;">login system simanis</p>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <p id="msguname" class="text-danger" style="display:none;"></p>
                                <input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off" required="">
                            </div>
                            <div class="form-group">
                                <p id="msgpwd" class="text-danger" style="display:none;"></p>
                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <p class="text-center" id="errmsg" style="display:none;color:#ed4956;"></p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" style="margin:10px 0px;">
                                        <a href="#">I forgot my password</a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="button" onclick="login()" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <p class="text-info" style="cursor:default;">     
                                © <?= date("Y") ?> SIMANIS
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <script>
            function login() {
                var a, b;
                a = $('input[name=username]').val();
                b = $('input[name=password]').val();
                if (a == "") {
                    $('#msguname').show('slow');
                    document.getElementById("msguname").innerHTML = 'Masukkan username !';
                    $('#msguname').delay(3000).hide('slow');
                } else if (b == "") {
                    $('#msgpwd').show('slow');
                    document.getElementById("msgpwd").innerHTML = 'Masukkan password !';
                    $('#msgpwd').delay(3000).hide('slow');
                } else {
                    $.ajax({
                        async: false,
                        type: 'POST',
                        url: "https://localhost/simanis/Login/proses/",
                        data: {'username': a, 'password': b},
                        statusCode: {
                            200: function (data) {
                                if (data.lvl == 1) {
                                    window.location.href = "https://localhost/simanis/Kadin/Dashboard/index";
                                } else if (data.lvl == 2) {
                                    window.location.href = "https://localhost/simanis/Sekdikdas/Dashboard/index";
                                } else if (data.lvl == 3) {
                                    window.location.href = "https://localhost/simanis/Satlak/Dashboard/index";
                                } else if (data.lvl == 4) {
                                    window.location.href = "https://localhost/simanis/Sekolah/Dashboard/index";
                                }
                            },
                            201: function (data) {
                                $('#errmsg').show('slow');
                                document.getElementById("errmsg").innerHTML = data.message;
                                $('#errmsg').delay(3500).hide('slow');
                            }
                        }
                    });
                }
            }
        </script>
        <script type="text/javascript" src="<?= base_url('assets/css/bower_components/jquery/dist/jquery.min.js'); ?>"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>