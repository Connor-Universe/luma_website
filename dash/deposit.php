<?php include "include/head.php";?>

  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

    
              <h1 class="bounceInDown wow">Make a <span>Deposit</span></h1>

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








<form method="GET" action="payment.php">
 Select a plan:<br>
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

                             echo"
                             <div class='row'>

                             <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>		
                                 
                                     <div class='balance-info my_accont'>
                                   
                         <table cellspacing=1 cellpadding=2 border=0 width=100%><tr>
                          <td colspan=3>
                            
                         	<input type='radio' name='plan' value='$id' required>
                         
                             <b>$percentage% After $day Hours</b></td>
                         </tr><tr>
                          <td class=inheader>Plan</td>
                          <td class=inheader width=200>Spent Amount ($)</td>
                          <td class=inheader width=100 nowrap><nobr> Profit (%)</nobr></td>
                         </tr>
                         <tr>
                          <td class=item>Plan $name</td>
                          <td class=item align=right>$$lower - $$upper</td>
                          <td class=item align=right>$percentage</td>
                         </tr>
                      
                         </table></div>
                       
                             ";
                           }
                       ?>
  
  <button class="btn btn-primary" type="submit">Proceed</button>
</form>
</div> 

</div>
</div>
</div>
</div>
</div>
 </main>  
  
<?php include "include/foot.php";?>