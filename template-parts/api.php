<?php
/*
 * Template Name: API
 *
 */

$contract="0xb531b3DaA87F3864f45866B5236114b76Af0ECA0";
$api="PVP6WAPH57Z2TCHRTA5PCTX9H5Q866IC75";

$result = file_get_contents("https://api-rinkeby.etherscan.io/api?module=stats&action=tokensupply&contractaddress=".$contract."&apikey=".$api);
$result=json_decode($result, true);

?>

Max Total Supply: 

<?=$result['result']?>

<br>

NFT ID:

<?php

echo get_query_var('token');

?>