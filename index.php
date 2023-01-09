<?php

include "main-function.php";

$sql_query = "SELECT * FROM dev_profile WHERE public='1' ORDER BY RAND() LIMIT 10";
$user = mysqli_query($conn, $sql_query);

$sql_query_usernames = "SELECT * FROM dev_profile WHERE public='1' ORDER BY RAND() LIMIT 7";
$usernames_datalist = mysqli_query($conn, $sql_query_usernames);

$sql_query_snippet = "SELECT * FROM dev_profile WHERE public='1' ORDER BY RAND() LIMIT 18";
$user_snippet = mysqli_query($conn, $sql_query_snippet);

$bg = rand(1, 5);

if ($bg == 1) {
    $bg_url = "https://images.unsplash.com/photo-1592329347810-258afdd206bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=mateus-campos-felipe-ZKJQCWsKmPs-unsplash.jpg";
} else if ($bg == 2) {
    $bg_url = "https://images.unsplash.com/photo-1635830625698-3b9bd74671ca?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=nubelson-fernandes-iE71-TMrrkE-unsplash.jpg";
} else if ($bg == 3) {
    $bg_url = "https://images.unsplash.com/photo-1624377632657-3902bfd35958?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=mohammad-rahmani-d3Ysz1ziusM-unsplash.jpg";
} else if ($bg == 4) {
    $bg_url = "https://images.unsplash.com/photo-1600188769045-bc6026bfc8cd?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=darius-bashar-NcNkCpMlYDk-unsplash.jpg";
} else if ($bg == 5) {
    $bg_url = "https://images.unsplash.com/photo-1618329027137-a520b57c6606?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=onur-binay-O2-EZNGZIyk-unsplash.jpg";
}

$hello_creator_img = rand(1, 5);

if ($hello_creator_img == 1) {
    $hello_creator_img_link = "https://shiplife.org/2020/wp-content/uploads/2020/02/resumebuilding.png";
} else if ($hello_creator_img == 2) {
    $hello_creator_img_link = "https://resumion.com/static/media/builder.a54b992d.svg";
} else if ($hello_creator_img == 3) {
    $hello_creator_img_link = "https://www.greatsampleresume.com/wp-content/themes/resumebaking/img/ats.svg";
} else if ($hello_creator_img == 4) {
    $hello_creator_img_link = "https://cdni.iconscout.com/illustration/premium/thumb/hr-analyzing-candidates-resume-3611324-3022084.png";
} else if ($hello_creator_img == 5) {
    $hello_creator_img_link = "https://cdni.iconscout.com/illustration/premium/thumb/hiring-managers-analyzing-candidates-resume-3611328-3022088.png";
}

?>

<!DOCTYPE html>
<html lang="en">
<?php include "basic/head.php";?>

<body class="index-page bg-gray-200">

    <!-- Navbar -->
    <?php include "basic/navbar.php"?>

    <header class="header-2">
        <div class="page-header min-vh-100 relative" style="background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .6)), url('<?php echo $bg_url; ?>'); background-size: cover; background-position: center; background-attachment:fixed;">
            <!-- <span class="mask bg-gradient-dark opacity-6"></span> -->
            <div class="container">
                <div class="row" id="hide_search_and_title">
                    <div class="col-lg-7 text-center mx-auto">
                        <h1 class="text-white pt-3 mt-n5">Diligent Creators</h1>
                        <p class="lead text-white mt-3">Create A Dynamic Resume Webpage <br /> With Personal Dashboard</p>
                    </div>
                    <div class="row text-center py-2 mt-3">
                        <div class="col-3 mx-auto">
                            <div class="input-group input-group-outline mb-4">
                                <input id="usernmae" style="background-color: #fff;" list="usernames" class="shadow form-control blur" placeholder="Find username" type="text">
                                <datalist id="usernames">
                                    <?php
                                    while ($row = mysqli_fetch_assoc($usernames_datalist)) {
                                        ?> <option value="<?php echo $row['username'] ?>"> <?php
                                    }
                                    ?>

                                </datalist>
                                <button id="search_user" class="shadow bg-gradient-primary" style="background-color: #E91E63; color: #f1f1f1; border: none; border-radius: 0px 8px 8px 0px; width: 80px;" onclick="search_user()">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="pb-6"></div>

        <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="container pb-5">
            <div class="row">
                 <div class="col-lg-12 text-center pb-8 pt-3">
                    <blockquote class=" text-primary" style="font-size: 26px; font-weight: 600;">Your resume says a lot about you, <br> It determines whether you will be called IN for an interview or NOT.</blockquote>
                 </div>

                <div class="col-lg-6 my-auto">
                    <h3 class="mt-5 mt-lg-0">Hello, Creators</h3>
                    <p class="pe-5">We know it is not easy nowadays to keep our Resumes updated all the time. Most of us are busy with our studies or work. That’s why we are here to help you get over this burden. <br>
                        With this platform, you can get your resume website which you can share with your friends or even you can use it on any form as your Portfolio. We provide multiple themes and a contact form which directly deliver user message to your inbox. Also, here you can send and add your friends and knows as a team member.
                        <br><br>We’re eagerly looking for a “Diligent Creator” to work on projects. Join today and create your team.
                        </p>
                        <button type="button" onclick="window.open('dashboard/register','_blank');" class="btn btn-primary w-auto me-1 mb-0">Create My Resume</button>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
                    <img class="vert-move" src="<?php echo $hello_creator_img_link; ?>" style="width: 615px; height: 515px"  alt="">
                </div>
            </div>
        </div>


        <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

        <section hidden class="pb-5 position-relative blur bg-gradient-secondary mx-n3" style="background: linear-gradient(rgba(0, 0, 0, .8), rgba(0, 0, 0, .7)), url('https://images.unsplash.com/photo-1603573608528-62d6902517c4?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=aleksandar-kyng-0I5hk_CvQbY-unsplash.jpg'); background-size: cover; background-position: center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 text-start mb-5 mt-5">
                        <h3 class="text-white z-index-1 position-relative">Meet Unicorns</h3>
                        <p class="text-white opacity-8 mb-0">There’s nothing I really wanted to do in life that I wasn’t able to get good at. That’s my skill.</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                        while ($row = mysqli_fetch_assoc($user)) {
                            ?>
                        <div class="col-lg-6 col-12 pb-4">
                            <div class="card card-profile mt-4">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-12 mt-n5">
                                        <a href="user/<?php echo $row['username'] ?>">
                                            <div class="p-3 pe-md-0">
                                                <img class="w-100 border-radius-md shadow-lg" src="./dashboard/profile_images/<?php echo $row['profile_image']; ?>" alt="unicorns">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-8 col-md-6 col-12 my-auto">
                                        <div class="card-body ps-lg-0">
                                            <h5 class="mb-0"><?php echo $row['fname'] . " " . $row['lname']; ?></h5>
                                            <h6 class="text-info"><?php echo $row['master_skill']; ?></h6>
                                            <p class="mb-0"><?php echo $row['about']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>


        <div class="pb-3"></div>
        <div class="text-center">
            <div class="row text-center py-3 mt-3">
                <div class="col-12">
                    <div class="avatar-group">
                        <?php
                            while ($row = mysqli_fetch_assoc($user_snippet)) {
                                ?>
                            <a href="user/<?php echo $row['username'] ?>" class="avatar avatar-lg rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $row['fname'] . " " . $row['lname']; ?>">
                                <img height="54" alt="Image placeholder" src="./dashboard/profile_images/<?php echo $row['profile_image']; ?>">
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>

            <button class="btn bg-gradient-primary btn-icon w-10" type="button">
                <i class="fas fa-unicorn"></i> More
            </button>
        </div>
        <div class="pb-3"></div>

    </div>

    <div class="pt-8"></div>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="pb-4"></div>

        <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="container pb-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <blockquote class="" style="color: #DF2869; font-size: 26px; font-weight: 600;">Features</blockquote>
                </div>
            </div>
        </div>


        <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="row text-center py-3 mt-3">
            <div class="col-12">

                <button type="button" class="btn btn-warning w-auto me-1  pd-8" style="padding: 20px 30px !important;">Dashboard</button>
                <button type="button" class="btn btn-warning w-auto me-1 mb-0 pd-8" style="padding: 20px 30px !important;">Messages and Notification</button>
                <button type="button" class="btn btn-warning w-auto me-1 " style="padding: 20px 30px !important;">Direct Reply System</button>
                <button type="button" class="btn btn-warning w-auto me-1 mb-0" style="padding: 20px 30px !important;">Multi Themes</button>
                <button type="button" class="btn btn-warning w-auto me-1" style="padding: 20px 30px !important;">Profile Upload</button>
                <br><br>
                <button type="button" class="btn btn-success w-auto me-1 mb-0" style="padding: 20px 30px !important;">Upload Resume or Generate</button>
                <button type="button" class="btn btn-success w-auto me-1 " style="padding: 20px 30px !important;">Add Team Member</button>
                <br><br>
                <button type="button" class="btn btn-info w-auto me-1 mb-0  pd-8" style="padding: 20px 30px !important;">Visitor Notification</button>
                <button type="button" class="btn btn-info w-auto me-1  pd-8" style="padding: 20px 30px !important;">Request New Theme</button>
                <button type="button" class="btn btn-info w-auto me-1 mb-0 " style="padding: 20px 30px !important;">Direct Reply System</button>
                <button type="button" class="btn btn-info w-auto me-1" style="padding: 20px 30px !important;">Profile Recommendation</button>

            </div>
        </div>
        <div class="pb-3"></div>
        <div class="pb-3"></div>

    </div>

    <div class="pt-8"></div>

    <div class="card card-body blur  shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="pb-4"></div>

        <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="container pb-2">
            <div class="row">
                 <div class="col-lg-12 text-center">
                    <blockquote class="" style="color: #111111; font-size: 26px; font-weight: 600;">Dark Theme - Demo</blockquote>
                 </div>
            </div>
        </div>


        <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

        <iframe src="u/admin" frameborder="0" style="height: 763px; border-radius: 12px;">
        </iframe>


        <div class="pb-3"></div>
        <div class="text-center">
            <button class="btn  btn-icon w-15"  style="background-color: #FFB400 !important; color: #fff !important;" type="button">
            Open In New Tab <i class="fas fa-external-link-square"></i>
            </button>
        </div>
        <div class="pb-3"></div>

    </div>


    <div class="pt-8"></div>
    <div class="card card-body blur  shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="pb-4"></div>

        <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="container pb-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <blockquote class="" style="color: #FFD15C; font-size: 26px; font-weight: 600;">Light Theme - Demo</blockquote>
                </div>
            </div>
        </div>


        <!-- -------- END Features w/ icons and text on left & gradient title and text on right -------- -->

        <iframe src="user/admin" frameborder="0" style="height: 763px; border-radius: 12px;">
        </iframe>


        <div class="pb-3"></div>
        <div class="text-center">
            <button class="btn btn-icon w-15" style="background-color: #FF4C60 !important; color: #fff !important;" type="button">
                Open In New Tab <i class="fas fa-external-link-square"></i>
            </button>
        </div>
        <div class="pb-3"></div>

    </div>
    
    <div class="pt-8"></div>
    <div class="card card-body blur  shadow-blur mx-3 mx-md-4 mt-n6">
        <div class="pb-4"></div>

        <!-- -------- START Features w/ icons and text on left & gradient title and text on right -------- -->
        <div class="container pb-2">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <blockquote class="" style="color: #0063E6; font-size: 26px; font-weight: 600;">Pricing</blockquote>
                </div>
            </div>
        </div>


        <section class="pricing py-5">
            <div class="container">
                <div class="row">

                    <!-- Free Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                                <h6 class="card-price text-center">₹0<span class="period">/-</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Theme (Dark + Light) 1 Each</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Receive Unlimited Messages</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Support</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Direct Reply System</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Profile Recommendation </li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Get Messages on Email inbox</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Visit Notification</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Request New Theme</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Without Our Credit</li>
                                </ul>
                                <div class="d-grid">
                                <a href="dashboard/register" class="btn btn-primary text-uppercase">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plus Tier -->
                    <div class="col-lg-4">
                        <div class="card mb-5 mb-lg-0">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                                <h6 class="card-price text-center">₹189<span class="period">/-</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Theme (Dark + Light) 1 Each</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Receive Unlimited Messages</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Support</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Direct Reply System</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></i></span>Profile Recommendation </li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Get Messages on Email inbox</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Visit Notification</li>
                                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Request New Theme</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Without Our Credit</li>
                                </ul>
                                <div class="d-grid">
                                <a href="dashboard/register" class="btn btn-primary text-uppercase">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pro Tier -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-muted text-uppercase text-center">Gold</h5>
                                <h6 class="card-price text-center">₹289<span class="period">/-</span></h6>
                                <hr>
                                <ul class="fa-ul">
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Theme (Dark + Light) 1 Each</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Receive Unlimited Messages</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Support</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span></span>Direct Reply System</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></i></span>Profile Recommendation </li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span></span>Get Messages on Email inbox</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span></span>Visit Notification</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span></span>Request New Theme</li>
                                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Without Our Credit</li>
                                </ul>
                                <div class="d-grid">
                                <a href="dashboard/register" class="btn btn-primary text-uppercase">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <div class="pb-3"></div>
            <p class="text-secondary text-center">Register and pay after login as per your selected plan</p>
        <div class="pb-3"></div>

    </div>
    <?php include "basic/footer.php";?>

</body>

<style>
            body {
        scrollbar-width: thin;
        /* "auto" or "thin" */
        scrollbar-color: #E43270 #75757557;
        /* scroll thumb and track */
    }

    body::-webkit-scrollbar {
        width: 12px;
        /* width of the entire scrollbar */
    }

    body::-webkit-scrollbar-track {
        background: #75757557;
        /* color of the tracking area */
    }

    body::-webkit-scrollbar-thumb {
        background-color: #E43270;
        /* color of the scroll thumb */
        border-radius: 20px;
        /* roundness of the scroll thumb */
        border: 3px solid #E43270;
        /* creates padding around scroll thumb */
    }


    /* Works on Firefox */

    * {
        scrollbar-width: thin;
        scrollbar-color: #E43270 #75757557;
    }


    /* Works on Chrome, Edge, and Safari */

    *::-webkit-scrollbar {
        width: 12px;
    }

    *::-webkit-scrollbar-track {
        background: #75757557;
    }

    *::-webkit-scrollbar-thumb {
        background-color: #E43270;
        border-radius: 20px;
        border: 3px solid #75757557;
    }

    /* Image animationn */
    .vert-move {
        -webkit-animation: mover 6s infinite alternate;
        animation: mover 6s infinite alternate;
    }

    @-webkit-keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-40px);
        }
    }

    @keyframes mover {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-40px);
        }
    }
</style>

<style>section.pricing {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
  border-radius: 12px;
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }

  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>

    <script>
        $(window).scroll(function() {

            if ($(this).scrollTop() > 10) {
                $('#hide_search_and_title').fadeOut(300);
            } else {
                $('#hide_search_and_title').fadeIn(300);
            }
        });
    </script>

</html>