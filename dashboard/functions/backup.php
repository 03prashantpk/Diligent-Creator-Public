<?php
// Backup codes



function get_user_data($conn)
{
	$sql = mysqli_query($conn, "SELECT * FROM users ");
	$sql_resullt = array();

	while ($row =  mysqli_fetch_assoc($sql)) {
		echo $row['email'] . '<br>';
	}

	return $sql_resullt;
}
//get_user_data($conn);


?>


<section id="prices">

            <div class="container">

                <!-- section title -->
                <h2 class="section-title wow fadeIn">Pricing Plans</h2>

                <div class="spacer" data-height="60"></div>

                <div class="row">

                    <div class="col-md-4 pr-md-0 mt-md-4 mt-0">
                        <!-- price item -->
                        <div class="price-item bg-white rounded shadow-dark text-center">
                            <img src="../user-frontend/images/price-1.svg" alt="Regular" />
                            <h2 class="plan">Basic</h2>
                            <p>A Simple option but powerful to manage your business</p>
                            <p>Email support</p>
                            <h3 class="price"><em>$</em>9<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>

                    <div class="col-md-4 px-md-0 my-4 my-md-0">
                        <!-- price item recommended-->
                        <div class="price-item bg-white rounded shadow-dark text-center best">
                            <span class="badge">Recommended</span>
                            <img src="../user-frontend/images/price-2.svg" alt="Premium" />
                            <h2 class="plan">Premium</h2>
                            <p>Unlimited product including apps integrations and more features</p>
                            <p>Mon-Fri support</p>
                            <h3 class="price"><em>$</em>49<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>

                    <div class="col-md-4 pl-md-0 mt-md-4 mt-0">
                        <!-- price item -->
                        <div class="price-item bg-white rounded shadow-dark text-center">
                            <img src="../user-frontend/images/price-3.svg" alt="Ultimate" />
                            <h2 class="plan">Ultimate</h2>
                            <p>A wise option for large companies and individuals</p>
                            <p>24/7 support</p>
                            <h3 class="price"><em>$</em>99<span>Month</span></h3>
                            <a href="#" class="btn btn-default">Get Started</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>














        <!-- portfolio item -->
        <div class="col-md-4 col-sm-6 grid-item creative design">
                            <a href="#small-dialog" class="work-content">
                                <div class="portfolio-item rounded shadow-dark">
                                    <div class="details">
                                        <span class="term">Creative</span>
                                        <h4 class="title">Guest App Walkthrough Screens</h4>
                                        <span class="more-button"><i class="icon-options"></i></span>
                                    </div>
                                    <div class="thumb">
                                        <img src="../user-frontend/images/works/2.svg" alt="Portfolio-title" />
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                            <div id="small-dialog" class="white-popup zoom-anim-dialog mfp-hide">
                                <img src="../user-frontend/images/single-work.svg" alt="Title" />
                                <h2>Guest App Walkthrough Screens</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam hendrerit nibh in massa semper rutrum. In rhoncus eleifend mi id tempus.</p>
                                <p>Donec consectetur, libero at pretium euismod, nisl felis lobortis urna, id tristique nisl lectus eget ligula.</p>
                                <a href="#" class="btn btn-default">View on Dribbble</a>
                            </div>
                        </div>