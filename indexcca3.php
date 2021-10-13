
<?php include "include/config.php";
 include "include/signup_process.php";
 $require = "";
 if(!isset($_GET['r'])){
     $referal= '';
     $dis = "";
   
 }else{
  $referal= $_GET['r'];
  $dis = "disabled";
    }
    if($force_settings !=1){
        $require = "required";
    }else{
        $require = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from <?php echo"$site_name3";?>/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Apr 2021 11:46:27 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo"$site_name3";?></title>
	<link rel="icon" href="styles/images/favicon.png">
	<link rel="stylesheet" href="styles/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
	<link href='styles/animate.css' rel='stylesheet' type='text/css'>
	<link href='styles/hover.css' rel='stylesheet' type='text/css'>
	<link href='styles/custom.css' rel='stylesheet' type='text/css'>
	<script src="styles/jquery.min.js"></script>
	<script src='styles/setting2.js' type='text/javascript'></script>
	<script src="styles/bootstrap.min.js"></script>
	<script src="styles/wow.min.js"></script>
  
 
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

  
</head>

<body class="loginwrap">

<div class="loginheader"><a href="index.php?a=home" title="" id="logo" class="navbar-brand"><?php echo"$site_name3";?></a></div>

<div class="banner_wrap">
  <div class="container">
	  <div class="row">
		  
		<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12">
				   <div class="form-container loginpage loginpage-white">
					     <div class="icon"><span><img src="styles/images/howicon1-min.png" alt=""></span></div>
			          <h1>Register an <span>Account</span></h1>

 

 
 
   <ul style="color:red">
   
                            
          
    
                      
    
   
   
   <br> 
    </ul>
    <form method="POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<?php echo"$success";?>
<?php echo"$fail";?>
<table cellspacing=0 cellpadding=2 border=0 width="100%">
<?php echo"$first_name_err";?>
<tr>
 <td><input type=text name="first_name"  class=inpts size=30 placeholder="Your First Name" required></td>
</tr>
<?php echo"$last_name_err";?>
<tr>
 <td><input type=text name="last_name"  class=inpts size=30 placeholder="Your Last Name" required></td>
</tr>
<?php echo"$username_err";?>
<tr>
 <td><input type=text name="username"  class=inpts size=30 placeholder="Your Username" required></td>
</tr>
<?php echo"$password_err";?>
<tr>

 <td><input type=password name="password" class=inpts size=30 placeholder="Define Password" required></td>
</tr><tr>

 <td><input type=password name="password2"  class=inpts size=30 placeholder="Retype Password" required></td>
</tr>


<?php echo"$btc_address_error";?>
<tr>

 <td><input type=text class=inpts size=30 name="wallet"  placeholder="Crypto wallet address"></td>
</tr>
<?php echo"$country_error";?>
<tr>

 <td>  <select name="country"  class="form-control" placeholder="select country">
                       <option value="select" selected>- Select Country - </option>
                       <option value="Afghanistan">Afghanistan</option>
                            <option value="Åland Islands">Åland Islands</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antarctica">Antarctica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Bouvet Island">Bouvet Island</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Territories">French Southern Territories</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-bissau">Guinea-bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                            <option value="Korea, Republic of">Korea, Republic of</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macao">Macao</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcairn">Pitcairn</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russian Federation">Russian Federation</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-leste">Timor-leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Viet Nam">Viet Nam</option>
                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                       </select></td>
</tr>
<?php echo"$email_err";?>
<tr>

 <td><input type=text name="email" class=inpts size=30 placeholder="Your E-mail Address" required></td>
</tr>
<?php echo"$referal_code_err";?>
<tr>

 <td> <input type="text"  name="code" class="inpts" value="<?php echo"$referal";?>" placeholder="Referal"  <?php echo"$require";?>/> </td>
</tr>




<tr>
 <td colspan=2><input type=checkbox name=agree value=1   > I agree with <a href="indexa972.php?a=rules">Terms and conditions</a></td>
</tr>
<tr>
 <td><input type=submit value="Register" class=sbmt></td>
</tr></table>
</form>
</div>
			</div>
	  </div>
  </div>
</div>
 </main>  
  
<?php include "include/foot.php";?>
