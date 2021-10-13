<?php include "include/admin_process.php";?>
<?php include "include/head.php";
if(!isset($_GET['change'])){
    $changed = "";
}else{
    $changed = "<div class='alert alert-info'>
    <strong>LOGINS RESET:</strong> Username: admin <br> Password : admin
  </div>";
}

?>
<br><br><br><br><br><br><br><br><br><br>
<div class="banner_wrap">
  <div class="container">
	  	  <div class="row">
		  
			<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12">
				   <div class="form-container loginpage loginpage-white">
					     <div class="icon"><span><img src="styles/images/howicon2-min.png" alt=""></span></div>
			          <h1>Admin <span>Login</span></h1>
                      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<?php echo"$fail";?>
                                            <?php echo"$username_err";?>
											<?php echo"$changed";?>
<tr>

 <td colspan="2"><input type="text" name="username"  class=inpts size=30 autofocus="autofocus" placeholder="username"></td>
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
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Reset Login Details?</button> 
                          <!-- start of modal -->
        <div  class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="color:darkblue;">Reset Admin Logins</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:red;">Are you sure you want to reset your admin logins?.</p>
      </div>
      <div class="modal-footer">
     
        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
        <a href="include/forgot_password.php" class="btn btn-primary" style="color:white;"  name="forgot">Yes<a>
      </div>
    </div>
  </div>
</div>
                            <!-- end of modal -->
 </div>
					<div class="refbottombutton m-b-40"><a href="index8083.php?a=forgot_password" class="getstarted">Lost your password?</a><span class="spacepipe">|</span><a href="indexcca3.php?a=signup" class="accessmember">Register</a> <span class="spacepipe">|</span><a href="index.php?a=home" class="accessmember">Back to Homepage</a></div>
			</div>
	  </div>
	  



  </div>
</div>

 </main>  
  
<?php include "include/foot.php";?>
