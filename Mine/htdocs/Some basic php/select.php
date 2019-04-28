<?php

$connect=mysql_connect("localhost","root","");

mysql_select_db("thakur");

$query="SELECT * FROM student1";
$results=mysql_query($query) or die (mysql_error());


while($row=mysql_fetch_array($results)){
 extract($row);
  $student=<<<EOD
<table width="70%" border="1" border-collapse="collapse" cellpadding="3" cellspacing="0" align="center">
<tr >
<th width=5%>$student_id </th>
<td width=15%>$student_name </td>
<td width=15%>$student_type </td>
<td width=20%>$student_full </td>
</tr>
</table>
EOD;
echo $student;
}

?>