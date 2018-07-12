<?php
if(!empty($_REQUEST['lable'])){
	$newaddress = $coin->getnewaddress($_REQUEST['lable']);
	$r['data']['status']='success';
	$r['data']['address']=$newaddress;
}
?>
