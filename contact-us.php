<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>About | KPS Machinery</title>
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
                                <span>Contact</span> Us
                            </h1>
                            <h2 class="small_heading text-white mt-4 fontWeight600">Home / <span>Contact Us</span></h2>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <section class="introduction-about">
            <div class="containerFull position-relative">
                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in-up">
                        <div class="leftBannerBottom">
                            <h3 class="title fontHeading fontWeight700 letterSpacing-2 text-uppercase">Have Questions?
                            </h3>
                            <h4 class="heading fontWeight700 fontHeading mt-2 text_secondary"> Get in Touch with KPS
                                Machinery Services</h4>
                            <p class="fontWeight600 fontHeading title mt-2 text_primary"></p>
                        </div>

                    </div>
                    <div class="col-lg-6" data-aos="zoom-in-up">
                        <div class="rightBannerBottom">
                            <p class="title fontWeight600">KPS is specialized solely in servicing liquid-filled and dry
                                type transformer manufacturers with turn-key solutions, tailored specifically to the
                                client's specifications and constraints.</p>
                        </div>

                    </div>
                </div>
                <div class="img-box-main">
                    <div class="img-box">
                        <img class="" width="150px" src="images/contact/phone.gif" alt="about">
                    </div>
                </div>
            </div>
        </section>

        <!-- address -->
        <section class="address-details">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="heading fontHeading  text_primary Contact_address ">Address</h3>
                        <div class="box_item">
                            <a href="#">

                                <i class="fa-solid fa-location-dot"></i>
                                Knightbridge Dr. Newton,

                                NC, USA 28658.
                            </a>

                        </div>
                        <h3 class="heading fontHeading  text_primary Contact_address mt-4 ">Online</h3>
                        <div class="box_item">
                            <a href="tel:+1-828-461-5580">

                                <i class="fa-solid fa-phone"></i>
                                +1-828-461-5580
                            </a>
                            <a href="mailto:office@kpsmachinery.com" class="mt-4">

                                <i class="fa-solid fa-envelope"></i>
                                office@kpsmachinery.com
                            </a>
                            <a href="www.kpsmachinery.com" class="mt-4">

                            <i class="fa-solid fa-earth-americas"></i>
                                www.kpsmachinery.com
                            </a>

                        </div>


                    </div>
                    <div class="col-lg-6">
                        <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1515337.0276912963!2d-106.71202549374833!3d42.11512393983071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1718368482395!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

            </div>
        </section>

        <!-- address end -->
        <section class="bgBlue pt-0">
            <div class="container-fluid contact-page">
                <div class="row">
                    <div class="col-lg-6 ps-lg-0" data-aos="zoom-in-up">
                        <div class="leftImg">
                            <picture>
                                <source srcset="images/leftimg.webp" type="image/webp" />
                                <img src="images/leftimg.jpg" />
                            </picture>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in-up">
                        <div class="rightContact">
                            <h4 class="sub_heading fontWeight700 fontHeading">Have Any Question Contact Us</h4>
                            <p class="mt-3">For Business inquiry fill our feedback form our team will help you with in
                                24 hours.</p>
                            <div class="formBlock">
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="hidden" name="hidden">
                                        <input type="text" required="" class="form-control" id="name" name="name"
                                            placeholder="name">
                                        <label for="name">Your name</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="email" required="" class="form-control" id="email" name="email"
                                            placeholder="email">
                                        <label for="email">Email Address</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating mb-2">
                                        <input type="tel" required="" class="form-control" id="phone" name="phone"
                                            placeholder="phone">
                                        <label for="phone">Phone</label>
                                    </div>
                                </div>
                                <div class="formItem">
                                    <div class="form-floating">
                                        <textarea class="form-control textHeight" required="" name="message"
                                            placeholder="Leave a comment here" id="floatingTextarea"
                                            spellcheck="false"></textarea>
                                        <label for="floatingTextarea">Write Message</label>
                                    </div>
                                </div>
                                <div class="formItem mb-0">
                                    <button class="btnTheme">Send Message</button>
                                </div>
                            </div>
                        </div>
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