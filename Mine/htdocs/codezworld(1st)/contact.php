<?php
$to="mjthakur413@gmail.com";
$subject =$_POST['subject'];
if(isset($_POST['login']))
{
	$name=$_POST['first_name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$headers="FROM:".$email."\n";
	if(empty($name))
{
      echo '<h1 class="text-center">Please enter your name! </h1>';
}
else if(empty($email))
{
   echo '<h1 class="text-center">Please enter your Email id!</h1>';
}
else if(empty($message))
{
  echo '<h1 class="text-center">Please enter some comments!</h1>';
}
	
else
{
      if(!empty($name)&&!empty($email)&&!empty($subject))
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