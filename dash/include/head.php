<?php
 session_start();
include("../include/config.php");

if(!isset($_SESSION['token']))
{
    // not logged in
    header("location:../indexc30b.php");
    echo"<script>alert('you need to login first! !')</script>";
    exit();
}elseif(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['token']);
    header("location:../indexc30b.php");
    echo"<script>alert('Your are logging out!')</script>";
}
$get_user = "select * from users where token = '$_SESSION[token]'";
 $run_user = mysqli_query($connect,$get_user);
 $row_user = mysqli_fetch_array($run_user);

 $first_name = $row_user['first_name'];
 $last_name = $row_user['last_name'];
 $email = $row_user['email'];
 $wallet = $row_user['wallet'];
 $username = $row_user['username'];
 $country = $row_user['country'];
 $password = $row_user['password_user'];
 $id_no = $row_user['id_no'];
 $referal_code = $row_user['promo_code'];
 $date = $row_user['date'];
 $ip = $row_user['ip'];
?>

<!DOCTYPE html>
<!-- saved from url=(0034)https://forex-miners.io/?a=account -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
		<meta name="viewport" content="width=1280px">
	<title><?php echo"$site_name3";?></title>
	<link rel="icon" href="../images/logo.png">
	<link rel="stylesheet" href="./forex-miners.io_files/bootstrap.min.css">
	<link href="./forex-miners.io_files/css" rel="stylesheet">
	<link href="./forex-miners.io_files/animate.css" rel="stylesheet" type="text/css">
	<link href="./forex-miners.io_files/hover.css" rel="stylesheet" type="text/css">
	<link href="./forex-miners.io_files/custom.css" rel="stylesheet" type="text/css">
	<script src="./forex-miners.io_files/jquery.min.js.download"></script>
	<script src="./forex-miners.io_files/setting2.js.download" type="text/javascript"></script>
	<script src="./forex-miners.io_files/bootstrap.min.js.download"></script>
	<script src="./forex-miners.io_files/wow.min.js.download"></script>
  
  <script type="text/javascript">
  <?php echo"$chat";?>
  </script>
  <script type="text/javascript">
//// Get the CryptoCurrency Information from the API
jQuery.ajax({
	url: "https://min-api.cryptocompare.com/data/pricemultifull",
	data: "fsyms=BTC,ETH,DASH,LTC,XRP,XMR,BCH,XLM&tsyms=USD",
	dataType : 'json',
}).done(function(data) 
{
    // console.log( "BTC : " + data.RAW.BTC.USD.CHANGEPCTDAY + ", ETH : " + data.RAW.ETH.USD.CHANGEPCTDAY + ", DASH : " + data.RAW.DASH.USD.CHANGEPCTDAY + ", LTC : " + data.RAW.LTC.USD.CHANGEPCTDAY + ", XRP : " + data.RAW.XRP.USD.CHANGEPCTDAY );
    //	console.log( "BTC : " + parseFloat(data.RAW.BTC.USD.CHANGEPCTDAY).toFixed(2) + ", ETH : " + parseFloat(data.RAW.ETH.USD.CHANGEPCTDAY).toFixed(2) + ", DASH : " + parseFloat(data.RAW.DASH.USD.CHANGEPCTDAY).toFixed(2) + ", LTC : " + parseFloat(data.RAW.LTC.USD.CHANGEPCTDAY).toFixed(2) + ", XRP : " + parseFloat(data.RAW.XRP.USD.CHANGEPCTDAY).toFixed(2) );

	jQuery(".dashCoin").html('$' + data.RAW.DASH.USD.PRICE);
	jQuery(".ethCoin").html('$' + data.RAW.ETH.USD.PRICE);
	jQuery(".bitCoin").html('$' + data.RAW.BTC.USD.PRICE);
	jQuery(".liteCoin").html('$' + data.RAW.LTC.USD.PRICE);
	jQuery(".xrpCoin").html('$' + data.RAW.XRP.USD.PRICE);
	jQuery(".xmrCoin").html('$' + data.RAW.XMR.USD.PRICE);
	jQuery(".bchCoin").html('$' + data.RAW.BCH.USD.PRICE);
	jQuery(".xlmCoin").html('$' + data.RAW.XLM.USD.PRICE);

	var dash = parseFloat(data.RAW.DASH.USD.CHANGEPCTDAY).toFixed(2);
	var eth  = parseFloat(data.RAW.ETH.USD.CHANGEPCTDAY).toFixed(2);
	var btc = parseFloat(data.RAW.BTC.USD.CHANGEPCTDAY).toFixed(2);
	var usd  = parseFloat(data.RAW.LTC.USD.CHANGEPCTDAY).toFixed(2);
	var xrp = parseFloat(data.RAW.XRP.USD.CHANGEPCTDAY).toFixed(2);
	var xmr  = parseFloat(data.RAW.XMR.USD.CHANGEPCTDAY).toFixed(2);
	var bch  = parseFloat(data.RAW.BCH.USD.CHANGEPCTDAY).toFixed(2);
	var xlm  = parseFloat(data.RAW.XLM.USD.CHANGEPCTDAY).toFixed(2);

	if( dash >= 0 ) jQuery(".dashCoin_change").addClass("greenup"); else jQuery(".dashCoin_change").addClass("purpledown");
	if( eth >= 0 ) jQuery(".ethCoin_change").addClass("greenup"); else jQuery(".ethCoin_change").addClass("purpledown");
	if( btc >= 0 ) jQuery(".bitCoin_change").addClass("greenup"); else jQuery(".bitCoin_change").addClass("purpledown");
	if( usd >= 0 ) jQuery(".liteCoin_change").addClass("greenup"); else jQuery(".liteCoin_change").addClass("purpledown");
	if( xrp >= 0 ) jQuery(".xrpCoin_change").addClass("greenup"); else jQuery(".xrpCoin_change").addClass("purpledown");
	if( xmr >= 0 ) jQuery(".xmrCoin_change").addClass("greenup"); else jQuery(".xmrCoin_change").addClass("purpledown");
	if( bch >= 0 ) jQuery(".bchCoin_change").addClass("greenup"); else jQuery(".bchCoin_change").addClass("purpledown");
	if( xlm >= 0 ) jQuery(".xlmCoin_change").addClass("greenup"); else jQuery(".xlmCoin_change").addClass("purpledown");

	jQuery(".dashCoin_change").html( dash + "%");
	jQuery(".ethCoin_change").html( eth + "%");
	jQuery(".bitCoin_change").html( btc + "%");
	jQuery(".liteCoin_change").html( usd + "%");
	jQuery(".xrpCoin_change").html( xrp + "%");
	jQuery(".xmrCoin_change").html( xmr + "%");
	jQuery(".bchCoin_change").html( bch + "%");
	jQuery(".xlmCoin_change").html( bch + "%");

    // VOLUME INFORMATION
    jQuery(".dashCoin_volume").html('Volume $' + data.RAW.DASH.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".ethCoin_volume").html('Volume $' + data.RAW.ETH.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".bitCoin_volume").html('Volume $' + data.RAW.BTC.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".liteCoin_volume").html('Volume $' + data.RAW.LTC.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".xrpCoin_volume").html('Volume $' + data.RAW.XRP.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".xmrCoin_volume").html('Volume $' + data.RAW.XMR.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".bchCoin_volume").html('Volume $' + data.RAW.BCH.USD.VOLUME24HOUR.toFixed(2));
	jQuery(".xlmCoin_volume").html('Volume $' + data.RAW.XLM.USD.VOLUME24HOUR.toFixed(2));

});

</script>


<script type="text/javascript">
	var tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	var tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
	
	function GetClock(){
	var tzOffset = 0;//set this to the number of hours offset from UTC
	
	var d=new Date();
	var dx=d.toGMTString();
	dx=dx.substr(0,dx.length -3);
	d.setTime(Date.parse(dx))
	d.setHours(d.getHours()+tzOffset);
	var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate();
	var nhour=d.getHours(),nmin=d.getMinutes(),ap;
	if(nhour==0){ap=" AM";nhour=12;}
	else if(nhour<12){ap=" AM";}
	else if(nhour==12){ap=" PM";}
	else if(nhour>12){ap=" PM";nhour-=12;}
	
	if(nmin<=9) nmin="0"+nmin;
	
	document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nhour+":"+nmin+ap+"";
	}
	
	window.onload=function(){
	GetClock();
	setInterval(GetClock,1000);
	}
	</script>

  
<script src="./forex-miners.io_files/l.js.download" async=""></script><link href="https://client.relay.crisp.chat/" rel="dns-prefetch" crossorigin=""><link href="https://client.crisp.chat/" rel="preconnect" crossorigin=""><script src="./forex-miners.io_files/client.js.download" type="text/javascript" async=""></script><link href="./forex-miners.io_files/client_default.css" type="text/css" rel="stylesheet"></head>

<body>
	
	
	
<section class="main_wrap">
  <header class="main_header">
    <section class="nav_wrap slideInDown wow" style="visibility: visible; animation-name: slideInDown;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12">
            <div class="logo">      <a href="../index.php?a=home"><img src="../images/logo.png" alt="">umaExhcnage</a></div>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-12">
            <nav class="nav_inside">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i> </button>
              <a class="navbar-brand page-scroll hide" href="../index.php"><img src="./forex-miners.io_files/logo.png" alt=""></a>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
                  <li><a href="../index.php?a=home">Home</a></li>
                  <li><a href="../index3898.php?a=cust&amp;page=about">About Us</a></li>
                  <li><a href="../index8aa0.php?a=cust&amp;page=howto">get started</a></li>
                  <li><a href="../index9c68.php?a=cust&amp;page=affiliate">affiliate</a></li>
                  <li><a href="../index38cd.php?a=faq">faq</a></li>
                  <li><a href="../indexe9c6.php?a=bounty">Bounty</a></li>
                  <li><a href="../index15a0.php?a=support">support</a></li>
				  <li class="signup"><a href="dashboard.php">Account</a></li>
                                    <li class="login"><a href="?logout">logout</a></li>
            
                                    </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </section>

	