<?php
if(isset($_POST["Name"]) && isset($_POST["Email"])&& isset($_POST["Submit"])) {
 $username = $_POST["Name"];
 $Email = $_POST["Email"];
 if(!empty($username) && !empty($Email))
 {
 $myfiles=fopen("newfile.txt","a+") or die("Unable to process ur req");
 fwrite($myfiles,$_POST["Name"]);
 fwrite($myfiles,"  ");
 fwrite($myfiles,$_POST["Email"]);
 fwrite($myfiles,"\n");
 fclose($myfiles);
 print("Thanks for submission,we will reach u in short interval");
}
else
{
echo "All fields are reqd.";
}

}
?>