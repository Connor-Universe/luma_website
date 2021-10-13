<?php include "include/head.php";
if(!isset($_SESSION['reference_id']) AND !isset($_SESSION['token'])){
  header("location:../indexc30b.php");
}elseif(isset($_SESSION['reference_id']) AND !isset($_SESSION['token'])){
  header("location:../indexc30b.php");
}else{
$get_invoice = "select * from withdraw_request where reference_no ='$_SESSION[reference_no]'";
$run_invoice = mysqli_query($connect, $get_invoice);
$row_invoice = mysqli_fetch_array($run_invoice);
$first_name = $row_invoice['first_name'];
$last_name = $row_invoice['last_name'];
$wallet = $row_invoice['wallet'];
$amount = $row_invoice['amount'];
$btc = $row_invoice['btc'];
$coin = $row_invoice['coin'];
$get_krypto = "select * from crypto_wallet where name = '$coin'";
$run_krypto = mysqli_query($connect,$get_krypto);
$row_krypto = mysqli_fetch_array($run_krypto);
$coin1 = $row_krypto['abb'];


$reference = $_SESSION['reference_no'];
$id_no = $_SESSION['id_no'];
}
?>


  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

              <h1 class="bounceInDown wow" style="visibility: visible; animation-name: bounceInDown;">Withdraw <span>Confirmation</span></h1>

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

<table cellspacing="0" cellpadding="2" class="form Withdraw_confirm">
<tbody><tr>
 <th>Name:</th>
 <td><?php echo"$first_name $last_name";?></td>
 <td rowspan="6"><img id="coin_payment_image" src="https://chart.googleapis.com/chart?chs=150x150&amp;cht=qr&amp;chl=bitcoin:14M7pz24JRspQefqwRCqvysV6XsBp6MGgK?amount=0.00017229"></td>
</tr>
<tr>
 <th>Reference Id</th>
 <td><?php echo"$reference";?></td>
</tr>
<tr>
 <th>Id No</th>
 <td><?php echo"$id_no";?></td>
</tr>
<tr>
 <th>Principal Withdraw:</th>
 <td>
Not available </td>
</tr>
 

<tr>
 <th>Credit Amount:</th>
 <td>$<?php echo"$btc";?></td>
</tr>
<tr>
 <th>Withdraw Fee:</th>
 <td>0.00% + $0.00 (min. $0.00 max. $0.00)</td>
</tr>
<tr>
 <th>Debit Amount:</th>
 <td>$<?php echo"$btc";?></td>
</tr>
<tr>
 <th><?php echo"$coin";?> Debit Amount:</th>
 <td>$<?php echo"$btc";?></td>
</tr>
</tbody></table>

<div class="btc_form btc1" id="btc_form">Payment of <b><?php echo"$btc $coin";?></b> will be sent to <i><a href=""><?php echo"$wallet";?></a></i><br></div><div id="placeforstatus">    <b>Order status:</b> Waiting for payment<br>     </div><iframe width="1" height="1" frameborder="0" id="Withdraw_result_div" src="cid:frame-3DED4073BEA151F2DCCF703D40D23968@mhtml.blink"></iframe>
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