<?php

$connect=mysql_connect("localhost","root","");

mysql_select_db("mjthakur");

$insert="INSERT INTO student(student_id,student_name,student_type,student_full)" .
"VALUES( 1 , Manish , male , Manish Thakur )" .
"( 2 , Jatin , male , Jatin Walia)" .
"( 3 , Prashant , male , Prashant arya )";

$results=mysql_query($insert);


echo "database inserted";
?>