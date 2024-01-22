<?php
$session = \Config\Services::session();
?>
<ul class="navbar-nav ml-auto">
    <!-- Messages Dropdown Menu -->
    <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
            <img src="/assets/dist/img/user/<?= $session->photo ?>" alt="User Avatar" width="30" class="mr-3 img-circle">
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <!-- Message Start -->
                <div class="media">
                    <img src="/assets/dist/img/user/<?= $session->photo ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                        <h3 class="dropdown-item-title">
                            <?= $session->nama ?>
                        </h3>
                        <p class="text-sm"><?= $session->nama_level ?></p>
                    </div>
                </div>
                <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="/user/login/logout" class="dropdown-item dropdown-footer">Logout</a>
        </div>
    </li>
</ul>