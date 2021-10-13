<?php include "include/head.php";?>
<?php include "include/profit.php";?>
 <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <div class="banner_thumb"><img src="styles/images/sliderthumb-min.png" alt=""></div>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="banner_infos">
              <h1 class="bounceInDown wow">make money with <span><?php echo"$site_name3";?></span></h1>
              <h2 class="bounceInDown wow">Get Guaranteed Profit</h2>
              <a href="indexcca3.php?a=signup" class="bounceInDown wow hvr-shadow-radial">Start Now</a> </div>
          </div>
        </div>
      </div>
    </section>
    <?php
    $get_total_invest = "SELECT SUM(amount) AS value_sum FROM investments";
    $run_total_invest = mysqli_query($connect,$get_total_invest);
    $total_invest = mysqli_fetch_assoc($run_total_invest);
    $get_total_withdraw = "SELECT SUM(amount) AS value_sum FROM withdraws";
  $run_total_withdraw = mysqli_query($connect,$get_total_withdraw);
  $total_withdraw = mysqli_fetch_assoc($run_total_withdraw);
  $get_total_users = "SELECT * FROM users";
  $run_total_users = mysqli_query($connect,$get_total_users);
  $total_users = mysqli_num_rows($run_total_users) + 5500;
  $online = mt_rand(1000,$total_users);
  $final1 = $total_invest['value_sum'] + 312000;
  $final2 = $total_withdraw['value_sum'] + 520000;
  
    ?>
    <section class="bannerr_statwrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <div class="statbox fadeInDown wow">
              <div class="icon"><span><img src="styles/images/staticon4-min.png" alt=""></span></div>
              <h4><?php echo"$online";?>+</h4>
              <p>Now Online</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <div class="statbox fadeInDown wow">
              <div class="icon"><span><img src="styles/images/staticon2-min.png" alt=""></span></div>
              <h4><?php echo"$total_users";?></h4>
              <p>Total Accounts</p>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <div class="statbox fadeInDown wow">
              <div class="icon"><span><img src="styles/images/staticon3-min.png" alt=""></span></div>
              <h4>$<?php echo"$final1";?></h4>
              <p>Total Deposited</p>
            </div>
          </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
            <div class="statbox fadeInDown wow">
              <div class="icon"><span><img src="styles/images/staticon1-min.png" alt=""></span></div>
              <h4>$<?php echo"$final2"?></h4>
              <p>Total Withdrawals</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
      </header>	
	
 <main class="main_main">	




 <section class="plan_wrap">
      <div class="container">
        <div class="row">
          <h2 class="zoomIn wow">our <strong>investment</strong> plans</h2>
          <?php
  $get_plan = "select * from plans";
  $run_plan = mysqli_query($connect,$get_plan);
  while($row_plan = mysqli_fetch_array($run_plan)){
      $name = $row_plan['name'];
      $lower = $row_plan['lower_amount'];
      $upper = $row_plan['upper_amount'];
      $percentage = $row_plan['percentage'];
      $day = $row_plan['day'];
      $day = $day * 24;
      echo"
      <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
      <div class='planbox slideInDown wow'>
        <div class='plantop'>
          <div class='percentage'>$percentage<span>%</span></div>
          <div class='plandays'>After $day Hours</div>
        </div>
        <div class='planmid'>
          <div class='icon'><span><img src='styles/images/planicon1-min.png' alt=''></span></div>
          <ul class='minmax'>
            <li>Minimum - $lower USD</li>
            <li>Maximum - $upper USD</li>
          </ul>
        </div>
        <div class='planbottom'><a href='indexc30b.php?a=login' class='hvr-shadow-radial'>deposit now</a></div>
      </div>
    </div>
      ";
  }
  ?>
          
        
        </div>
      

        <div class="content">  
    		
            <div class="calculatorwrap">
                <div class="calculatoricon zoomIn wow"><img src="styles/images/calculatoricon.png" alt="" /></div>
<h3 id = "profit">Calculate your profit returns</h3>        
        <?php echo"$error";?>
        <form class="profit-form row justify-content-center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                    <h6 class="profil-title">Plan</h6>
                    <select class="select-bar" id="changePlan" name = "plan">
                        <option value="select">Choose Plan</option>
                            <?php
                            $get_plan1 = "select * from plans";
                            $run_plan1 = mysqli_query($connect,$get_plan1);
                            while($row_plan1 = mysqli_fetch_array($run_plan1)){
                                $name1 = $row_plan1['name'];
                                $lower1 = $row_plan1['lower_amount'];
                                $upper1 = $row_plan1['upper_amount'];
                                $percentage1 = $row_plan1['percentage'];
                                $day1 = $row_plan1['day'];
                            
                                echo"<option value ='$name1'>$name1($$lower1 - $$upper1)</option>";

                            }
                            $column2 = array();
                            $get_lowest = "select lower_amount from plans";
                            $run_lowest = mysqli_query($connect,$get_lowest);
                            while($column_lowest = mysqli_fetch_array($run_lowest)){
                              $column2[] = $column_lowest[0];
                            }
                            $lowest = min($column2);
                            $column3 = array();
                            $get_higest = "select upper_amount from plans";
                            $run_higest = mysqli_query($connect,$get_higest);
                            while($column_higest = mysqli_fetch_array($run_higest)){
                              $column3[] = $column_higest[0];
                            }
                            $higest = max($column3);


                            ?>
                                            </select>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                    <h6 class="profil-title">Invest Amount</h6>
                    <input type="number" placeholder="$0.00" max="<?php echo"$higest";?>" min="<?php echo"$lowest";?>" class="form-control"
                          name = "invest">
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                    <h6 class="profil-title">Calculate </h6>
                    <button type="submit" class="btn btn-primary" name="check"> Calculate </button>
                 
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                    <h6 class="profil-title">Profit</h6>
                    <input type="text" placeholder="0.00" value="$<?php echo"$profit";?>" class="profit-input" name = "profit" readonly>
                    <code class="period"></code>
                </div>
                <div class="form-group col-sm-6 col-md-4 col-lg-4">
                    <h6 class="profil-title">Returns</h6>
                    <input type="text" placeholder="0.00" value="$<?php echo"$return";?>" class="profit-input" name = "profit" readonly>
                    <code class="period"></code>
                </div>
              
            </form>

    <section class="about_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="aboutinfos">
              <h3 class="slideInDown wow">about <strong><?php echo"$site_name3";?></strong></h3>
              <p class="slideInDown wow">Looking for highest returns on your investments? <?php echo"$site_name3";?> is an automatic online investment platform, part of <?php echo"$site_name3";?>, team of professional traders focusing mainly on Bitcoin and other crypto currencies trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors. Thanks to our company, you can become an investor in the network without any specialist knowledge. You can become a partial shareholder of <?php echo"$site_name3";?>, which we buy with a minimum investment of 0.0025 BTC and start earning Every Hour. Just choose one of the four investment plans depending on the amount you want to invest.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="aboutthumb zoomIn wow"><img src="styles/images/aboutthumb-min.png" alt=""></div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="certificatewrap flipInX wow">
              <div class="certificateinfos">We are here for a long run and we present the true realtime statistics of our platform to all those who are interested in investing with us.</div>
              <div class="certificateactions"></div>
            </div>
          </div>
        </div>
      </div>
    </section>





 <section class="featuresmain_wrap">
      <div class="container">
        <div class="features_wrap">
          <div class="row">
            <h2 class="zoomIn wow"><strong><?php echo"$site_name3";?></strong> features</h2>
            <div class="col-lg-12">
              <div class="featuresboxmain">
                <div class="featuresthumb"><img src="styles/images/featuresmainthumb-min.png" alt=""></div>
                <div class="featuresbox one slideInLeft wow">
                  <div class="featureboxinside">
                    <div class="infos">
                      <h4>24/7 Customer Support </h4>
                      <p>We provide 24/7 customer support through e-mail. Our representatives are always ready to help</p>
                    </div>
                  </div>
                </div>
                <div class="featuresbox two slideInLeft wow">
                  <div class="featureboxinside">
                    <div class="infos">
                      <h4>Comodo ssl </h4>
                      <p>Our website is secured with Comodo SSL that verifies the authenticity of our company.</p>
                    </div>
                  </div>
                </div>
                <div class="featuresbox three slideInRight wow">
                  <div class="featureboxinside">
                    <div class="infos">
                      <h4>Real company </h4>
                      <p>Our company is registered as <?php echo"$site_name3";?> Investment Services LTD</p>
                    </div>
                  </div>
                </div>
                <div class="featuresbox four slideInRight wow">
                  <div class="featureboxinside">
                    <div class="infos">
                      <h4>instant withdrawals </h4>
                      <p>Our withdrawals are all processed instantly after they are requested . Minimum withdrawal is only 0.0005 BTC.</p>
                    </div>
                  </div>
                </div>
                <div class="featuresbox five slideInUp wow">
                  <div class="featureboxinside">
                    <div class="infos">
                      <h4>dedicated server </h4>
                      <p>Dedicated server with the highest level of DDOS protection guarantees that your funds are always safe.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="howitworks_wrap">
          <div class="row">
            <h3 class="zoomIn wow">how it <strong>works</strong></h3>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInDown wow">
                <div class="icon"><span><img src="styles/images/howicon1-min.png" alt=""></span></div>
                <h4>Open an account </h4>
                <p>Click the signup button, fill in the register form. Once you've done that, you'll receive an email  from us, and you're done. You are now an official member of our site!</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInDown wow">
                <div class="icon"><span><img src="styles/images/howicon2-min.png" alt=""></span></div>
                <h4>access MEMBER AREA </h4>
                <p>The next thing would be to familiarize yourself with your account. Explore your account and get a feel of how everything works, such as making deposits, requesting withdrawals, etc.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInDown wow">
                <div class="icon"><span><img src="styles/images/howicon3-min.png" alt=""></span></div>
                <h4>make a deposit </h4>
                <p>Your can do this from the deposit section of your account. There are 4 investment plans ranging from 5%-20% Hourly profit For 24 To 10 Hours depending on the amount of your deposit. </p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInUp wow">
                <div class="icon"><span><img src="styles/images/howicon6-min.png" alt=""></span></div>
                <h4>watch your capital grow </h4>
                <p>Once you made a deposit you can watch your earnings grow. It means you can be anywhere you want to be in the world, and your funds will still be growing in your account.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInUp wow">
                <div class="icon"><span><img src="styles/images/howicon4-min.png" alt=""></span></div>
                <h4>request payment </h4>
                <p>It only takes a few seconds to request payment. All of our withdrawals are instant, and your withdrawal will be sent to the Wallet address you provided during registration.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="howitbox bounceInUp wow">
                <div class="icon"><span><img src="styles/images/howicon5-min.png" alt=""></span></div>
                <h4>refer your friends </h4>
                <p>You don't need an active deposit to take advantage of our referral program. You only need to use your personal affiliate link from your member's area and share it with friends. </p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section>
<section>
<div class="container">
    <h3>Our Mission</h3>
    <div class="row">
        <div class="col-lg-6">
        Our mission is to maximize our clients investments and give them greater returns on their capital with minimal loss. We operate by applying effective principles in disciplined and physiological processes. We buy and sell securities relying on facts and not speculation to purchase high return, predictable investments at significant discounts.


Finally our aim is to utilize our expertise and knowledge which will benefit our clients and the users of our services.

         
        </div>
        <div class="col-lg-6">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yb6825iv0Vk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<br>
</section>
<section>
  <h3>Founders</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mikali Ziro</h4>
    <strong class="card-text">CEO</strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic2.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Christina Dosir</h4>
    <strong class="card-text">Finacial and Investment Analytics</strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tyrell Morein</h4>
    <strong class="card-text">Human Resource Manager</strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
  
            
        </div>
    </div>
    </section>
 <section class="commission_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="referralinfos">
              <h2 class="slideInRight wow">Referral <strong>Commission</strong> </h2>
              <p class="slideInRight wow">Our Referral Commission offers something useful and beneficial for everyone. We are confident that the Referral Commission from <?php echo"$site_name3";?> provides the right path to the career progression ladder, confidently leading to financial prosperity.</p>
              <div class="referralvalues">
                <div class="refvaluebox slideInRight wow">
                  <div class="icon"><span>7<sup>%</sup></span></div>
                  <div class="infos"><span>first</span> level</div>
                </div>
                <div class="refvaluebox slideInRight wow">
                  <div class="icon"><span>5<sup>%</sup></span></div>
                  <div class="infos"><span>second</span> level</div>
                </div>
                <div class="refvaluebox slideInRight wow">
                  <div class="icon"><span>3<sup>%</sup></span></div>
                  <div class="infos"><span>third</span> level</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="referralthumb zoomIn wow"><img src="styles/images/referralthumb-min.png" alt=""></div>
          </div>
        </div>
      </div>
    </section>
    <section>
  <h3>Testimonals</h3>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Joseph Donelow</h4>
    <strong class="card-text"><?php echo"$site_name3";?> changed my life, I used to work in a fast food resteraunt before I decided to invest with this amazing company, my life hasnt been the same since! </strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Jessica Rotu</h4>
    <strong class="card-text">What can i say? <?php echo"$site_name3";?> has impressed me, I have to admit i was sceptical when i first invested but after making huge returns on all my investments I know that <?php echo"$site_name3";?> is the company for me and for you too!</strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
            <div class="col-lg-4">
            <div class="card text-center" >
  <img class="card-img-top" src="images/pic6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sarah Russo</h4>
    <strong class="card-text">I definetly recommend <?php echo"$site_name3";?> to anyone looking to invest some captital for massive returns, they haven't let me down! </strong>
 
  </div>
</div>
<!-- end of card -->
            </div>
        </div>
    </div>
    </section>
	  <div class="calculatorwrap">
          <div class="row">
              <h3>Crypto Performance Charts</h3>
          <script src="https://widgets.coingecko.com/coingecko-coin-compare-chart-widget.js"></script>
<coingecko-coin-compare-chart-widget  coin-ids="bitcoin,ethereum,eos,ripple,litecoin" currency="usd" locale="en"></coingecko-coin-compare-chart-widget>
            <h3 class="zoomIn wow">Live <strong>Statistics</strong></h3>
      
		  <div class="latestContainer">
	<div class="latestInner">
			<div class="latest-row latest-row1">
        
			<ul>
				<li class="title"><h3>Latest deposit</h3></li>
				

				
                <?php
                                $get_deposit = "select * from investment_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit = mysqli_query($connect,$get_deposit);
                                while($row_deposit = mysqli_fetch_array($run_deposit)){
                                  $username = $row_deposit['username'];
                            
                                    

                                    $amount2 = $row_deposit['amount_invest'];

                              
                             
                                    echo"
                                    <li>
                                    <span class='span1'>$username</span>
                                    <span>$$amount2</span>
                        <i><img src='images/48.gif' style='margin-top: 10px;'></i>
                                </li>
                                    ";
                                }
                                ?>
            </ul>
           		</div>

		<div class="latest-row latest-row3">
        			<ul>
				<li class="title"><h3>Latest withdrawals</h3></li>
				
                <?php
                                $get_deposit1 = "select * from withdraw_request where verified = 1 order by rand() DESC limit 0,5  ";
                                $run_deposit1 = mysqli_query($connect,$get_deposit1);
                                while($row_deposit1 = mysqli_fetch_array($run_deposit1)){
                                  $username1 = $row_deposit1['username'];
                            
                                    

                                    $amount21 = $row_deposit1['amount_invest'];

                              
                             
                                    echo"
                                    <li>
                                    <span class='span1'>$username1</span>
                                    <span>$$amount21</span>
                        <i><img src='images/48.gif' style='margin-top: 10px;'></i>
                                </li>
                                    ";
                                }
                                ?>
                </ul>
            		</div>
	</div>
</div>
        
     
      
    </div>
  </div>
</div>


            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="payment_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12"> <span><img src="styles/images/paymenticon1-min.png" alt=""></span> <span><img src="styles/images/paymenticon2-min.png" alt=""></span> <span><img src="styles/images/paymenticon3-min.png" alt=""></span> <span><img src="styles/images/paymenticon4-min.png" alt=""></span> <span><img src="styles/images/paymenticon5-min.png" alt=""></span> <span><img src="styles/images/paymenticon6-min.png" alt=""></span> <span><img src="styles/images/paymenticon7-min.png" alt=""></span> <span><img src="styles/images/paymenticon8-min.png" alt=""></span> </div>
        </div>
      </div>
    </section>




 </main>

<?php include "include/foot.php";?>
 
