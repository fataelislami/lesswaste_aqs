<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Daftar - Lesswaster</title>
    <link rel="apple-touch-icon" href="<?= base_url()?>assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/pages/authentication.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../<?= base_url()?>assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
    class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page"
    data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                        <div class="row m-0" style="display: flex;flex-direction: row;align-items: center;">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                <img src="<?= base_url()?>assets/images/auth_image.jpeg" alt="branding logo">
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Daftar</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Isi data berikut untuk menjadi Lesswaster</p>
                                        <div class="card-content">

                                            <div class="card-body pt-1">

                                                <form action="<?= base_url()?>register" method="post">
                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="name" id="name"
                                                            placeholder="Nama Lengkap" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="name">Nama</label>
                                                    </fieldset>

                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="phone" id="phone"
                                                            placeholder="0897xxxxxx" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-phone"></i>
                                                        </div>
                                                        <label for="phone">No HP</label>
                                                    </fieldset>

                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="email" class="form-control" name="email" id="email"
                                                            placeholder="Email" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-mail"></i>
                                                        </div>
                                                        <label for="email">Email</label>
                                                    </fieldset>

                                                    <fieldset
                                                        class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" class="form-control" name="institute" id="institute"
                                                            placeholder="Instansi" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-tag"></i>
                                                        </div>
                                                        <label for="institute">Instansi</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" class="form-control" name="password"
                                                            id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>

                                                    <a href="<?= base_url()?>login"
                                                        class="btn btn-outline-primary float-left btn-inline">Masuk</a>
                                                    <button type="submit"
                                                        class="btn btn-primary float-right btn-inline">Daftar</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                            <div class="divider">
                                            </div>
                                            <?php if($this->session->flashdata('flashDanger')!=''){?>
                                            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert"
                                                style="display: block;">
                                                <i class="feather icon-info mr-1 align-middle"></i>
                                                <span><?= $this->session->flashdata('flashDanger') ?></span>
                                            </div>
                                            <?php }?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url()?>assets/js/core/app-menu.min.js"></script>
    <script src="<?= base_url()?>assets/js/core/app.min.js"></script>
    <script src="<?= base_url()?>assets/js/scripts/components.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
    $(".alert").fadeTo(3500, 500).slideUp(500, function() {
        $(".alert").slideUp(500);
    });
    </script>

</body>
<!-- END: Body-->

</html>