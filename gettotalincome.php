<?php
	ini_set('display_errors', true);
	$txn=$coin->listsinceblock('',3);
	
	$r['data']=$txn;
	$s['rcdtxn']='';
	$deposit=0;
	foreach ($r['data']['transactions'] as $txn):		
		if(strpos($txn['account'], $_REQUEST['label']) !== false){
			if($txn['category']=='receive'){
				$deposit += $txn['amount'];
			}
		}
	endforeach;
	$r['data']=$deposit;
?>