<?php
require_once "api.php";
$datalyse = new Datalyse("YOUR_API_KEY");
try {
$params= array("to"=> "34638638638",
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
