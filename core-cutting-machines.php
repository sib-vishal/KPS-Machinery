<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Core Cutting Machines | KPS Machinery</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
</head>

<body onload="createCaptcha();">
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="herSection ">
            <!-- <video autoplay loop muted playsinline>
                <source src="images/banner/banner.mp4" type="video/mp4" />
            </video> -->
            <img class="banner-image" src="images/about/about-banner.jpg" alt="">
            <div class="banenrText">
                <div class="containerFull">
                    <div class="row">
                        <div class=" mx-auto text-center ">
                            <h1
                                class=" large_heading text-uppercase fontHeading text-white letterSpacing-2 fontWeight700">
                                <span>Core Cutting</span> Machines
                            </h1>
                            <h2 class="small_heading text-white mt-4 fontWeight600">Home / <span>Core Cutting Machines
                                </span></h2>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="introduction-about">
            <div class="containerFull position-relative">
                <div class="row">
                    <div class="col-lg-4" data-aos="zoom-in-up">
                        <div class="leftBannerBottom">
                            <!-- <h3> KPS MACHINERY | PRODUCTS</h3> -->
                            <h4 class="heading fontWeight700 fontHeading">Core Cutting Machines </h4>
                            <p class="fontWeight600 fontHeading  mt-3 text_primary">KPS MACHINERY | PRODUCTS</p>
                            <!-- <p class="fontWeight600 fontHeading title mt-2 text_primary"></p> -->
                        </div>

                    </div>
                    <div class="col-lg-8" data-aos="zoom-in-up">
                        <div class="rightBannerBottom">
                            <p class="title fontWeight600">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Tempore obcaecati minima totam tempora esse suscipit repellendus dignissimos
                                consectetur. Ipsa sunt commodi sit a iure quam, similique error velit laboriosam nihil.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt, optio.</p>
                        </div>

                    </div>
                </div>
                <div class="img-box-main">
                    <div class="img-box">
                        <img class="" width="150px" src="images/about/settings.gif" alt="about">
                    </div>
                </div>
            </div>
        </section>
        <!-- machinery sepecial -->
        <section class="machinery ">
            <div class="containerFull">
                <div class="row ">
                    <div class="col-lg-6 machinery_inner_left">
                        <div class="machinery_inner_left_inner">
                            <p class="small_heading fontWeight600 fontHeading  mt-3 text_primary">
                                Standard machines
                            </p>
                            <h3 class="text_secondary mt-2 pb-4 heading fontWeight700 fontHeading"> <span></span>
                                KPS CTL 250
                            </h3>

                            <h4 class="dot_points small_heading text_primary mt-4 mb-3 fontWeight700 fontHeading">
                                <span></span> Configuration
                            </h4>
                            <p>Swing-shear cutting line, with notch moving IN and OUT, fixed Punch, suitable for
                                distribution transformer cores (Step Lap Mitre or Butt-lap), ranging from 50 mm width up
                                to
                                300 mm. Equipped with two in-line magnetic stackers, with easy-offloading by crane or
                                trolley.</p>

                            <h4 class="dot_points small_heading text_primary my-3 fontWeight700 fontHeading">
                                <span></span> Performance Specifications:
                            </h4>
                            <p>Up to 60 pieces per minute, depending on number of tools and configuration.</p>

                            <h4 class="dot_points small_heading text_primary my-3 fontWeight700 fontHeading">
                                <span></span>Features:</h4>
                            <ul>
                                <li>Single Headed Decoiler, with manual expand-and-collapse function</li>
                                <li>Above ground loop control</li>
                                <li>Feeder section with precision closed-loop measurement</li>
                                <li>Electronic jam detection and self-diagnostics</li>
                                <li>Servo controlled tool fire for Punch, V-Notch, and Swing Shear</li>
                                <li>Servo controlled helper feeder for eliminating material slack</li>
                            </ul>

                        </div>



                    </div>
                    <div class="col-lg-6 machinery_inner_right ov">
                        <img class="shadow" src="images/kps-ctl-250/kps-machinery-core-cutting-machines-video-1.jpg"
                            alt="kps-machinery-core-cutting-machines">
                        <div class="hover-effect"></div>
                    </div>


                </div>

            </div>
        </section>



        <?php include 'include/our-clients.php'; ?>
        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>