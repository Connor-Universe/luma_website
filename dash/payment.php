<?php include "include/head.php";?>
<?php
if(!isset($_GET['plan']) AND !isset($_SESSION['token'])){
    echo"    <script>
    setTimeout(function(){
       window.location.href = '../indexc30b.php';
    });
 </script>";
}elseif(isset($_GET['plan']) AND !isset($_SESSION['token'])){
    
    echo"    <script>
    setTimeout(function(){
       window.location.href = '../indexc30b.php';
    });
 </script>";
}elseif(!isset($_GET['plan']) AND isset($_SESSION['token'])){

    echo"    <script>
    setTimeout(function(){
       window.location.href = 'deposit.php';
    });
 </script>";
}else{
 $id = $_GET['plan'] ;
}
$get_plan = "select * from plans where id = '$id'";
$run_plan = mysqli_query($connect, $get_plan);
$row_plan = mysqli_fetch_array($run_plan);
$name = $row_plan['name'];
$lower = $row_plan['lower_amount'];
$upper = $row_plan['upper_amount'];
$percentage = $row_plan['percentage'];
$day = $row_plan['day'];
$_SESSION['name'] = $name;
$get_crypto = "select * from crypto_wallet";
$run_crypto = mysqli_query($connect,$get_crypto);

include("include/convert.php");
$get_wallet = "select amount from wallet where id_no = $id_no";
$run_wallet = mysqli_query($connect,$get_wallet);
$row_wallet = mysqli_fetch_array($run_wallet);
$amount = $row_wallet['amount'];

?>
  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

            <h1 class="bounceInDown wow">Make <span>Payment</span></h1>

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
<div class="my_accont">








<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
 Deposit Amount and Payment Method:<br>
 
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
 <td align=right>        <input type="number" class="form-control" id="exampleInputEmail1" name="amount"  placeholder="Enter Amount($USD)" min ="<?php echo"$lower";?>" max ="<?php echo"$upper";?>" required></td>
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
           <input type="hidden" class="form-control" id = "exmapleInputEmail1" name = "id" value="<?php echo"$_GET[plan]"?>">
  </td>
</tr>
<tr>
 <td colspan=2><button class="btn btn-success" type="submit">Proceed</button></td>
</tr></table></div>
</form>




</div> 

</div>
</div>
</div>
</div>
</div>
 </main>  
  
<?php include "include/foot.php";?>