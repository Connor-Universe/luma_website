<?php include "include/head.php";
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
$get_wallet = "select amount from wallet where id_no = $id_no";
$run_wallet = mysqli_query($connect,$get_wallet);
$row_wallet = mysqli_fetch_array($run_wallet);
$amount = $row_wallet['amount'];

if(!isset($total_invest['value_sum'])){
  $total_invest['value_sum'] = 0;
}
if(!isset($total_withdraw['value_sum'])){
  $total_withdraw['value_sum'] = 0;
}
if(!isset($amount)){
  $amount = 0;
}

 $get_usersss = "select * from investment_request where id_no = $id_no ";
$run_usersss = mysqli_query($connect,$get_usersss);
$get_users = "select * from withdraw_request where id_no = $id_no ";
$run_users = mysqli_query($connect,$get_users);
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
<h1 class="bounceInDown wow">History <span></span></h1>
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



<div class="row">
    <div class="col-lg-12">
      <div class="my_accont balance-info">
<table cellspacing=0 cellpadding=0 border=0 width=100%><tr>
 <td colspan=3>

 </td>
</tr>
<tr>
<div class="row">
                
                <div class="col-lg-12">
                <h3> Transaction History </h3>
                <br>
                <br>
                  <h4>Investment History</h4>
                 <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th>email</th>
            <th>wallet</th>
            <th>plan</th>
            <th>reference Id</th>
            <th>btc/ltc/eth</th>
            <th>country</th>
                <th> status </th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_usersss = mysqli_fetch_array($run_usersss)){
            $id = $row_usersss['id'];
          $email = $row_usersss['email'];
          $wallet = $row_usersss['wallet'];
          $plan = $row_usersss['plan'];
          $reference = $row_usersss['reference_id'];
          $btc = $row_usersss['btc'];
          $country = $row_usersss['country'];
         $id_no = $row_usersss['id_no'];
         $status1 = $row_usersss['verified'];
         if($status1 == 0){
             $statuss = "Pending";
         }else{
             $statuss = "Completed";
         }
          echo"
          <tr>
           <td>$id</td>
           <td>$email</td>
           <td>$wallet</td>
           <td>$plan</td>
           <td>$reference</td>
           <td>$btc</td>
           <td>$country</td>
            <td> $statuss </td>
          </tr>
          ";
        }
        ?>
       
    </tbody>
</table>
                 </div>
                   <div class="col-lg-12">
                   <h4>Withdrawal History</h4>
                   <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>

            <th>wallet</th>
            <th>amount</th>
            <th>reference Id</th>
            <th>btc/ltc/eth</th>
            <th>transaction id</th>
            <th> status </th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_users = mysqli_fetch_array($run_users)){
            $id1 = $row_users['id'];
  
          $wallet1 = $row_users['wallet'];
          $amount = $row_users['amount'];
          $reference1 = $row_users['reference_no'];
          $btc1 = $row_users['btc'];
          $transaction = $row_users['transaction_id'];
  $status1 = $row_users['verified'];
         if($status1 == 0){
             $statuss = "Pending";
         }else{
             $statuss = "Completed";
         }
          echo"
          <tr>
           <td>$id1</td>

           <td>$wallet1</td>
           <td>$amount</td>
           <td>$reference1</td>
           <td>$btc1</td>
           <td>$transaction</td>
           <td> $statuss </td>
     
          </tr>
          ";
        }
        ?>
       
    </tbody>
</table>
                   </div>
                   <div class="col-lg-12">
                   <h4>Referal History</h4>
                   <table class="table">
    <thead>
        <tr>
            <th class="text-center">#</th>

            <th>Name</th>
            <th>email</th>
            <th>country</th>
            <th>wallet</th>
            <th>id_no</th>
           
        </tr>
    </thead>
    <tbody>
    
        <?php
        while($row_refer = mysqli_fetch_array($run_refer)){
            $id_refer = $row_refer['id'];
  
            $wallet_refer = $row_refer['wallet'];
            $id_no_refer= $row_refer['id_no'];
            $first_refer = $row_refer['first_name'];
            $last_refer = $row_refer['last_name'];
            $email_refer = $row_refer['email'];
            $country_refer  = $row_refer['country'];
        if($show_settings == 1){
          echo"
          <tr>
           <td>$id_refer</td>

           <td>$first_refer $last_refer</td>
           <td>$email_refer</td>
           <td>$country_refer</td>
           <td>$wallet_refer</td>
           <td>$id_no_refer</td>
     
          </tr>
          ";
        }else{
          echo"";
        }
        
        }
        ?>
       
    </tbody>
</table>

                 </div>
                <!--end of row -->
            </div>
<br><br>





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
  
<?php include "include/foot.php";?>