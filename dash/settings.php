<?php include "include/head.php";
 include("include/profile_change.php");

 $get_user = "select * from users where token = '$_SESSION[token]'";
 $run_user = mysqli_query($connect,$get_user);
 $row_user = mysqli_fetch_array($run_user);

 $first_name2 = $row_user['first_name'];
 $last_name2 = $row_user['last_name'];
 $email2= $row_user['email'];
 $wallet2 = $row_user['wallet'];
 $username2 = $row_user['username'];
 $country2 = $row_user['country'];

 $id_no2 = $row_user['id_no'];
 $referal_code2 = $row_user['promo_code'];
 $date2 = $row_user['date'];
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
                                <h3>Edit Profile</h3>
                            </div>
                            <div class="col-lg-12">
                            <div class="col-lg-12">
                            <?php echo"$success";?>
                  
                 <div class="card">
                       <div class="card-body">
                       <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputPassword4">Country</label>
                                <select name="country" id="country" class="form-control" disabled>
                       <option><?php echo"$country2";?></option>
                       </select>
                                </div>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Date of Registration</label>
                                <input type="date" class="form-control" id="inputPassword4" placeholder="<?php echo"$date2";?>"  value="<?php echo"$date2";?>" disabled>
                       <option><?php echo"$country2";?></option>
                       </select>
                                </div>
                            <?php echo"$first_name_err";?>
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">First Name</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="<?php echo"$first_name2";?>" value=' <?php echo"$first_name2";?>'name ="first_name" >
                                </div>
                                <?php echo"$last_name_err";?>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="<?php echo"$last_name2";?>" name="last_name" value='<?php echo"$last_name2";?>' >
                                </div>
                            </div>
                            <div class="form-row">
                            <?php echo"$email_err";?>
                                <div class="form-group col-md-12">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="<?php echo"$email2";?>" name="email" value='<?php echo"$email2";?>'>
                                </div>
                                
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">bitcoin Address</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="<?php echo"$wallet2";?>" name="wallet"value="<?php echo"$wallet2";?>">
                                </div>
                                <?php echo"$username_err";?>
                                <div class="form-group col-md-12">
                                <label for="inputPassword4">Username</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="<?php echo"$username2";?>" name="username" value="<?php echo"$username2";?>">
                                </div>
                            
                            
                                <input type="hidden" name = "id" value="<?php echo"$id_no2";?>">
                                <button type="submit" class="btn btn-primary">Edit Profile</button>
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