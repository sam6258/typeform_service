<?php
/*
REQUIREMENTS
* A custom slash command on a Slack team
* A web server running PHP5 with cURL enabled
*/
# Grab some of the values from the slash command, create vars for post back to Slack
$command = $_POST['command'];
$text = $_POST['text'];
$token = $_POST['token'];
# Check the token and make sure the request is from our team 
if($token != 'Df7GfPA1ud5KFPJTpM1Pm2PR'){ #replace this with the token from your slash command configuration page
  $msg = "The token for the slash command doesn't match. Check your script.";
  die($msg);
  echo $msg;
}
# isitup.org doesn't require you to use API keys, but they do require that any automated script send in a user agent string.
# You can keep this one, or update it to something that makes more sense for you
# We're just taking the text exactly as it's typed by the user. If it's not a valid domain, isitup.org will respond with a `3`.
# We want to get the JSON version back (you can also get plain text).
$url_to_check = "https://api.typeform.com/v1/form/SMonEb?key=281c83336c6eb63b48c29d925e660adb1f950665&completed=true&offset=0";
# Set up cURL 
$ch = curl_init($url_to_check);
# Set up options for cURL 
# We want to get the value back from our query 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
# Send in our user agent string 
# Make the call and get the response 
$ch_response = curl_exec($ch);
# Close the connection 
curl_close($ch);
# Decode the JSON and place it into an array
$array_1 = json_decode($ch_response, true);

$option_1  =strtok($text, " ");
$option_2 = strtok(" ");
$option_3 = strtok(" ");








$total = $array_1["stats"]["responses"]["completed"];
$reply = "";
$reply .= $option_1 . $option_2 . $option_3 . "\n";

for ($i=0; $i < $total ; $i++) 
{ 
	$reply .= $array_1["responses"][$i]["answers"]["textfield_27896188"]. " " .$array_1["responses"][$i]["answers"]["textfield_27896194"]. "\n";
}

echo $reply;
