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
<TITLE>Login Form </TITLE>	
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

   
</HEAD>
<BODY>


<section  style="background: rgba(5, 53, 62, 0.88);">
<div class="container resize">
<form action="<?php echo $current_file; ?>" method="POST" class="col-md-6 col-md-offset-3">
                <fieldset>
                    <legend class="text-center" style="color:#8ae283">Login Form!</legend>
                    <div class="form-group">

                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control" placeholder="username/Email id" type="text" name="username" autofocus required minlength="2">
                        </div>
                    </div>
                     <p class="small login"> * Please enter your username/Email id!</p>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                            <input class="form-control" placeholder="Password" type="password" name="password" required>
                        </div>
                    </div>
                     <p class="small login"> * Please enter your password!</p>

                      <div class="checkbox remember">
                             <label class="control-label"><input type="checkbox"><p class="remember">  Remember me  </p></label>

                         </div>
                        <button type="submit" class="btn btn-primary btn-block" name="login">Login</button>

                </fieldset>
           
       
     
       
        <div class="forgot">
        <a  href="contact.php"> Forgot Passsword ?</a>
        </div>
         <p class="lead text-center" style="color: white">New to codezworld???</p>
        <p class="lead text-center" style="color: white">
        <a class="member" href="register.php"> SignUp here !</a></p>
 </form>
    
</div>
        <div class="text-center">
        <button  class="btn btn-info" id="myBtn">Back to Codezworld =></button>
 
         </div>
          <div id="footer1">
    <footer class="footer">
        
            <div class="footer-logo">
                <span class="copyright">Copyright © 2016 Codezworld Theme By <a href="#">Mj Thakur</a>.</span>
           </div>
        </div>
    </footer>
            
</section>
        

    

<script type="text/javascript">
    document.getElementById("myBtn").onclick = function () {
        document.location.href = "../index.html";                                                                                                                                                                       
    };
</script>

 
</BODY>
</HTML>
