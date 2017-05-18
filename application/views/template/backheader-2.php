<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>
            Cloud STORE 1.0 | cloudstore.esy.es
        </title>
        <!-- tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- bootstrap 3.3.4-->
        <?php echo link_tag('bootstrap/css/bootstrap.min.css'); ?>
        <!-- font awesome icons-->
        <?php echo link_tag('bootstrap/css/font-awesome.min.css'); ?>
        <!-- ionicons-->
        <?php echo link_tag('bootstrap/css/ionicons.min.css'); ?>
        <!--Theme style-->
        <?php echo link_tag('dist/css/AdminLTE.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('dist/css/skins/skin-blue.min.css'); ?>
        <!--Theme skin -->
        <?php echo link_tag('plugins/datatables/dataTables.bootstrap.css'); ?>
        <!--My Custom-->
        <?php echo link_tag('dist/css/mycustom.css'); ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 2.1.4 -->
        <script src="<?php echo base_url(); ?>plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript">
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js" type="text/javascript">
        </script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>dist/js/app.min.js" type="text/javascript">
        </script>
        <script src="<?php echo base_url(); ?>cartjs/cart.js" type="text/javascript">
        </script>
        <script src="<?php echo base_url(); ?>cartjs/rivets-cart.min.js" type="text/javascript">
        </script>
        <script src="<?php echo base_url(); ?>cartjs/rivets-cart.js" type="text/javascript">
        </script>
        <script src="<?php echo base_url(); ?>cartjs/cart.min.js" type="text/javascript">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shopify-cartjs/0.4.1/cart.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/shopify-cartjs/0.4.1/rivets-cart.min.js"></script>
    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">
            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="<?php base_url(); ?>" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini">
                        <b>
                            N
                        </b>BU
                    </span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg">
                        <b>
                            Cloud
                        </b>Store
                    </span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">
                            Toggle navigation
                        </span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <?php if($this->session->userdata('login_id') != NULL) { ?>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->
                                    <img src="<?php echo base_url() . 'pictures/user_' . $this->session->userdata('img');?>" class="user-image" alt="User Image" />
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs">
                                        <?php echo $this->session->userdata('firstname') ?> <?php echo $this->session->userdata('lastname') ?>
                                    </span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">
                                        <img src="<?php echo base_url() . 'pictures/user_' . $this->session->userdata('img');?>" class="img-circle" alt="User Image" />
                                        <p>
                                            <?php echo $this->session->userdata('username'); ?>
                                            <small>
                                               stocker2.esy.es
                                            </small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="<?php echo base_url('user/edit/'.$this->session->userdata('login_id')); ?>" class="btn btn-default btn-flat">
                                                Profile
                                            </a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?php echo base_url('user/logout'); ?>" class="btn btn-default btn-flat">
                                                Sign out
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <?php } ?>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                      <?php if($this->session->userdata('login_id') != NULL) { ?>
                        <div class="pull-left image">
                            <img src="<?php echo base_url() . 'pictures/user_' . $this->session->userdata('img');?>" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>
                                <?php echo $this->session->userdata('firstname') ?> <?php echo $this->session->userdata('lastname') ?>
                            </p>
                            <!-- Status -->
                            <a href="#">
                                <i class="fa fa-circle text-success">
                                </i>Online
                            </a>
                            <a href="<?php echo base_url();?>dashboard/logout">
                                <i class="fa fa-sign-out">
                                </i>Log Out
                            </a>
                        </div>
                        <?php } else{ ?>
                          <div class="pull-left image">
                              <img src="<?php echo base_url() . 'pictures/user.jpg'; ?>" class="img-circle" alt="User Image" />
                          </div>
                          <div class="pull-left info">
                            <p>Guest</p>
                            <a href="#">
                                <i class="fa fa-circle text-success">
                                </i>Online
                            </a>
                            <a href="<?php echo base_url();?>user/login">
                                <i class="fa fa-sign-in">
                                </i>Login
                            </a>
                          </div>
                          <?php } ?>
                    </div>

                    <!-- search form (Optional) -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..." />
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                                    <i class="fa fa-search">
                                    </i>
                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu">
                        <li class="header">
                            MENU
                        </li>
                        <!-- Optionally, you can add icons to the links -->
                        <?php if($this->session->userdata('login_id') != NULL) { ?>
                        <li class="<?php echo activate_menu('receipt'); ?>">
                            <a href="<?php echo base_url('receipt'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    รับสินค้าเข้าคลัง
                                </span>
                            </a>
                        </li>
                        <li class="<?php echo activate_menu('itemtype'); ?>">
                            <a href="<?php echo base_url('itemtype'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    จัดการประเภทสินค้า
                                </span>
                            </a>
                        </li>
                        
                        <li class="<?php echo activate_menu('item'); ?>">
                            <a href="<?php echo base_url('item'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    จัดการสินค้า
                                </span>
                            </a>
                        </li>
                        <li class="<?php echo activate_menu('customer'); ?>">
                            <a href="<?php echo base_url('customer'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    จัดการข้อมูลลูกค้า
                                </span>
                            </a>
                        </li>
                        
                        
                        <!--<li class="<?php echo activate_menu('user'); ?>">
                            <a href="<?php echo base_url('user'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    จัดการผู้ใช้
                                </span>
                            </a>
                        </li> -->
                        
                        
                        <li class="<?php echo activate_menu('openflow'); ?>">
                            <a href="<?php echo base_url('openflow'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                   จัดการรายการสั่งซื้อสินค้า
                                </span>
                            </a>
                        </li>
                        <li class="<?php echo activate_menu('location'); ?>">
                            <a href="<?php echo base_url('location'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    จัดการคลังสินค้า
                                </span>
                            </a>
                        </li>
                        <li class="<?php echo activate_menu('returnflow'); ?>">
                            <a href="<?php echo base_url('returnflow'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    ทำรายการคืนสินค้า
                                </span>
                            </a>
                        </li>
                        <?php } ?>
                        <li class="<?php echo activate_menu('onhandprint'); ?>">
                            <a href="<?php echo base_url('onhandprint'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    รายงานยอดคงเหลือสินค้า
                                </span>
                            </a>
                        </li>
                        <li class="<?php echo activate_menu('flowprint'); ?>">
                            <a href="<?php echo base_url('flowprint'); ?>">
                                <i class="fa fa-link">
                                </i>
                                <span>
                                    รายงานการรับ-สั่งซื้อ-คืน สินค้า
                                </span>
                            </a>
                        </li>
                    </ul><!-- /.sidebar-menu -->
                </section>
                <!-- /.sidebar -->
            </aside>
