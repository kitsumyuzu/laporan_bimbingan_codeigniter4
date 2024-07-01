<!-- Wrapper -->

    <div class="wrapper">

        <!-- Pre-loader screen -->

            <div class="preloader flex-column justify-content-center align-items-center">

                <img src="<?= base_url('images') ?>/kmz-icon.ico" alt="kitsumyuzu-logo" class="animation__wobble" height="60" width="60">

            </div>
            
    </div>

    <!-- Navigation Bar -->

        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Right Navigation Bar links -->

                <ul class="navbar-nav ml-auto">

                    <!-- Navigation search -->

                        <li class="nav-item">

                            <a href="#" class="nav-link" data-widget="navbar-search" role="button">
                                <i class="fas fa-search"></i>
                            </a>

                            <div class="navbar-search-block">

                                <form class="form-inline">

                                    <div class="input-group input-group-sm">

                                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">

                                        <div class="input-group-append">

                                            <button class="btn btn-navbar" type="submit">

                                                <i class="fas fa-search"></i>

                                            </button>

                                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">

                                                <i class="fas fa-times"></i>

                                            </button>

                                        </div>

                                    </div>

                                </form>

                            </div>

                        </li>

                    <!-- Messages notification dropdown menu -->

                        <li class="nav-item dropdown">

                            <a class="nav-link" data-toggle="dropdown">

                                <i class="far fa-comments"></i>
                                <span class="badge badge-danger navbar-badge">3</span>

                            </a>

                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                                <a class="dropdown-item">

                                    <!-- Message From : Kyouko -->

                                        <div class="media">

                                            <img src="<?= base_url('images') ?>/hori.png" alt="User Avatar" class="img-size-50 mr-3 img-circle">

                                            <div class="media-body">

                                                <h3 class="dropdown-item-title"> Kyouko
                                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                                </h3>

                                                <p class="text-sm">旦那様 頑張れ</p>
                                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 second(s) ago </p>

                                            </div>

                                        </div>

                                    <!-- Message End -->

                                </a>

                            <div class="dropdown-divider"></div>

                                <a class="dropdown-item">
                                    
                                    <!-- Message From : Mahiru -->

                                    <div class="media">

                                        <img src="<?= base_url('images') ?>/mahiru.png" alt="User Avatar" class="img-size-50 img-circle mr-3">

                                        <div class="media-body">

                                            <h3 class="dropdown-item-title"> Mahiru
                                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                            </h3>

                                            <p class="text-sm">旦那様 頑張れ</p>
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 second(s) ago </p>

                                        </div>

                                    </div>

                                    <!-- Message End -->

                                </a>

                            <div class="dropdown-divider"></div>
                            
                                <a class="dropdown-item">
                                    
                                    <!-- Message From : Keqing -->

                                    <div class="media">

                                        <img src="<?= base_url('images') ?>/keqing.png" alt="User Avatar" class="img-size-50 img-circle mr-3">

                                        <div class="media-body">

                                            <h3 class="dropdown-item-title"> Keqing
                                                <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                            </h3>

                                            <p class="text-sm">旦那様 頑張れ</p>
                                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 1 second(s) ago </p>

                                        </div>

                                    </div>

                                    <!-- Message End -->

                                </a>

                                <div class="dropdown-divider"></div>

                                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>

                            </div>

                        </li>

                    <!-- Full screen -->

                        <li class="nav-item">

                            <a class="nav-link" data-widget="fullscreen" role="button">

                                <i class="fas fa-expand-arrows-alt"></i>

                            </a>

                        </li>

                    <!-- Logout -->

                        <li class="nav-item">

                            <a class="nav-link" href="<?= base_url('/home/logOut') ?>" role="button">
                                    
                                <i class="fas fa-power-off"  style="color: #ff0000"></i>

                            </a>

                        </li>

                </ul>

        </nav>

        <!-- Main sidebar container -->

            <aside class="main-sidebar sidebar-dark-primary elevation-4">

                <!-- Product -->

                    <div class="brand-link">

                        <img src="<?= base_url('images') ?>/kmz-icon.ico" alt="kitsumyuzu-logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">Welcome, <?php echo session() -> get('username') ?></span>
                    
                    </div>

                <!-- Sidebar -->

                    <div class="sidebar">

                    <!-- Search sidebar -->

                        <div class="form-inline">

                            <div class="input-group" data-widget="sidebar-search">

                                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">

                                    <div class="input-group-append">

                                        <button class="btn btn-sidebar">

                                            <i class="fas fa-search fa-fw"></i>

                                        </button>

                                    </div>

                            </div>
                            
                            <div class="sidebar-search-results">

                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        
                                        <div class="search-path"></div>

                                    </a>

                                </div>

                            </div>

                        </div>

                    <!-- Sidebar menu -->

                        <nav class="mt-2">

                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                                <!-- Dashboard menu -->

                                    <li class="nav-item menu-collapse">
                                        
                                        <div class="nav-link active" style="cursor: pointer;">

                                            <i class="nav-icon fas fa-home"></i>
                                            <p>Home<i class="right fas fa-angle-left"></i></p>

                                        </div>

                                        <ul class="nav nav-treeview">

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/report_cards') ?>" class="nav-link">
                                            
                                                    <i class="nav-icon fas fa-grip-lines-vertical" style="color: #00FF00;"></i>
                                                    <p>Report Cards</p>

                                                </a>

                                            </li>

                                        </ul>

                                    </li>

                                    <?php

                                        if (in_array(session() -> get('ranks'), [1])) {

                                    ?>

                                        <li class="nav-header"> Account </li>

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/account') ?>" class="nav-link">
                                                    
                                                    <i class="nav-icon fas fa-user"></i>
                                                    <p>Account</p>

                                                </a>

                                            </li>

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/teacher') ?>" class="nav-link">
                                                
                                                    <i class="nav-icon fas fa-person-chalkboard"></i>
                                                    <p>Teacher</p>

                                                </a>
                                                
                                            </li>

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/student') ?>" class="nav-link">
                                                
                                                    <i class="nav-icon fas fa-graduation-cap"></i>
                                                    <p>Student</p>

                                                </a>
                                                
                                            </li>

                                    <?php

                                        } else if (in_array(session() -> get('ranks'), [2, 3, 4])) {

                                    ?>

                                        <li class="nav-header"> Account </li>

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/teacher') ?>" class="nav-link">
                                                
                                                    <i class="nav-icon fas fa-person-chalkboard"></i>
                                                    <p>Teacher</p>

                                                </a>
                                                
                                            </li>

                                            <li class="nav-item">

                                                <a href="<?= base_url('/home/student') ?>" class="nav-link">
                                                
                                                    <i class="nav-icon fas fa-graduation-cap"></i>
                                                    <p>Student</p>

                                                </a>
                                                
                                            </li>

                                    <?php

                                        }

                                    ?>

                                <!-- Menu end -->
                                        
                            </ul>

                        </nav>
                    
                    </div>
                
            </aside>