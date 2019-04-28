<?php
@require 'connect.inc.php';
@require 'core.inc.php';

if(isset($_POST['username'])&&isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$password_hash = md5($password);
	

	if(!empty($username)&&!empty($password))
	{
		$query="SELECT * FROM registered WHERE username='$username' AND password_hash='$password_hash'";
		if ($query_run=mysql_query($query))
		 {
		
		   $query_num_rows =mysql_num_rows($query_run);
		   

		   if($query_num_rows==0)
		   {
		   	echo 'Invalid usename/password combination.';
		   }
		   else if($query_num_rows==1)
		   {
		   	$user_id = mysql_result($query_run,0,'user_id');
		   	
		   	$_SESSION['user_id']=$user_id;
		   	echo $_SESSION['user_id'];
		   	header('Location:index1.php');
		   }

		 }

	}

	else
	{
		echo 'You must enter required fields!';
	}

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
<form action="<?php echo $current_file; ?>" method="POST" class="col-md-4 col-md-offset-3">
                <fieldset>
                    <legend class="text-center" style="color:#fff">Login Form!</legend>
                    <div class="form-group">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" placeholder="Enter your Name" type="text" name="username" autofocus required minlength="2">
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
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-warning" name="login">Log in<span class="glyphicon glyphicon-send"></span></button>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="text-center">
        <a class="link animated fadeInUp delay-1s" href="codezworld.com">Back to Codezworld</a>
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
