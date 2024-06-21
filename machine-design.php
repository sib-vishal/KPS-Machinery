<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Machine Design | KPS Machinery</title>
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
                                <span>Machine </span> Design
                            </h1>
                            <h2 class="title text-white mt-4 fontWeight600">Home <i
                                    class="fa-solid fa-angles-right"></i> <span> Machine Design
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
                            <h4 class="heading fontWeight700 fontHeading">MACHINE DESIGN </h4>
                            <p class="fontWeight600 fontHeading  mt-3 text_primary">KPS MACHINERY | SERVICES</p>
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
        <section class="machinery machine-design ">
            <div class="containerFull">
                <div class="row ">
                    <div class="col-lg-6 machinery_inner_left">
                        <div class="machinery_inner_left_inner">
                            <p class="title fontWeight600 fontHeading  mt-3 text_primary">
                                KPS Machinery Services
                            </p>
                            <h3 class="text-white mt-2 pb-4 heading fontWeight700 fontHeading"> <span></span>
                                Machine Design
                            </h3>


                            <p class="mt-4 text-white">
                                At KPS we do other machine design for various special purpose machinery and application
                                requirement.
                            </p>
                            <div class="d-inline-block w-100 mt-4" style="">
                                <a href="#" class="btnHeader" data-fancybox="" data-src="#dialog-content"><i
                                        class="fa-regular fa-envelope icon "></i> &nbsp; Let's
                                    talk now</a> &nbsp;
                                <a href="tel:+1-828-461-5580" class="btnHeader "><i class="fa-solid fa-phone icon"></i>
                                    &nbsp;+1-828-461-5580</a>
                            </div>

                        </div>
                    </div>
                    <!-- <div class="col-lg-6 machinery_inner_right ">
                        <div class="machinery_inner_right_inner shadow rounded-2">

                            <video class="myVideo" loop="" muted="" playsinline=""
                                poster="images/products/winding-machines/winding-machines-video-1.jpg">
                                <source src="images/products/winding-machines/winding-machines-video.mp4"
                                    type="video/mp4">
                            </video>
                        </div>

                    </div> -->


                </div>

            </div>
        </section>



        <!-- products gallery -->

        <!-- <section class="products-gallery" style="background:#f6f6f6">
            <div class="containerFull">

                <p class="small_heading fontWeight600 fontHeading  mt-3 text_primary">KPS Machinery | Wire winding
                    machines</p>
                <h4 class="text_secondary mt-2 pb-4 heading fontWeight700 fontHeading">
                    Videos & Photos
                </h4>
                <div class="products-gallery-grid">
                    <a href="images/products/winding-machines/winding-machines-video.mp4" rel="gallery"
                        data-caption="Wire Winding Machine" data-fancybox="Gallery" class="grid-item shadow">
                        <img class="object-fit-cover w-100"
                            src="images/products/winding-machines/winding-machines-video-1.jpg"
                            alt="winding-machines-video-1.jpg">

                        <div class="item-content ">
                            <div class="w-100">
                                <div class="icon_main">
                                    <div class=" icon ">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                </div>
                                <h4 class="text_primary text-center mt-3 fontWeight600 text-uppercase">
                                    Winding Machines
                                </h4>
                            </div>
                        </div>


                    </a>

                    <a href="images/products/winding-machines/kps-machinery-winding-machines-00.jpg" rel="gallery"
                        data-caption="Wire Winding Machines" data-fancybox="Gallery" class="grid-item shadow">
                        <img class="object-fit-cover w-100"
                            src="images/products/winding-machines/kps-machinery-winding-machines-00.jpg"
                            alt="kps-machinery-winding-machines-00.jpg">

                        <div class="item-content ">
                            <div class="w-100">
                                <div class="icon_main">
                                    <div class=" icon ">
                                        <i class="fa-solid fa-images"></i>
                                    </div>
                                </div>
                                <h4 class="text_primary text-center mt-3 fontWeight600 text-uppercase">
                                    Winding Machines
                                </h4>
                            </div>
                        </div>
                        <div class="d-none">
                            <a data-caption="Wire Winding Machines" rel="gallery" data-fancybox="Gallery"
                                href="images/products/winding-machines/kps-machinery-winding-machines-02.jpg"></a>
                            <a data-caption="Wire Winding Machines" rel="gallery" data-fancybox="Gallery"
                                href="images/products/winding-machines/kps-machinery-winding-machines-03.jpg"></a>
                            <a data-caption="Wire Winding Machines" rel="gallery" data-fancybox="Gallery"
                                href="images/products/winding-machines/kps-machinery-winding-machines-04.jpg"></a>
                            <a data-caption="Wire Winding Machines" rel="gallery" data-fancybox="Gallery"
                                href="images/products/winding-machines/kps-machinery-winding-machines-05.jpg"></a>

                        </div>


                    </a>



                </div>
            </div>
        </section> -->

        <!-- products gallery -->

        <section class="products-gallery stacking-tables-gallery" style="background:#f6f6f6">
            <div class="containerFull">

                <h4 class="text_secondary mt-2  heading fontWeight700 fontHeading">
                    Gallery
                </h4>
                <p class="text fontWeight600 fontHeading mt-2 pb-4  text_primary">
                KPS MACHINERY | MACHINE DESIGN
                </p>
                <div class="products-gallery-grid">


                    <a href="images/services/machine-design/kps-machinery-machine-design-00.jpg" rel="gallery"
                        data-caption="MACHINE DESIGN" data-fancybox="Gallery" class="grid-item shadow">
                        <img class="object-fit-cover w-100"
                            src="images/services/machine-design/kps-machinery-machine-design-00.jpg"
                            alt="kps-machinery-winding-machines-00.jpg">

                        <div class="item-content ">
                            <div class="w-100">
                                <div class="icon_main">
                                    <div class=" icon ">
                                        <i class="fa-solid fa-images"></i>
                                    </div>
                                </div>
                                <h4 class="text_primary text-center mt-3 fontWeight600 text-uppercase">
                                MACHINE DESIGN
                                </h4>
                            </div>
                        </div>
                        <div class="d-none">
                            <a data-caption="MACHINE DESIGN" rel="gallery" data-fancybox="Gallery"
                                href="images/products/stacking-tables/kps-machinery-stacking-tables-00.jpg"></a>
                            <a data-caption="MACHINE DESIGN" rel="gallery" data-fancybox="Gallery"
                                href="images/products/stacking-tables/kps-machinery-stacking-tables-00.jpg"></a>
                            <a data-caption="MACHINE DESIGN" rel="gallery" data-fancybox="Gallery"
                                href="images/products/stacking-tables/kps-machinery-stacking-tables-00.jpg"></a>
                            <a data-caption="MACHINE DESIGN" rel="gallery" data-fancybox="Gallery"
                                href="images/products/stacking-tables/kps-machinery-stacking-tables-00.jpg"></a>

                        </div>


                    </a>



                </div>
            </div>
        </section>

        <div class="our-clients-product">

            <?php include 'include/our-clients.php'; ?>
        </div>

        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>