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

if($ch_response === false){
	$reply = "Typeform could not be reached.";
}
else{
	$reply = $ch_response;
}

echo $reply
>
