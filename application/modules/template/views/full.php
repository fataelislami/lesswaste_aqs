<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="#SedekahSampahKeAqsyannaAja part of @aqsyanna">
    <meta name="keywords" content="aqsyanna">
    <meta name="author" content="aqsyanna">
    <title>Lesswaste App</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url()?>assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/pages/dashboard-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/pages/card-analytics.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/plugins/tour/tour.min.css">
    <!-- END: Page CSS-->
    <?php if(isset($css)){$this->load->view($css);} ?>

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/style.css">
    <!-- END: Custom CSS-->
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C8VMVN8WN1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-C8VMVN8WN1');
    </script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Lesswaste</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <?php if(isset($sidebar)){$this->load->view($sidebar);} ?>
    </div>


    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                        class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                            class="ficon feather icon-menu"></i></a></li>
                            </ul>

                        </div>
                        <ul class="nav navbar-nav float-right">

                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                        class="ficon feather icon-maximize"></i></a></li>


                            <li class="dropdown dropdown-user nav-item"><a
                                    class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span
                                            class="user-name text-bold-600"><?= $this->session->userdata('name')?></span><span
                                            class="user-status"><?= ($this->session->userdata('role')==1?"Admin":"Lesswaster")?></span>
                                    </div><span><img class="round" src="<?= base_url() ?>assets/avatar.png" alt="avatar"
                                            height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a class="dropdown-item" href="<?= base_url() ?>logout"><i
                                            class="feather icon-power"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->

        <div class="content-wrapper">

            <div class="content-body">
                <?php if(isset($content)){$this->load->view($content);} ?>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">

    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/vendors.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/extensions/tether.min.js"></script>
    <script src="<?= base_url()?>assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url()?>assets/vendors/js/ui/prism.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url()?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url()?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url()?>assets/js/scripts/pages/dashboard.js"></script> <!-- Uncomment ini untuk start tour-->
    <?php if(isset($js)){$this->load->view($js);} ?>
    <script type="text/javascript">
    $(function() {
        var current = window.location.href;
        $('#sidebar li a').each(function() {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href') == current) {
                // alert($this[1]);
                if ($this.parents('.sub-item').length == 1) {
                    $this.parents('.sub-item').addClass('active');
                } else {
                    $this.parents('.nav-item').addClass('active');
                }
            }
        })
    })
    </script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>