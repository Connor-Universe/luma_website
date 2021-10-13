 

<?php include "include/head.php";
include "include/withdraw_process.php";
$get_crypto = "select * from crypto_wallet";
$run_crypto = mysqli_query($connect,$get_crypto);
$get_wallet = "select amount from wallet where id_no = $id_no";
$run_wallet = mysqli_query($connect,$get_wallet);
$row_wallet = mysqli_fetch_array($run_wallet);
$amount = $row_wallet['amount'];
if($amount <= 0 || !isset($amount)){
    $dis = "disabled";
  }else{
    $dis ="";
  }
  ?>



  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">
<h1 class="bounceInDown wow">Withdraw <span>Funds</span></h1>
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






<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
 Withdraw Amount and Delivery Method:<br>
 
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
		
            <div class="balance-info my_accont">
<table cellspacing=0 cellpadding=2 border=0>
<tr>
 <td>Your account balance ($):</td>
 <td align=right>$<?php echo"$amount";?></td>
</tr>
<tr><td>&nbsp;</td>
 <td align=right>
  <small>
     </small>
 </td>
</tr>
<tr>
 <td>Amount to Spend ($):</td>
 <td align=right>        <input type="number" class="form-control" id="exampleInputEmail1" name="amount"  placeholder="Enter Amount($USD)" min ="<?php echo"1";?>" max ="<?php echo"$amount";?>"<?php echo"$dis";?> required></td>
</tr>
<tr>
 <td>Wallet Address ($):</td>
 <td align=right>        <input type="text" class="form-control" id="exampleInputEmail1" name="wallet"  placeholder="Enter Wallet Addresss" <?php echo"$dis";?> required></td>
</tr>
<tr id="coumpond_block" style="display:none">
 <td>Compounding(%):</td>
 <td align=right>
  <select name="compound" class=inpts id="compound_percents"></select>
 </td>
</tr>

<tr>
  <td colspan=2>
 
      <?php
      
      while($row_crypto = mysqli_fetch_array($run_crypto)){
        $name = $row_crypto['name'];
        $abb = $row_crypto['abb'];
        echo"
        <table cellspacing=0 cellpadding=2 border=0>
        <tr>
   <td><input type='radio' name='coin' value='$abb' required></td>
   <td>Spend funds from $name</td>
  </tr>
    </table>";
    
      } 
       ?>
           
  </td>
</tr>
<tr>
 <td colspan=2><button class="btn btn-success" type="submit" <?php echo"$dis";?>>Proceed</button></td>
</tr></table></div>
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
