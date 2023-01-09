<?php
$dahboard_bg = rand(1, 7);
if ($dahboard_bg == 1) {
    $bgImage = "./assets/dashboard/6.jpg";
} else if ($dahboard_bg == 2) {
    $bgImage = "./assets/dashboard/1.jpg";
} else if ($dahboard_bg == 3) {
    $bgImage = "./assets/dashboard/2.jpg";
} else if ($dahboard_bg == 4) {
    $bgImage = "./assets/dashboard/3.jpg";
} else if ($dahboard_bg == 5) {
    $bgImage = "./assets/dashboard/4.jpg";
} else if ($dahboard_bg == 6) {
    $bgImage = "./assets/dashboard/5.jpg";
} else if ($dahboard_bg == 7) {
    $bgImage = "./assets/dashboard/7.jpg";
}

?>

<div class="position-absolute w-100 min-height-400 top-0" style="background-image: url('<?php echo $bgImage; ?>');background-size: cover; background-position: center;">
    <span class="mask bg-dark opacity-5"></span>
</div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 shadow" id="sidenav-main" style="<?php if ($dark == '0') { echo "background-color: #E9F7F7 !important;"; }  ?>">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-9 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" # " target="_blank">
            <img src="https://enally.in/files-manager/assets/Fevicon.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Enally.in</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "dashboard") {  echo "active shadow-lg opacity-10";} ?>" href="../dashboard/">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Manage</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "settings") {  echo "active shadow-lg opacity-10"; } ?>" href="settings">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-settings-gear-65 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "portfolio") {echo "active shadow-lg opacity-10";} ?>" href="portfolio">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-bullet-list-67 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">My Portfolio</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "uploads") {  echo "active shadow-lg opacity-10"; } ?>" href="user-uploads">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">Your Uploads</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "teams") {  echo "active shadow-lg opacity-10"; } ?>" href="teams">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-circle-08 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">Your Team</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page_code == "messages") {  echo "active shadow-lg opacity-10"; } ?>" href="messages">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-chat-round text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">Your Messages</span>
                </a>
            </li>

            <?php
            if ($IsAdmin == 1) {
            ?>
            <li class="nav-item mt-3">
            <hr>
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Superuser Mode - <span class="text-warning">Admin</span></h6>
                
            </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_code == "users_profile") { echo "active shadow-lg opacity-10";  } ?>" href="all_users">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-badge text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 opacity-10">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_code == "user_massage") { echo "active shadow-lg opacity-10";  } ?>" href="messages">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-chat-round text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 opacity-10">Messages</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if ($page_code == "reported_account") { echo "active shadow-lg opacity-10";  } ?>" href="messages">
                        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="ni ni-vector text-dark text-sm opacity-10"></i>
                        </div>
                        <span class="nav-link-text ms-1 opacity-10">Reported Accounts</span>
                    </a>
                </li>
            <?php

            }
            ?>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Websites & Projects - <span class="text-warning">Ads</span></h6>
            </li>
            <li class="nav-item" hidden>
                <a class="nav-link " href="https://enally.in/files-manager/">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">Classroom Bucket</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="https://enally.in/files-manager/myclassbot">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-controller text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1 opacity-10">MyClass Bot</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer mx-3 opacity-10">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto opacity-10" src="./assets/custom/help_desk.png" height="100" alt="sidebar_illustration">
            <div class="card-two text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                </div>
            </div>
        </div>
        <a href="support" class="btn btn-dark btn-sm w-100 mb-3 opacity-10"><i class="fas fa-headset"></i> Support</a>
        <a class="btn btn-warning btn-sm mb-0 w-100 opacity-10" href="premium" type="button" style="background-color: golden !important;"><i class="fas fa-cart-arrow-down"></i> Upgrade to Premium</a>
    </div>
</aside>