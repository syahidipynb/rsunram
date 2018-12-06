<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="<?= site_url('admin')?>" class=""><i><img src="<?php echo base_url().'assets/images/admin.png';?>" height="45px"></i> </a>
                    </div>
                    
                    <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php echo $_SESSION['data']?></h2>
                            </div>
                        </div>
                    
                    <br/>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                           
            
                            <ul class="nav side-menu">
                                
                                <li><a><i class="fa fa-edit"></i> HOME <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= site_url('admin/asside')?>">Asside</a></li>
                                        <li><a href="<?= site_url('admin/fasilitas')?>">Fasilitas</a></li>
                                        <li><a href="<?= site_url('admin/layanan')?>">Layanan</a></li>
                                        <li><a href="<?= site_url('admin/keunggulan')?>">Keunggulan</a></li>
                                    </ul>
                                </li>
                                
                                <li><a><i class="fa fa-edit"></i> DOKTER <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= site_url('admin/dokterlist')?>">DOKTER LIST</a></li>
                                        <li><a href="<?= site_url('admin/dokter')?>">DOKTER</a></li>
                                        <li><a href="<?= site_url('admin/jadwal_dokter')?>">PENJADWALAN DOKTER</a></li>
                                    </ul>
                                </li>

                                <li><a href="<?= site_url('admin/spesialis')?>"><i class="fa fa-edit"></i> SPESIALIS </a></li>
                                    
                                
                                <li><a href="<?= site_url('admin/poliklinik')?>"><i class="fa fa-edit"></i> POLIKLINIK </a></li>
                                

                                <li><a><i class="fa fa-desktop"></i> BLOG <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="<?= site_url('admin/blogadd')?>">ADD BLOG</a></li>
                                        <li><a href="<?= site_url('admin/bloglist')?>">BLOG LIST</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a  href="<?= site_url('Login/logout')?>" data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                        <a class="user-profile dropdown-toggle" >
                            <h4><?php echo $_SESSION['data']?></h4>
                            <span></span>
                        </a>
                        </li>
                        
                    </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->