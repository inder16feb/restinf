<?php
ini_set('display_errors', true);

require_once 'easecoin.php';
$coin = new Bitcoin('','');

$op = $_REQUEST['operation'];

switch($op){
	case "getaddress":
	    include('getAddress.php');
    break;
    case "getbalance":
		$r['data']['status']='success';
		$r['data']['balance']=$coin->getbalance($_REQUEST['lable']);
    break;
	case "validateaddress":
	    $r['data']=$coin->validateaddress($_REQUEST['address']);
    break;
	case "transactions":
		$txn=$coin->listtransactions($_REQUEST['lable'],intval($_REQUEST['to']),intval($_REQUEST['from']));
		$r['data']=$txn;
    break;
	case "listsinceblock":
		$txn=$coin->listsinceblock('',3);
		$r['data']=$txn;
    break;
	case "listtotal":
		include('listtotal.php');
    break;
	case "listincome":
		include('listincome.php');
    break;
	case "getTotalIncome":
		include('gettotalincome.php');
    break;
	case "unconfirmed":
		$txn=$coin->listtransactions($_REQUEST['lable'], 10, 0);
		$r['data']=$txn;
    break;
	case "getqtbalance":
		$r['data']['status']='success';
		$r['data']['balance']=$coin->getbalance();
    break;
}

echo json_encode($r);
?>
