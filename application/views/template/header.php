<!DOCTYPE html>
<html lang="en">    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo $pageTitle; ?> | e-KGB - LEni BKD</title>
        <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/icons/favicon.ico') ?>"/>

        <!-- CSS  -->
        <link href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/vendor/font-awesome/css/fontawesome-all.min.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet"/>
        <link href="<?php echo base_url('assets/vendor/datatables/datatables.css'); ?>" rel="stylesheet">        
    </head>
    <body class="sidebar-fixed header-fixed">
        <div class="page-wrapper">
            <nav class="navbar page-header">
                <a href="#" class="btn btn-link sidebar-mobile-toggle d-md-none mr-auto">
                    <i class="fa fa-bars"></i>
                </a>

                <a class="navbar-brand" href="#">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="logo">
                </a>

                <a href="#" class="btn btn-link sidebar-toggle d-md-down-none">
                    <i class="fa fa-bars"></i>
                </a>

                <ul class="navbar-nav ml-auto">                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?php echo base_url('assets/images/noavatar.png'); ?>" class="avatar avatar-sm" alt="logo">
                            <span class="small ml-1 d-md-down-none"><?php echo $this->session->userdata('nama')." ".$this->session->userdata('nama_belakang'); ?></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">                            
                            <a href="<?php echo site_url('auth/logout'); ?>" class="dropdown-item">
                                <i class="fa fa-lock"></i> Keluar
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>