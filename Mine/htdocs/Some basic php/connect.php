<?php

$connect=mysql_connect("localhost","root","");
$create=mysql_query("CREATE DATABASE IF NOT EXISTS thakur") or die (mysql_error());
mysql_select_db("thakur");

$student1="CREATE TABLE student1(
  student_id int(11) NOT NULL auto_increment,
  student_name varchar(255) NOT NULL,
  student_type varchar(10) NOT NULL,
  student_full varchar(30) NOT NULL,
  PRIMARY KEY (student_id))";

  $results=mysql_query($student1)
  or die (mysql_error());

   $studentmarks1="CREATE TABLE studentmarks1(
   studentmarks_id int(11) NOT NULL auto_increment,
   studentmarks_p int(11)  NOT NULL,
   studentmarks_c int(11) NOT NULL,
   PRIMARY KEY(studentmarks_id))";

   $results=mysql_query($studentmarks1)
   or die (mysql_error());

   echo "student database successfully created!";
?>