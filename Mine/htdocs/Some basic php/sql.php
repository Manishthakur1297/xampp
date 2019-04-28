<?php

$connect=mysql_connect("localhost","root","");
$create=mysql_query("CREATE DATABASE IF NOT EXISTS mjthakur") or die (mysql_error());
mysql_select_db("mjthakur");

$student="CREATE TABLE student(
  student_id int(11) NOT NULL auto_increment,
 student_name varchar(255) NOT NULL,
  student_type varchar(10) NOT NULL,
  student_full varchar(30) NOT NULL,
  PRIMARY KEY (student_id))";

  $results=mysql_query($student)
  or die (mysql_error());

   $studentmarks="CREATE TABLE studentmarks(
   studentmarks_id int(11) NOT NULL auto_increment,
   studentmarks_p int(11)  NOT NULL,
   studentmarks_c int(11) NOT NULL,
   PRIMARY KEY(studentmarks_id))";

   $results=mysql_query($studentmarks)
   or die (mysql_error());

   echo "student database successfully created!";
?>