<?php include "include/head.php";
 include("include/password_change.php");

 $get_user = "select * from users where token = '$_SESSION[token]'";
 $run_user = mysqli_query($connect,$get_user);
 $row_user = mysqli_fetch_array($run_user);

$password3 = $row_user['password_user'];
$id_no2 = $row_user['id_no'];
?>

  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">
<h1 class="bounceInDown wow">Account <span>Settings</span></h1>
          </div>
        </div>
      </div>
    </section>
        </header>	

<main class="main_main">	

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<?php include "include/nav.php";?>


<div class="accwrapper">
	


<div class="wrapperTop">
	
<div class="inside_wrap myaccount">
<div class="container">
<div class="member-container">






<div class="container">

<div class="row">
                            <div class="col-lg-12">
                                <h3>Edit Password</h3>
                            </div>
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <?php echo"$success";?>
                  
                 <div class="card">
                       <div class="card-body">
                       <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-row">
                       
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Old Password</label>
                                <input type="text" class="form-control" id="inputEmail4"  value=' <?php echo"$password3";?>'readonly >
                                </div>
                                <?php echo"$password_err";?>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">New Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="New Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-row">
                        
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Confirm Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Confirm Password" name="password2" required >
                                </div>
                            
                                <input type="hidden" name = "id" value="<?php echo"$id_no2";?>">
                                <button type="submit" class="btn btn-primary">Edit Password</button>
                            </div>
                            
                            
                            
                            </form>
</div>
</form>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
 </main>  
  
<?php include "include/foot.php";?>