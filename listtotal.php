<?php
	ini_set('display_errors', true);
	$txn=$coin->listsinceblock('',3);
	
	$r['data']=$txn;
	
	echo '<pre>';
	// print_r($r['data']);
	echo '</pre>';
	$withdraw = 0;
	$deposit = 0;
	foreach ($r['data']['transactions'] as $txn):
		if($txn['category']=='send'){
			$withdraw += $txn['amount'];
		}
		if($txn['category']=='receive'){
			$deposit += $txn['amount'];
		}
	endforeach;	
	echo 'Withdraw = '.$withdraw .'<br>';
	echo 'Deposit = '.$deposit .'<br>';
?>