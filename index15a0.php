<?php include "include/head.php";?>
<?php include "include/contact_form.php";?>
  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">


              <h1 class="bounceInDown wow"><span>Support</span> Center</h1>
          </div>
        </div>
      </div>
    </section>
        </header>	
	
 <main class="main_main">	




<section class="investorwrap supportformwrap">
        <div class="container">
	
  <div class="row">
	  
    	  <div class="col-lg-4 col-md-4 col-sm-12">
			<div class="contact_box_wrap">
				  <div class="contact_box">
					 <div class="icon"><span><img src="styles/images/email.png" alt=""></span></div> 
					<h2>Our E-mail</h2>
					<p><?php echo"$email_admin1";?></p>
				  </div>
				  <div class="contact_box">
					 <div class="icon"><span><img src="styles/images/telephone.png" alt=""></span></div>  
					<h2>Phone Number</h2>
					<p><?php echo"$phone123";?></p>
				  </div>
				  <div class="contact_box">
					 <div class="icon"><span><img src="styles/images/address.png" alt=""></span></div>  
					<h2>Address</h2>
					<p><?php echo"$location123";?></p>
				  </div>
				  
			</div>
		</div>
	  
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="form-container-support">
        <h3>Send Us a <span>Message</span></h3>
        <p>Get in touch with us any time you need an assistance. We are available 24/7 to answer your queries, fix any technical issues you encounter, and guide you with anything you need.</p>
        <div class="form-content">




        <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


<?php echo"$success";?>
<?php echo"$fail";?> 
<table cellspacing=0 cellpadding=2 border=0>
   <?php echo"$first_name_err";?>
<div class="form-block">
<input type="text" name="first_name" value="" size=30 class=inpts placeholder="Your First Name" required>
</div>
<?php echo"$last_name_err";?>
<div class="form-block">
<input type="text" name="last_name" value="" size=30 class=inpts placeholder="Your Last Name" required>
</div>
<?php echo"$email_err";?>
<div class="form-block">
<input type="text" name="email" value="" size=30 class=inpts placeholder="Your Email" required>
</div>

<div class="form-block">
<input type="text" name="phone" value="" size=30 class=inpts placeholder="Your Phone No" required>
</div>
<?php echo"$subject_err";?>
<div class="form-block">
<input type="text" name="subject" value="" size=30 class=inpts placeholder="Subject" required>
</div>
<?php echo"$message_err";?>
<div class="form-block">
   <textarea name="message" class=inpts cols=45 rows=4 placeholder="Your Message"></textarea>
</div>
<div class="form-block">
   <input type="submit" value="Send" class=sbmt>
</div>
</table>
</form>


          </div>
      </div>
    </div>
    

  
  </div>
</div>

      </section>
 </main>  
  
<?php include "include/foot.php";?>
