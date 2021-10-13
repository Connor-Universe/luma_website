
<?php include "include/head.php";?>
<?php include "include/nav.php";?>
  <section class="banner_wrap">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="banner_infos banner_infos_sub">

<h3>Advanced login security settings:</h3><br><br>

<form method=post><input type="hidden" name="form_id" value="16203019026562"><input type="hidden" name="form_token" value="873525c7dd4296974cace1e3cb90f803">
<input type=hidden name=a value="security">
<input type=hidden name=action value="save">
Detect IP Address Change Sensitivity<br>
<input type=radio name=ip value=disabled checked>Disabled<br>
<input type=radio name=ip value=medium >Medium<br>
<input type=radio name=ip value=high >High<br>
<input type=radio name=ip value=always >Paranoic<br><br>

Detect Browser Change<br>
<input type=radio name=browser value=disabled checked>Disabled<br>
<input type=radio name=browser value=enabled >Enabled<br><br>
<input type=submit value="Set" class=sbmt>
</form>

<h3>Two Factor Authentication</h3>
<form method=post name=mainform><input type="hidden" name="form_id" value="16203019026562"><input type="hidden" name="form_token" value="873525c7dd4296974cace1e3cb90f803">
<input type=hidden name=a value="security">
<input type=hidden name=action value="tfa_save">
<input type=hidden name=time>

1. Install <a href="https://m.google.com/authenticator" targe=_blank>Google Authenticator</a> on your mobile device.<br>
2. Your Secret Code is: <b>NO4P5U227HJE4LTG</b> <input type=hidden name="tfa_secret" value="NO4P5U227HJE4LTG"><br>
<img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2Fforex-miners.io%3Fsecret%3DNO4P5U227HJE4LTG"><br>
3. Please enter two factor token from Google Authenticator to verify correct setup:<br> 
<input type=text name="code" class=inpts> <input type=submit value="Enable" class=sbmt>
</form>



<script language=javascript>
document.mainform.time.value = (new Date()).getTime();

function checkform() {
  if (!document.mainform.code.value.match(/^[0-9]{6}$/)) {
    alert("Please type code!");
    document.mainform.code.focus();
    return false;
  }
  return true;
}
</script>

 

 </main>  

 