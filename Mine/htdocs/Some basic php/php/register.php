<?php
@require 'connect.inc.php';
@require 'core.inc.php';

if(!loggedin())
{

	if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['password'])&&isset($_POST['password_again']))
	{
		$username=$_POST['username'];
		$email_id=$_POST['email'];
		$password=$_POST['password'];
		$password_again=$_POST['password_again'];
		
		$password_hash = md5($password);

		if(!empty($username)&&!empty($email_id)&&!empty($password)&&!empty($password_again))
		{
			if($password!=$password_again)
			{
				echo 'Passwords do not match.';
			}
			else
			{
				

				$query="SELECT * FROM registered WHERE email_id='$email_id'";
				$query_run = mysql_query($query);
				$count=mysql_num_rows($query_run);
			
				if($count==1)
				{
					echo '<strong>The email id '.$email_id.' already exists.</strong>';
				}
				else
				{
					$query="INSERT INTO registered(username,email_id,password,password_hash) VALUES ('".mysql_real_escape_string($username)."','".mysql_real_escape_string($email_id)."','".mysql_real_escape_string($password)."','".mysql_real_escape_string($password_hash)."')";

					if($query_run=mysql_query($query))
					{
						header('Location:register_success.php');
					}
					else
					{
						echo 'Sorry, we couldn\'t register you at this time.Try again Later.';
					}

				}	
			}

		}
		else
			{

				echo'All fields are required';
			}

	}


}
else if(loggedin())
{
	echo 'loggedin';
}
?>
<!DOCTYPE>
<HTML>
<HEAD>
<TITLE>Registration Form </TITLE>	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

   <!-- <script src='https://www.google.com/recaptcha/api.js'></script>-->
</HEAD>
<BODY>
<section  style="background:silver;">
<div class="container">
 <form method="POST" action="register.php" class="col-md-4 col-md-offset-3">
                <fieldset>
                    <legend class="text-center" style="color:#fff">Registration Form!</legend>
                    <div class="form-group">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" placeholder="Enter your Name" type="text" name="username" autofocus required minlength="2">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>

                            <input class="form-control" placeholder="Enter your Email" type="email"  name="email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input class="form-control" placeholder="Enter your Password" type="password" name="password" required>
                        </div>
                    </div>
                     <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input class="form-control" placeholder="Confirm your Password" type="password" name="password_again" required>
                        </div>
                    </div>
                    
                             <div class="g-recaptcha text-center" data-sitekey="6LewbCMTAAAAAAWS9NCIdNddc-bZEj2u0Iy9tEvm"></div>
        
    
                                                
                              

                    <div class="form-group">
                        <div class="input-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-warning" name="register">Register<span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
       
         <div class="text-center">
        <a class="link animated fadeInUp delay-1s" href="$current_file">Back to Codezworld</a>
        </div>
       
</section>
    <footer class="footer">
        <div class="container">
            <div class="footer-logo">
                <span class="copyright">Copyright © 2016 Codezworld Theme By <a href="#">Mj Thakur</a>.</span>
            </div>
        </div>
    </footer>



</BODY>
</HTML>