<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?= $title ?></title>
        <meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
        <meta content="Themesdesign" name="author" />
        <link rel="shortcut icon" href="<?= base_url()?>/backoffice/assets/images/favicon.ico">

        <link href="<?= base_url()?>/backoffice/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>/backoffice/assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>/backoffice/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url()?>/backoffice/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <!-- Begin page -->
        <div class="accountbg"></div>
       
        <div class="wrapper-page">
                <div class="card card-pages shadow-none">
    
                    <div class="card-body">
                        <div class="text-center m-t-0 m-b-15">
                                <a href="index.html" class="logo logo-admin"><img src="<?= base_url()?>/backoffice/assets/images/logo-dark.png" alt="" height="24"></a>
                        </div>
                        <h5 class="font-18 text-center">Sign in to continue to Stexo.</h5>
    
                        <form class="form-horizontal m-t-30" action="index.html">
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Username</label>
                                    <input class="form-control" type="text" required="" placeholder="Username">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-12">
                                        <label>Password</label>
                                    <input class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>
    
                           <hr>
    
                            <div class="form-group text-center m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                                </div>
                            </div>
    
                            <div class="form-group row m-t-30 m-b-0">
                                <div class="col-sm-7">
                                    <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                </div>
                               
                            </div>
                        </form>
                    </div>
    
                </div>
            </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?= base_url()?>/backoffice/assets/js/jquery.min.js"></script>
        <script src="<?= base_url()?>/backoffice/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>/backoffice/assets/js/metismenu.min.js"></script>
        <script src="<?= base_url()?>/backoffice/assets/js/jquery.slimscroll.js"></script>
        <script src="<?= base_url()?>/backoffice/assets/js/waves.min.js"></script>

        <!-- App js -->
        <script src="<?= base_url()?>/backoffice/assets/js/app.js"></script>
        
    </body>

</html>