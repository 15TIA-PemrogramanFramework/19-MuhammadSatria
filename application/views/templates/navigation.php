<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                
                <img src="assets/img/logo.png"> 
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('barang') ?>">
                        <i class="fa fa-desktop" aria-hidden="true"></i>
                        <p>Data Barang</p>
                    </a>
                </li>
                <?php 
                $status = $this->session->userdata('status');
                if($status == 'admin'){
                    ?>
                                <li>
                    <a href="<?php echo site_url('karyawan') ?>">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <p>Data Karyawan</p>
                    </a>
                </li> <?php } ?>
                
                <li>
                    <a href="<?php echo site_url('supplier') ?>">
                       <i class="fa fa-building" aria-hidden="true"></i>
                        <p>Data Supplier</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('penjualan') ?>">
                       <i class="fa fa-book" aria-hidden="true"></i>
                        <p>Data Penjualan</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('kerusakan') ?>">
                       <i class="fa fa-cogs" aria-hidden="true"></i>
                        <p>Jenis Kerusakan</p>
                    </a>
                </li>

                <li>
                    <a href="<?php echo site_url('perbaikan') ?>">
                       <i class="fa fa-wrench" aria-hidden="true"></i>
                        <p>Perbaikan</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                <div class="pull-right">
                  <a href="<?php echo site_url('login/logout'); ?>" class="btn btn-danger btn-flat"><i class="fa fa-sign-out fa-fw"></i>Keluar</a>
                </div>
                        
                    </ul>

                </div>
            </div>