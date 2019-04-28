<?php

$connect=mysql_connect("localhost","root","MJ2546444");

mysql_select_db("thakur");

$insert='INSERT INTO student1 (student_name,student_type,student_full) VALUES ("prafull","female","Prafull Raina") ,("jatin","male","jatinwalia")
 ,("prashant","male","prashantarya"),("mohit","male","mohitgupta")';

$results=mysql_query($insert) or die (mysql_error());;


echo "database inserted";
?>