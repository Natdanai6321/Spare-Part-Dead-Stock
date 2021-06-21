    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-colortoAdmin">
        <!-- Navbar Brand-->
        <a href="admin_Page.php"><img src="images/logore.png" alt="logo" class="logo"></a>
        <div class="grwh"></div>
        <button class="btn btn-link btn-sm order-1 order-lg-0  me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar KMITL-->
        <ul class="navbar-nav ms-auto me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>&nbsp;<?php echo $a_name; ?>&nbsp;</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="bg-swan ">
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-colorside" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav font">
                            <div class="sb-sidenav-menu-heading">Admin</div>

                            <div class="card-navAdmin">
                                <a class="nav-link" href="admin_table_admin.php">
                            <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Admin Table
                             </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_form_add_admin.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Add New Admin
                            </a>
                            </div>

                            <div class="sb-sidenav-menu-heading">Member</div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_table_member.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Member Table
                            </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_form_add_member.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Add New Member
                            </a>
                            </div>

                            <div class="sb-sidenav-menu-heading">Spare Part</div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_table_sparepart.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Spare Part Table
                            </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_form_add_sparepart.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; Add New SparePart
                            </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_table_sparepart_request.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; SparePart Request
                            </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_table_sparepart_Borrowing.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; SparePart Borrowing
                            </a>
                            </div>

                            <div class="card-navAdmin">
                            <a class="nav-link" href="admin_table_history_sparepart.php">
                                <div class="sb-nav-link-icon"></div>
                                <i class="fas fa-angle-right"></i> &nbsp; SparePart History
                            </a>
                            </div>
                        </div>
                    </div>

                    <div class="sb-sidenav-footer">
                        <div class="small">By : IE.Tech</div>
                        KMITL
                    </div>
                </nav>
            </div>