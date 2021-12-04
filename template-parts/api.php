<?php
/*
 * Template Name: API
 *
 */

$path = get_home_path();

$after_reveal = ($_GET['reveal']=='true'?true:false);

$contract="0xb531b3DaA87F3864f45866B5236114b76Af0ECA0";
$api="PVP6WAPH57Z2TCHRTA5PCTX9H5Q866IC75";

$token = get_query_var('token');

$result = file_get_contents("https://api-rinkeby.etherscan.io/api?module=stats&action=tokensupply&contractaddress=".$contract."&apikey=".$api);
$contract_supply = json_decode($result, true);

if ($after_reveal && $token <= $contract_supply):
   $json = file_get_contents($path."/nft_json/real_json/".$token);
else: 
   $json = file_get_contents($path."/nft_json/def_json/".$token);
endif;

if($json === FALSE):
    echo 'missing';
else: 
    echo $json;
endif;

?>