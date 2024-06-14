<header class="header stricky">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftLogo">
				<a href="index.php">
					<h3 class="heading fontHeading fontWeight700"><span class="fontWeight800 text_primary">KPS</span> Machinery</h3>
				</a>
			</div>
			<div class="mainMenu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="#">Products</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
				</ul>
			</div>
			<a href="#" class="btnHeader" data-fancybox="" data-src="#dialog-content">Request a Quote</a>
		</div>
	</div>
</header>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">&nbsp;</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="innerMenu">
    	
	</div>
	<div class="followUs">
		<h3 class="text fontWeight500">Follow Us</h3>
		<ul class="socialLink">
			<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
	        <li><a href="#"><i class="fab fa-x-twitter"></i></a></li>
	        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
	        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
		</ul>
	</div>
  </div>
</div>

<!-- popup -->

<div class="popup ">
	<div id="dialog-content" style="display:none;">
		<button data-fancybox-close="" class=" text-color1 f-button is-close-btn " title="close">
			<i class="fa-regular fa-rectangle-xmark"></i>
		</button>
		<div class="">
			<form id="popup" action="" method="post">
				<h3 class="fontWeight600 font-Archivo heading">Get a Quote</h3>
				<fieldset> <input placeholder="Name" type="text" tabindex="1" required="" autofocus=""> </fieldset>
				<fieldset> <input placeholder="Email Address" type="email" tabindex="2" required=""> </fieldset>
				<fieldset> <input placeholder="Phone Number" type="tel" tabindex="3" required=""> </fieldset>
				<fieldset> <textarea placeholder="Type your message here..." tabindex="5" required=""></textarea>
				</fieldset>
				<button name="submit" type="submit" id="contactus-submit" data-submit="...Sending"><i id="icon" class=""></i> Send Now</button>
			</form>
		</div>
	</div>

</div>