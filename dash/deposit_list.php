
<?php include "include/head.php";

$get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments WHERE id_no = $id_no";
  $run_total_invest = mysqli_query($connect,$get_total_invest);
  $total_invest = mysqli_fetch_assoc($run_total_invest);
  if($total_invest['value_sum'] == ""){
      $total_invest['value_sum'] = 0;
  }
  
?>

  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

<h1 class="bounceInDown wow">Active <span>Deposits</span></h1>

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
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		
		<div class="detailed-stats-box">
			
			<p>Total Deposited: <span>$<?php echo"$total_invest[value_sum]";?></span></div>
			
		</div>
		
	</div>
	
</div>			

	
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">		
		
            <div class="balance-info my_accont">
            <?php
                           $get_plans = "select * from plans";
                           $run_plans = mysqli_query($connect,$get_plans);
                           while($row_plans = mysqli_fetch_array($run_plans)){
                             $id = $row_plans['id'];
                             $name = $row_plans['name'];
                             $lower = $row_plans['lower_amount'];
                             $upper = $row_plans['upper_amount'];
                             $percentage = $row_plans['percentage'];
                             $day = $row_plans['day'];
                             $day = $day * 24;
                             $get_invest = "select * from investment_request where verified = 1 AND plan = '$name'";
                             $run_invest = mysqli_query($connect,$get_invest);
                             $row_invest = mysqli_num_rows($run_invest);
                             if($row_invest != 0){
                                 $depo = "You have $row_invest deposit(s) for this plan";
                             }else{
                                 $depo = "You have no deposits for this plan";
                             }

                             echo"
                             <table cellspacing=1 cellpadding=2 border=0 width=100% class=line><tr><td class=item>
                             <table cellspacing=1 cellpadding=2 border=0 width=100%><tr>
                              <td colspan=3 align=center><b>$percentage% After $day Hours</b></td>
                             </tr><tr>
                              <td class=inheader>Plan</td>
                              <td class=inheader width=200>Deposit Amount</td>
                              <td class=inheader width=100 nowrap><nobr> Profit (%)</nobr></td>
                             </tr>
                             <tr>
                              <td class=item>$name</td>
                              <td class=item align=right>$$lower - $$upper</td>
                              <td class=item align=right>$percentage</td>
                             </tr>
                             </table>
                             <br>
                             <table cellspacing=1 cellpadding=2 border=0 width=100%><tr>
                              <td colspan=4><b>$depo</b></td>
                             </tr>           
                             </table>
                             <br>
                             </td></tr></table>
                             <br>
                       
                             ";
                           }
                       ?>
  

</td></tr></table>
<br>
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