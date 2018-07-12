<?php
	ini_set('display_errors', true);
	$txn=$coin->listsinceblock('',3);
	
	$r['data']=$txn;
	
	echo '<pre>';
		$deposit = 0;
	echo '</pre>';
	
	$s['rcdtxn']='';
	foreach ($r['data']['transactions'] as $txn):		
		if(strpos($txn['account'], $_REQUEST['label']) !== false){
			if($txn['category']=='receive'){
				$deposit += $txn['amount'];
				$s['rcdtxn'][]=$txn;
			}
		}
	endforeach;
	$r['data']=$s['rcdtxn'];
	echo '<br>Total Deposit = '.$deposit .'<br>====================================================
	<br><br>
	
	Received Blocks List Data<br>====================================================<br>
	';
?>