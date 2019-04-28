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
            
                $sent='<h1 text-align:"center"; style="color:#4fcb4a"><p>"ThankU"</p><br> <p>We will reach u in short interval</p><br><p>Have a good day!</p></h1>"';
	}
		else
		{
		echo "Please enter all reqd. values"."\n";

		}
}
	
}	

?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,intial-scale=1">
        <title>CodezWorld</title>
        <link rel="icon" href="img/coding.png" type="image/png">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>
     <div class="container">
        <div class="jumbotron">

            <?php echo $sent;?>
        </div>
        </div> 
         <button class="btn btn-info text-center" ><a href=index.html>Return back to Home</a></button>
           

    </body>

    </html>