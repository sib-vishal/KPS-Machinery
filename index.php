<?php $page ='home';?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>KPS Machinery</title>
      <?php include'include/head-links.php';?>
      <meta property="og:url" content="<?php echo $page_url?>">
      <meta property="og:title" content="">
      <meta property="og:description" content="">
      <meta property="og:image" content="images/logo.png">
      <meta name="twitter:card" content="">
      <meta name="twitter:site" content="<?php echo $page_url?>">
      <meta name="twitter:title" content="">
      <meta name="twitter:description" content="">
      <meta name="twitter:image" content="images/logo.png">
   </head>
   <body onload="createCaptcha();">
    <div class="wrapper">
      <?php include'include/header.php';?>
      <div class="herSection">
        <video autoplay loop muted playsinline>
          <source src="images/banner/banner.mp4" type="video/mp4"/>
        </video>
        <div class="banenrText">
          <div class="containerFull">
            <div class="row">
              <div class="col-lg-9">
                <h1 class="large_heading text-uppercase fontHeading text-white letterSpacing-2 fontWeight700"><span>Core</span> Cutting Machines</h1>
                <h2 class="small_heading text-white mt-4 fontWeight600">KPS offers standard or customized core cutting machine configurations.</h2>
                <p class="mt-3 text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type book.</p>
                <div class="mt-4">
                  <a href="#" class="btnBanner">Learn More</a>
                </div>
              </div>
              <div class="col-lg-11">
                <div class="serviceBanner">
                  <ul>
                    <li><a href="#">Core Cutting Machines</a></li>
                    <li><a href="#">Winding Machines</a></li>
                    <li><a href="#">Stacking Tables</a></li>
                    <li><a href="#">Stacking Systems</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="bgGrey">
        <div class="containerFull">
          <div class="row">
            <div class="col-lg-4" data-aos="zoom-in-up">
              <div class="leftBannerBottom">
                <h3 class="heading fontWeight700 fontHeading">Machine Design</h3>
                <p class="fontWeight600 fontHeading title mt-2 text_primary">KPS Machinery Services</p>
              </div>
            </div>
            <div class="col-lg-8" data-aos="zoom-in-up">
              <div class="rightBannerBottom">
                <p class="title fontWeight600">KPS is specialized solely in servicing liquid-filled and dry type transformer manufacturers with turn-key solutions, tailored specifically to the client's specifications and constraints.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      </section>
      <section class="py-0 counter">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 px-lg-0" data-aos="zoom-in-up">
              <div class="leftHomeAbout">
                <picture>
                  <source srcset="images/about-home.webp" type="image/webp"/>
                  <img src="images/about-home.jpg" alt="KPS Machinery">
                </picture>
              </div>
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="zoom-in-up">
              <div class="rightHomeAbout">
                <h4 class="large_heading text_primary fontWeight700 fontHeading"><span class="counter-value"  data-count="38"></span>+</h4>
                <h4 class="title fontHeading fontWeight700 letterSpacing-2 mt-3 text-uppercase">Years of Experience</h4>
                <h3 class="mt-4 heading fontHeading fontWeight700 letterSpacing-2 text_secondary">About KPS Machinery</h3>
                <p class="title fontWeight600 textGrey mt-3">Since 1986, KPS inc. has provided major transformer manufacturers around the world with productive, reliable, and efficient machinery for the production of transformer cores and coils</p>
                <p class="mt-2">KPS is specialized solely in servicing liquid-filled and dry type transformer manufacturers with turn-key solutions, tailored specifically to the client’s specifications and constraints. KPS Machinery is differentiated from competing equipment</p>
                <a href="#" class="btnTheme mt-lg-4">Learn More About Us <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bgSecondary lineDivider">
        <div class="containerFull">
          <div class="row align-items-center">
            <div class="col-lg-5 text-lg-end" data-aos="zoom-in-up">
              <h4 class="heading text-white fontWeight700 fontHeading"><span class="text_primary">20+</span> Global<br/> Locations</h4>
            </div>
            <div class="col-lg-2 px-lg-5 text-center" data-aos="zoom-in-up">
              <picture>
                <source srcset="images/icons/geometric.webp" type="image/webp"/>
                <img src="images/icons/geometric.png" class="img-fluid" />
              </picture>
            </div>
            <div class="col-lg-5" data-aos="zoom-in-up">
              <div class="rightAc">
                <p class="title text-white fontWeight500">Lorem ipsum dolor consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="#" class="btnBanner mt-4"><i class="fa fa-map-marker-alt pe-lg-2"></i> Learn More About Our Location</a>
              </div>
            </div>
          </div>
          <div class="tabsHome tabContent">
            <div class="containerFull">
              <div class="row">
                <div class="col-lg-5" data-aos="zoom-in-up">
                  <div class="tabLink">
                    <ul>
                      <li class="active" data-tab="productivity">Productivity</li>
                      <li data-tab="reliability">Reliability</li>
                      <li data-tab="efficiency">Efficiency</li>
                    </ul>
                  </div>
                  <div class="tabBlock">
                    <div class="tabItem" id="productivity">
                      <p class="fontWeight600">Utilizing advanced servo motion control, high speed optical sensing, and robust components, KPS places the productivity of your machine first and foremost among evaluation criteria.</p>
                      <p class="mt-2 fontWeight600">KPS is specialized solely in servicing liquid-filled and dry type transformer manufacturers with turn-key solutions, tailored specifically to the client's specifications and constraints.</p>
                    </div>
                    <div class="tabItem" id="reliability" style="display: none;">
                      <p class="fontWeight600">Each and every component is selected for optimized life-time, even under harsh conditions.</p>
                      <p class="fontWeight600 mt-2">Sealed bearings, hardened tool surfaces, and sealed control cabinets, are among the features common to all KPS machines, permitting 24/7 operation of our machines.</p>
                      <p class="fontWeight600 mt-2">KPS machines are designed with readily available components, with ease-of-maintenance in mind, for minimized downtime during service.</p>
                    </div>
                    <div class="tabItem" id="efficiency" style="display: none;">
                      <p class="fontWeight600">KPS machines are designed with readily available components, with ease-of-maintenance in mind, for minimized downtime during service.</p>
                      <p class="fontWeight600 mt-2">Decades of global experience in productive assembly processes have enabled features that reduce task cycles, leading to tangible productivity gains. Available online support can assist to address and resolve any production issues.</p>
                      <p class="fontWeight600 mt-2">KPS's structure and business design enables it to be a low cost, ultra-responsive, and innovative machinery supplier for the most demanding transformer manufacturers.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5 offset-lg-2" data-aos="zoom-in-up">
                  <div class="rightImgSer">
                    <picture>
                      <source srcset="images/about-us.webp" type="image/webp"/>
                      <img src="images/about-us.png">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="containerFull">
          <div class="row">
            <div class="col-lg-6 pe-lg-4">
              <div class="itemProject">
                <h3 class="small_heading fontHeading fontWeight600 text_primary">Our Projects</h3>
                <h4 class="heading fontWeight700 fontHeading mt-3">Best Projects with Construction</h4>
                <div class="projectList mt-4">
                  <div class="projectImg">
                    <picture>
                      <source srcset="images/core-cutting-machine.webp" type="image/webp"/>
                      <img src="images/core-cutting-machine.jpg"/>
                    </picture>
                  </div>
                  <div class="projectName">
                    <h2 class="sub_heading text-white fontWeight700 fontHeading">Core Cutting Machine</h2>
                    <p class="my-3 text-white">KPS offers standard or customized core cutting machine configurations.</p>
                    <a href="#" class="btnTheme py-3 mt-2">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 ps-lg-4">
              <div class="itemProject">
                <div class="projectList">
                  <div class="projectImg">
                    <picture>
                      <source srcset="images/winding-machine.webp" type="image/webp"/>
                      <img src="images/winding-machine.jpg"/>
                    </picture>
                  </div>
                  <div class="projectName">
                    <h2 class="sub_heading text-white fontWeight700 fontHeading">Winding Machines</h2>
                    <p class="my-3 text-white">Solid frame welded construction. Single or Multiple Wires. Single or Multiple Coils...</p>
                    <a href="#" class="btnTheme py-3 mt-2">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-lg-5 pe-lg-4">
              <div class="itemProject">
                <div class="projectList">
                  <div class="projectImg">
                    <picture>
                      <source srcset="images/stacking-tables.webp" type="image/webp"/>
                      <img src="images/stacking-tables.jpg"/>
                    </picture>
                  </div>
                  <div class="projectName">
                    <h2 class="sub_heading text-white fontWeight700 fontHeading">Stacking Tables</h2>
                    <p class="my-3 text-white">KPS Stacking tables are available in 1 ton and 5 ton variants.</p>
                    <a href="#" class="btnTheme py-3 mt-2">View Details</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 translateTop mt-lg-5 ps-lg-4">
              <div class="itemProject">
                <div class="projectList">
                  <div class="projectImg">
                    <picture>
                      <source srcset="images/stacking-systems.webp" type="image/webp"/>
                      <img src="images/stacking-systems.jpg"/>
                    </picture>
                  </div>
                  <div class="projectName">
                    <h2 class="sub_heading text-white fontWeight700 fontHeading">Stacking Systems</h2>
                    <p class="my-3 text-white">KPS stacking systems with magnetic belts able to stack with no holes or with holes dropping on pins</p>
                    <a href="#" class="btnTheme py-3 mt-2">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bgBlue">
        <div class="containerFull">
          <div class="row">
            <div class="col-lg-6 pe-lg-4" data-aos="zoom-in-up">
              <div class="leftServ">
                <h3 class="title fontHeading fontWeight600 text_primary">KPS Machinery Sevices</h3>
                <h4 class="heading mt-3 fontWeight700 fontHeading">Retrofit</h4>
                <p class="mt-3">KPS can retrofit your existing machinery to address malfunctions, wear, and control issues.</p>
                <p class="mt-2">There exist many core cutting machines that have a solid foundation and well-built tooling, but they are hindered by slow hydraulic or pneumatic tool firing, and antiquated control systems.</p>
                <p class="mt-2">KPS has overhauled many such machines, by replacing mechanical and electronic components alike, depending on the degree to which the client has wanted to upgrade the performance of the machine.</p>
                <p class="mt-2">Similarly, in the case of winding machines, many machines stand to show substantial improvement in ease-of-use, by replacement of traverse and mandrel motors, as well as wire-guide arms and rollers. Such retrofits are often a means to save a considerable amount of cost versus a new machine.</p>
                <a href="#" class="mt-4 btnTheme">Read more</a>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in-up">
              <div class="rightServ">
                <picture>
                  <source srcset="images/retrofit.webp" type="image/webp"/>
                  <img src="images/retrofit.jpg" />
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bgCallAction">
        <div class="containerFull">
          <h4 data-aos="zoom-in-up" class="title letterSpacing-2 text-center text_primary fontHeading fontWeight700">GET A QUOTE FOR USE</h4>
          <h3 data-aos="zoom-in-up" class="heading fontHeading text-white fontWeight700 text-center mt-4 letterSpacing-2">Are You Prepared to<br/> <span class="text_primary">Get Started?</span> Get a Quote Right Now</h3>
          <div class="text-center" data-aos="zoom-in-up">
            <a href="#" class="btnBanner mt-lg-5">Get Started</a>
          </div>
        </div>
      </section>
      <section>
        <div class="containerFull">
          <h4 class="heading fontWeight700 text-center fontHeading">Faqs</h4>
          <div class="row mt-lg-5">
            <div class="col-lg-7" data-aos="zoom-in-up">
              <div class="leftFaq">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h4 class="title fontHeading fontWeight700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                       <h4 class="title fontHeading fontWeight700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <h4 class="title fontHeading fontWeight700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <h4 class="title fontHeading fontWeight700">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h4>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5" data-aos="zoom-in-up">
              <div class="faqImg">
                <picture>
                  <source srcset="images/kps-machinery-faq.webp" type="image/webp"/>
                  <img src="images/kps-machinery-faq.jpg">
                </picture>
                <div class="d-flex justify-content-end">
                  <div class="callNumber shadow">
                    <h4 class="small_heading fontHeading fontWeight600">For Business Dealing</h4>
                    <a href="tel:+1-828-461-5580" class="heading fontWeight700">+1-828-461-5580</a>
                    <p>Available 9:00 - 7:00 all days.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="bgBlue pt-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 ps-lg-0" data-aos="zoom-in-up">
              <div class="leftImg">
                <picture>
                  <source srcset="images/leftimg.webp" type="image/webp"/>
                  <img src="images/leftimg.jpg"/>
                </picture>
              </div>
            </div>
            <div class="col-lg-6" data-aos="zoom-in-up">
              <div class="rightContact">
                <h4 class="sub_heading fontWeight700 fontHeading">Have Any Question Contact Us</h4>
                <p class="mt-3">For Business inquiry fill our feedback form our team will help you with in 24 hours.</p>
                <div class="formBlock">
                  <div class="formItem">
                    <div class="form-floating mb-2">
                      <input type="hidden" name="hidden">
                      <input type="text" required="" class="form-control" id="name" name="name" placeholder="name">
                      <label for="name">Your name</label>
                    </div>
                  </div>
                  <div class="formItem">
                    <div class="form-floating mb-2">
                      <input type="email" required="" class="form-control" id="email" name="email" placeholder="email">
                      <label for="email">Email Address</label>
                    </div>
                  </div>
                  <div class="formItem">
                    <div class="form-floating mb-2">
                      <input type="tel" required="" class="form-control" id="phone" name="phone" placeholder="phone">
                      <label for="phone">Phone</label>
                    </div>
                  </div>
                  <div class="formItem">
                    <div class="form-floating">
                      <textarea class="form-control textHeight" required="" name="message" placeholder="Leave a comment here" id="floatingTextarea" spellcheck="false"></textarea>
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
      <?php include'include/footer.php';?>
    </div>
    <?php include'include/footer-links.php';?>
  </body>
</html>