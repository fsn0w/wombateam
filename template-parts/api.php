<?php
/*
 * Template Name: API
 *
 */

$path = "/var/www/html/";

$after_reveal = false;

$contract="0xb82A72453403f350E14B8bF7dcc6FBD045Cc0d3C";
$api="PVP6WAPH57Z2TCHRTA5PCTX9H5Q866IC75";

$token = get_query_var('token');

$result = file_get_contents("https://api.etherscan.io/api?module=stats&action=tokensupply&contractaddress=".$contract."&apikey=".$api);
$contract_supply = json_decode($result, true);

if ($after_reveal && $token <= $contract_supply["result"]):
   $json = file_get_contents($path."nft_json/real_json/".$token);
else: 
  $json = file_get_contents($path."nft_json/def_json/".$token);
endif;

if($json === FALSE):
    echo 'missing';
else: 
    echo $json;
endif;

?>