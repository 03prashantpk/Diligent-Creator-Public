

<?php

if($page_code != "settings"){
    $hide_buttons_on_navbar = "hidden";
}

if($page_code == "settings"){
    $hide_live_button_on_navbar = "hidden";
}

?>
<!-- USer top bar -->
<div class="card shadow-lg mx-4 background_color">
    <div class="card-body p-3 background_color">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative shadow ">
                    <img src="profile_images/<?php echo $profile_image; ?>" height="70" alt="profile_image" class="w-100 border-radius-lg shadow">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        <?php echo $fname . " " . $lname; ?> <?php echo $hire_status; ?>
                    </h5>
                    <p class="mb-0 font-weight-bold text-sm">
                        <?php echo $master_skill; ?>
                        <br>
                        Status: <?php if($public == 0){echo "<span style='color: red;'>Hidden</span>";} else{echo "<span style='color: green;'>Public</span>";}; ?>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3" <?php echo @$hide_buttons_on_navbar; ?>>
                <div class="nav-wrapper position-relative end-0">
                    <ul class="nav nav-pills nav-fill p-1" role="tablist">
                        <li class="nav-item" onclick="profiles()">
                            <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                <i class="ni ni-satisfied"></i>
                                <span class="ms-2">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item" onclick="messages()" >
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " onclick="messages()" data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-email-83"></i>
                                <span class="ms-2">Messages</span>
                            </a>
                        </li>
                        <li class="nav-item" onclick="settings()">
                            <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                <i class="ni ni-settings-gear-65"></i>
                                <span class="ms-2">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>