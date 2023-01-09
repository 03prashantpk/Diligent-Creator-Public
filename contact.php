<!DOCTYPE html>
<html lang="en">

<?php include("basic/head.php");  ?>

<body class="contact-us">
    <!-- Navbar -->
    <?php include("basic/navbar.php");  ?>
    <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
                        <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background: linear-gradient(rgba(0, 0, 0, .3), rgba(0, 0, 0, .6)), url('https://images.unsplash.com/photo-1634500956474-9ebdb17e579d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=stephan-valentin-3H79_lC2qbE-unsplash.jpg'); background-size: cover; background-position: center;" loading="lazy"></div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
                        <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                                <div class="bg-gradient-primary shadow-primary shadow-lg border-radius-lg p-3">
                                    <h3 class="text-white text-center text-primary mb-0">Contact us</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="pb-3">
                                    We're here to help and answer any question you might have. We look forward to hearing from you.
                                </p>
                                <form id="contact-form" method="post" autocomplete="off">
                                    <div class="card-body p-0 my-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Full Name</label>
                                                    <input type="email" class="form-control" placeholder="Full Name">
                                                </div>
                                            </div>
                                            <div class="col-md-6 ps-md-2">
                                                <div class="input-group input-group-static mb-4">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" placeholder="hello@domain.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group mb-0 mt-md-0 mt-4">
                                            <div class="input-group input-group-static mb-4">
                                                <label>How can we help you?</label>
                                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="Describe your problem in at least 250 characters"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->
    <?php include("basic/footer.php");  ?>
</body>

</html>