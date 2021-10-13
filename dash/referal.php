
<?php include "include/head.php";
$get_referal = "SELECT SUM(amount) AS value_referal FROM referals where id_no = $id_no";
$run_referal = mysqli_query($connect,$get_referal);
$fetch_referal = mysqli_fetch_assoc($run_referal);
if($fetch_referal['value_referal'] == ""){
    $fetch_referal['value_referal'] = 0;
}

$get_refer = "select * from users where referal_code = '$referal_code'";
$run_refer = mysqli_query($connect,$get_refer);
$row_refer = mysqli_num_rows($run_refer);
if($row_refer == ""){
    $row_refer = 0;
}

?>
  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">
<h1 class="bounceInDown wow">Your <span>Referrals</span></h1>
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

<br>
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="account_topbox">
      <div class="depositbox_mid">
     <div class="icon"><span><img src="./forex-miners.io_files/howicon4-min.png" alt=""></span></div>
        <p>Total Referral Commission</p>
        <h2>$<?php echo"$fetch_referal[value_referal]";?></h2>
      </div>
      <div class="depositbox_bottom">
        <ul>
        <li>Referrals<span><?php echo"$row_refer";?></span></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="account_topbox">
      <div class="depositbox_mid">
<div class="icon"><span><img src="./forex-miners.io_files/howicon4-min.png" alt=""></span></div>
        <p>Referral Link</p>
        <div class="refvalue">
      <input id="copyTarget" value="https://lumaexchange.com/indexcca3?r=<?php echo"$username";?>" readonly> <button id="copyButton" onclick="myFunction()">Copy</button>
<span id="msg"></span>
      </div>
      </div>
      <div class="depositbox_bottom">
        <ul>
         <li>Active Referrals<span><?php echo"$row_refer";?></span></li>
        </ul>
      </div>
    </div>
  </div> </div>
<br>



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
