<?php include "include/head.php";?>
<?php

include("../include/config.php");
if(!isset($_SESSION['reference_id']) AND !isset($_SESSION['token'])){
    header("location:../indexc30b.php");
}elseif(isset($_SESSION['reference_id']) AND !isset($_SESSION['token'])){
    header("location:../indexc30b.php");
}else{
$get_invoice = "select * from investment_request where reference_id = $_SESSION[reference_id]";
$run_invoice = mysqli_query($connect, $get_invoice);
$row_invoice = mysqli_fetch_array($run_invoice);

$first_name = $row_invoice['first_name'];
$last_name = $row_invoice['last_name'];
$plan = $row_invoice['plan'];
$amount = $row_invoice['amount_invest'];
$btc = $row_invoice['btc'];
$reference = $_SESSION['reference_id'];
$coin = $row_invoice['coin'];
$get_plan = "select * from plans where name = '$plan'";
$run_plan = mysqli_query($connect,$get_plan);
$row_plan = mysqli_fetch_array($run_plan);
$percentage = $row_plan['percentage'];
$day = $row_plan['day'];
$day = $day * 24;

$get_krypto = "select * from crypto_wallet where name = '$coin'";
$run_krypto = mysqli_query($connect,$get_krypto);
$row_krypto = mysqli_fetch_array($run_krypto);
$coin1 = $row_krypto['abb'];
$wallet =$row_krypto['address'];
}
?>

  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

              <h1 class="bounceInDown wow" style="visibility: visible; animation-name: bounceInDown;">Deposit <span>Confirmation</span></h1>

          </div>
        </div>
      </div>
    </div></section>
        </header>	

<main class="main_main">	

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<?php include "include/nav.php";?>


<div class="accwrapper">
	


<div class="wrapperTop">
	
<div class="inside_wrap myaccount">
<div class="container">
<div class="member-container">
 <div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
<div class="row">


			<div class="investbox">

<table cellspacing="0" cellpadding="2" class="form deposit_confirm">
<tbody><tr>
 <th>Plan:</th>
 <td><?php echo"$plan";?></td>
 <td rowspan="6"><img id="coin_payment_image" src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=bitcoin:14M7pz24JRspQefqwRCqvysV6XsBp6MGgK?amount=0.00017229"></td>
</tr>
<tr>
 <th>Profit:</th>
 <td><?php echo"$percentage";?>% after <?php echo"$day";?> hours</td>
</tr>
<tr>
 <th>Principal Return:</th>
 <td>No (included in profit)</td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
Not available </td>
</tr>
 

<tr>
 <th>Credit Amount:</th>
 <td>$<?php echo"$amount";?></td>
</tr>
<tr>
 <th>Deposit Fee:</th>
 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>$<?php echo"$amount";?></td>
</tr>
<tr>
 <th><?php echo"$coin1";?> Debit Amount:</th>
 <td><?php echo"$btc";?></td>
</tr>
</tbody></table>

<div class="btc_form btc1" id="btc_form">Please send exactly <b><?php echo"$btc $coin1";?></b> to <i><a href=""><?php echo"$wallet";?></a></i><br></div><div id="placeforstatus">    <b>Order status:</b> Waiting for payment<br>     </div><iframe width="1" height="1" frameborder="0" id="deposit_result_div" src="cid:frame-3DED4073BEA151F2DCCF703D40D23968@mhtml.blink"></iframe>
 </div>
</div>

</div>
</div>
</div>
</div>
</div>


 </div></div>
 </main>  
  
<?php include "include/foot.php";?>