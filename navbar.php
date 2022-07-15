<header>
    <!-- Navbar
    ================================================== -->
    <div class="cbp-af-header">
        <div class=" cbp-af-inner">
            <div class="container">
                <div class="row">

                    <div class="span4">
                        <!-- logo -->
                        <div class="logo">
                        <img src="assets/ico/famma.png" alt="Strong" height="%" width="42%">
                        </div>
                        <!-- end logo -->
                    </div>

                        <div class="navbar">
                            <div class="navbar-inner">
                                <nav class="navbar-dark bg-dark">
                                    <ul class="nav topnav">
                                        <li class="dropdown <?php if ($module == 'home') echo 'active'; ?>">
                                            <a href="./">Home</a>
                                        </li>
                                        <li class="<?php if ($module == 'konsultasi') echo 'active'; ?>">
                                            <a href="./?module=konsultasi">Konsultasi</a>
                                        </li>
                                        <?php if ($is_logged_in) : ?>
                                            <li class="dropdown">
                                                <a href="#">Hi, <?= $_SESSION['name'] ?>!</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="modules/konsultasi/session_logout.php">Keluar</a></li>
                                                </ul>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
</header>