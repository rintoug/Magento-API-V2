<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
$api_url = "http://yourhost.com/api/v2_soap/?wsdl=1"; //For Version 2
//$api_url = "http://yourhost.com/api/soap/?wsdl";  //For Version 1
$username = 'yourapiusername';
$password = 'yourapipassword';
$client = new SoapClient($api_url,array('cache_wsdl' => WSDL_CACHE_NONE));  //Will cnot cache the WSDL
//retreive session id from login
$session = $client->login($username, $password);
$websiteId='za';   //for me its za its just id that you have created for the websitel.

//echo "<pre>";
//print_r($client->__getFunctions ());

$resultActive = $client->productsapiActiveList($session,$websiteId); //Sample call in version 2
 
$resultInacive = $client->productsapiInactiveList($session,$websiteId);  //Sample call in version 2

echo "<pre>";print_r($resultActive);

echo "<pre>";print_r($resultInacive);

