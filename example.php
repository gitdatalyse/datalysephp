<?php
require_once "api.php";
$datalyse = new Datalyse();
try {
$params= array("token"=> "TOKEN_API_HERE",
"to"=> "34682288834",
"from"=> "FROMSPA",
"text"=> "Hello world to msg");

$response=$datalyse->sendsms_smsmt($params);
 echo "<br/><br/>DatalyseAPIOK:<br/>";
print_r($response);
} catch(Exception $e) {
echo "<br/><br/>DatalyseAPIerror:<br/>"; 
print_r($e);
}
?>
