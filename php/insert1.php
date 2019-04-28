<?php

$connect=mysql_connect("localhost","root","");

mysql_select_db("thakur");

$insert='INSERT INTO studentmarks1 (studentmarks_p,studentmarks_c) VALUES ("1","2") ,("3","4")';

$results=mysql_query($insert) or die (mysql_error());;


echo "database inserted";
?>