<?php
//print_r(get_loaded_extensions());

ini_set('display_errors', true);

/*
include('jsonRPCClient-1.php');
$rpc = new jsonRPCClient("http://wgcclassicrpc:DWSdiDsV4uQ4gXhXzMJFjjBRe5hxXtNCVi2ZpSe3tGmx@184.95.41.67:9332/");
print_r($rpc->getinfo());
die('dobne');
*/

require_once 'easecoin.php';
//$coin = new Bitcoin('wgcclassicrpc','8VRmzeXU7bSnTbK9ogPeGVfiJ3PjEJmH2sBEEQ7GDYwQ');
$coin = new Bitcoin('EB3Coinrpc','FYDRuLqTUkEvk2e7vhe2hUNDTYjUBSXcNM9y7pGrsc3L');
//$d = $coin->getinfo();
$newaddress = $coin->getnewaddress();

$account = $coin->getaccount();

$accountaddress = $coin->getaccountaddress();

$addresses = $coin->listaddressgroupings();

$peer = $coin->getpeerinfo();

$listaccount = $coin->listaccounts(1);

$rawpool = $coin->getrawmempool();

$prms = $coin->getblockchaininfo();
//echo $d;
//var_dump($d);
echo '<pre>';
	// to list the address with the lable
	echo 'working';
	//print_r($coin->listreceivedbyaddress(1, true));
	die();
	///var_dump($coin->listreceivedbyaddress(1, true));

	
	//returns total amount in the lable
	//var_dump($coin->getreceivedbyaccount("amrit",1));
	//var_dump($coin->getreceivedbyaccount("inder",1));
	
	// generate a new address with lable name - can repeat the given name. 
	// $sender = 'WPe5mTf3oQJnSfx2AKFDkiVhovfnVCL1b7';
	// $sender = 'WPe5mTf3oQJnSfx2AKFDkiVhovfnVCL1b7';
	// $recver = 'WTD7iwYXiLDb4au8tmdYSb9ZQQWppfy3B2';
	// $amount = 0.1;
	
	//var_dump($coin->sendfrom('amrit',$recver,(float)$amount,0,'commenttest1','commenttest2'));
	//print_r($coin->listtransactions('inder',10,0 ));
	/*print_r($coin->move('amrit','inder',1,1,'testing'));
	print_r($coin->listtransactions('amrit',10,0 ));
	print_r($coin->listtransactions('inder',10,0 ));*/
	//print_r($coin->getreceivedbyaccount("amrit",1));
	//echo '<br>';
	//print_r($coin->getreceivedbyaccount("inder",1));
	
echo '</pre>';

//http://wgcclassicrpc:DWSdiDsV4uQ4gXhXzMJFjjBRe5hxXtNCVi2ZpSe3tGmx@184.95.41.67:9332/


//echo 'sds2';
?>
