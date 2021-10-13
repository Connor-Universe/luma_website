<?php include "include/login_process.php";?>
<?php include "include/head.php";?>
<br><br><br><br><br><br><br><br><br><br>
<div class="banner_wrap">
  <div class="container">
	  	  <div class="row">
		  
			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12">
				   <div class="form-container loginpage loginpage-white">
					     <div class="icon"><span><img src="styles/images/howicon2-min.png" alt=""></span></div>
			          <h1>Member <span>Login</span></h1>
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<?php echo"$fail";?>
                                            <?php echo"$email_err";?>
<tr>

 <td colspan="2"><input type="email" name="email"  class=inpts size=30 autofocus="autofocus" placeholder="Email"></td>
</tr>
<?php echo"$password_err";?>
<tr>

 <td colspan="2"><input type="password" name="password"  class=inpts size=30 placeholder="Password"></td>
</tr>
<tr>
  <td height="40" valign="middle">
     <input type="submit" value="Login" class=sbmt /></td>

</tr></table>
</form>

 </div>
					<div class="refbottombutton m-b-40"><a href="index8083.php?a=forgot_password" class="getstarted">Lost your password?</a><span class="spacepipe">|</span><a href="indexcca3.php?a=signup" class="accessmember">Register</a> <span class="spacepipe">|</span><a href="index.php?a=home" class="accessmember">Back to Homepage</a></div>
			</div>
	  </div>
	  



  </div>
</div>

 </main>  
  
<?php include "include/foot.php";?>
