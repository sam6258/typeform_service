$command = $_POST['command'];
$text = $_POST['text'];
$token = $_POST['token'];
if($token != 'Df7GfPA1ud5KFPJTpM1Pm2PR'){ 
    $msg = "The token for the slash command doesn't match. Check your script.";
    die($msg);
    echo $msg;
}
echo $command
echo $text
echo $token
