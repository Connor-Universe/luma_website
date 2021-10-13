<?php include "include/head.php";?>
<?php

 $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments WHERE id_no = $id_no";
  $run_total_invest = mysqli_query($connect,$get_total_invest);
  $total_invest = mysqli_fetch_assoc($run_total_invest);
  $get_bonus = "SELECT SUM(amount) AS value_bonus FROM bonus where id_no = $id_no";
$run_bonus = mysqli_query($connect,$get_bonus);
$fetch_bonus = mysqli_fetch_assoc($run_bonus);
$get_referal = "SELECT SUM(amount) AS value_referal FROM referals where id_no = $id_no";
$run_referal = mysqli_query($connect,$get_referal);
$fetch_referal = mysqli_fetch_assoc($run_referal);
$get_funds = "SELECT SUM(amount) AS value_adds FROM add_funds where id_no = $id_no";
$run_funds = mysqli_query($connect,$get_funds);
$fetch_funds = mysqli_fetch_assoc($run_funds);
$final = $fetch_funds['value_adds'] + $fetch_bonus['value_bonus'] + $fetch_referal['value_referal'] + $total_invest['value_sum'];
  $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraw_request WHERE verified = 1 AND id_no =$id_no";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_total_withdraw1 = "SELECT SUM(amount) AS value_sum FROM withdraw_request WHERE verified = 0 AND id_no =$id_no";
  $run_total_withdraw1 = mysqli_query($connect,$get_total_withdraw1);
  $total_withdraw1 = mysqli_fetch_assoc($run_total_withdraw1);
  $get_wallet = "select amount from wallet where id_no = $id_no";
  $run_wallet = mysqli_query($connect,$get_wallet);
  $row_wallet = mysqli_fetch_array($run_wallet);
  $amount = $row_wallet['amount'];



   $get_usersss = "select * from investment_request where id_no = $id_no AND verified = 1 order by id ASC limit 1 ";
 $run_usersss = mysqli_query($connect,$get_usersss);
 $row_usersss = mysqli_fetch_array($run_usersss);
 $amount_usersss = $row_usersss['amount_invest'];
 $get_users = "select * from withdraw_request where id_no = $id_no AND  verified = 1 order by id ASC limit 1 ";
 $run_users = mysqli_query($connect,$get_users);
 $row_users = mysqli_fetch_array($run_users);
 $amount_users = $row_users['amount'];
 if(!isset($total_invest['value_sum'])){
    $total_invest['value_sum'] = 0;
  }
  if(!isset($total_withdraw['value_sum'])){
    $total_withdraw['value_sum'] = 0;
  }
  if(!isset($amount)){
    $amount = 0;
  }
  if(!isset($total_withdraw1['value_sum'])){
    $total_withdraw1['value_sum'] = 0;
  }  if(!isset($amount_usersss)){
    $amount_usersss = 0;
  }if(!isset($amount_users)){
    $amount_users = 0;
  }
 $get_userss ="select * from users where id_no = $id_no";
 $run_userss  = mysqli_query($connect,$get_userss);
  $row_userss = mysqli_fetch_array($run_userss);
 $first_name = $row_userss['first_name'];
 $last_name = $row_userss['last_name'];
 $referal_code1 = $row_userss['promo_code'];

 $get_refer = "select * from users where referal_code = '$referal_code1'";
 $run_refer = mysqli_query($connect,$get_refer);
 ?>
  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

              <h1 class="bounceInDown wow" style="visibility: visible; animation-name: bounceInDown;">My <span>Dashboard</span></h1>

          </div>
        </div>
      </div>
    </div></section>
        </header>	

<main class="main_main">	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="./forex-miners.io_files/material-design-iconic-font.min.css">
<?php include "include/nav.php";?>

<div class="accwrapper">
	


<div class="wrapperTop">
	
<div class="inside_wrap myaccount">
<div class="container">
<div class="member-container">	

  <div class="account-top">
				
				<div class="row">
				  
					<div class="col-lg-8 col-md-8 col-sm-12">
					  	 <div class="admin">Welcome, <?php echo"$username";?>
							<span>Last Access:  from <?php echo"$ip";?> </span>
					  	 </div>
					</div>
					
					 <div class="col-lg-4 col-md-4 col-sm-12">
							
							<div class="account-right">				  
								<div class="accsettings"><a href="settings.php"><i class="zmdi zmdi-edit"></i> Edit Profile</a></div>
								<div class="accsettings acclogout"><a href="?logout"><i class="zmdi zmdi-power"></i> Logout</a></div>
							</div> 	
					</div>
					
					
				</div>  
		</div>


	



<div class="accdetails">

    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="username">
			<p>Account Balance</p>
			<h3>$<b><?php echo"$amount";?></b></h3>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="username username1">
          <p>Registration Date</p>
          <h3><?php echo"$date";?></h3>

        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="username username2">
          <p>IP Address</p>
          <h3><?php echo"$ip";?></h3>
         
        </div>
      </div>
    </div>

</div>



<div class="main_dash">


	<div class="row">
        <div class="bottombanner bottombanner_account">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="bottombannerbox bottombannerbox_account hvr-float-shadow">
               <div class="icon"><span><img src="./forex-miners.io_files/howicon4-min.png" alt=""></span></div>
              <h3 class="bounceIn wow" style="visibility: hidden; animation-name: none;"><span>$<b><?php echo"$final";?></b></span>
				<p>Earned Total</p>
				</h3>
				<a href="deposit.php" class="deposit"><i class="fa fa-arrow-circle-o-right"></i> Make a Deposit</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="bottombannerbox bottombannerbox_account hvr-float-shadow">
             <div class="icon"><span><img src="./forex-miners.io_files/howicon6-min.png" alt=""></span></div>
              <h3 class="bounceIn wow" style="visibility: hidden; animation-name: none;"><span>$<b><?php echo"$total_invest[value_sum]";?></b></span>
				<p>Active Deposit</p>
              </h3>
              <a href="deposit_list.php" class="deposit"><i class="fa fa-arrow-circle-o-right"></i>Deposit List</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="bottombannerbox bottombannerbox_account hvr-float-shadow">
             <div class="icon"><span><img src="./forex-miners.io_files/howicon4-min.png" alt=""></span></div>
              <h3 class="bounceIn wow" style="visibility: hidden; animation-name: none;"><span>$<b><?php echo"$total_withdraw[value_sum]";?></b></span>
					<p>Withdrew Total</p>
              </h3>
              <a href="withdraw.php"><i class="fa fa-arrow-circle-o-right"></i> Request Payment</a>
            </div>
          </div>
        </div>
      </div>
      
      
      <div class="row">
		  <div class="col-lg-12 col-md-12 col-sm-12">
			<div class="refvalue">
				<input id="copyTarget" value="https://lumaexchange.com/indexcca3.php?r=<?php echo"$referal_code";?>" readonly>
				<button id="copyButton" onclick="myFunction()">Copy</button>
			
				
				<span id="msg"></span>
			</div>
			</div>
      </div>



    <div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
            <div class="investbox">

                <div class="infos">
                <h4>$<b><?php echo"$total_invest[value_sum]";?></b></h4>
              </div>
                <div class="principal">Total Deposited</div>
              </div>
          </div>
		
		<div class="col-lg-6 col-md-6 col-sm-12">
            <div class="investbox">

                <div class="infos">
                <h4>$<b><?php echo"$amount_usersss";?></b></h4>
              </div>
                <div class="principal">Last Deposited</div>
              </div>
          </div>

		<div class="col-lg-6 col-md-6 col-sm-12">
            <div class="investbox">

                <div class="infos">
                <h4>$<b><?php echo"$total_withdraw1[value_sum]";?></b></h4>
              </div>
                <div class="principal">Pending Withdrawal</div>
              </div>
          </div>
		
		<div class="col-lg-6 col-md-6 col-sm-12">
            <div class="investbox">

                <div class="infos">
                <h4>$<b><?php echo"$amount_users";?></b></h4>
              </div>
                <div class="principal">Last Withdrawal</div>
              </div>
          </div>
	</div>	
	
		
 
   
  </div>
</div>


</div>

</div>
</div>
</div>






 </main>  
  <script>

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("copyTarget");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}

  </script>
<?php include "include/foot.php";?>