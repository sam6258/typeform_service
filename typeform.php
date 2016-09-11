<?
$token = $_POST['token'];
if($token != 'Df7GfPA1ud5KFPJTpM1Pm2PR'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}
$ch = curl_init("https://api.typeform.com/v1/form/SMonEb?key=281c83336c6eb63b48c29d925e660adb1f950665&completed=true&offset=0&limit=50");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ch_response = curl_exec($ch);
curl_close($ch);

$reply = ":thumbsup: hello"

/*
# Decode the JSON array sent back by isitup.org
$response_array = json_decode($ch_response,true);
# Build our response 
# Note that we're using the text equivalent for an emoji at the start of each of the responses.
# You can use any emoji that is available to your Slack team, including the custom ones.
if($ch_response === FALSE){
  # isitup.org could not be reached 
  $reply = "Ironically, isitup could not be reached.";
}else{
  if($response_array["answers"] == 1){
  	# Yay, the domain is up! 
    $reply = ":thumbsup: I am happy to report that *<http://".$response_array["domain"]."|".$response_array["domain"].">* is *up*!";
  } else if($response_array["status_code"] == 2){
    # Boo, the domain is down. 
    $reply = ":disappointed: I am sorry to report that *<http://".$response_array["domain"]."|".$response_array["domain"].">* is *not up*!";
  } else if($response_array["status_code"] == 3){
    # Uh oh, isitup.org doesn't think the domain entered by the user is valid
    $reply = ":interrobang: *".$text."* does not appear to be a valid domain. \n";
    $reply .= "Please enter both the domain name AND suffix (example: *amazon.com* or *whitehouse.gov*).";
  }
}
# Send the reply back to the user. 
echo $reply;
*/
