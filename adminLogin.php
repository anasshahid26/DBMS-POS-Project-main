<?php

if(isset($_POST['submit1']))
{

include('connect.php');

    $user=$_POST['username'];
    $pass=$_POST['password'];
	
	
  $fetch=mysql_query("SELECT * FROM `admin` WHERE user_name='$user' and password='$pass'");
    
	$count=mysql_num_rows($fetch);
    if($count!="")
    {
   session_start();
  $vari =   $_SESSION['user_name']=$user;
  echo $vari;
  header("Location:Admin_panel/index.php"); 
    }
    else
    {
	 echo "invalid username or password";
	echo $vari;
       header('Location:adminLogin.php');
	  
    }




}
?>
<?php

if(isset($_POST['submit2']))
{

include('connect.php');

    $user_su=$_POST['usernamesignup'];
    $email_su=$_POST['emailsignup'];
	$pass_su=$_POST['passwordsignup_confirm'];
	
	
	 $fetch=mysql_query("SELECT * FROM `Reg` WHERE UserEmail='$email_su'");
    
	$count=mysql_num_rows($fetch);
    if($count!="")
	{
	echo "USER already exist";
	 // header("Location:index.php");
	
	}
	else
	{
	
 mysql_query("INSERT INTO `Reg`(`UserName`, `UserEmail`, `UserPassword`) VALUES ('$user_su','$email_su','$pass_su')");
    
	
    echo "User Registered Suuccessfully!!!";
  // header("Location:Admin_panel/forms.php"); 

    }
   




}
?>



<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Admin Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.migrate.js"></script>
    </head>
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

	
	
	<script src="lib/jquery.js"></script>
	
<!--	<script>
	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
	
		// validate signup form on keyup and submit
		$("#commentForm").validate({
			rules: {
				usernamesignup: "required",
				emailsignup: "required",
				passwordsignup: "required",
				passwordsignup_confirm: "required",
				
				usernamesignup: {
					required: true,
					minlength: 2
				},
				passwordsignup: {
					required: true,
					minlength: 5
				},
				passwordsignup_confirm: {
					required: true,
					minlength: 5,
					equalTo: "#passwordsignup"
				},
				emailsignup: {
					required: true,
					email: true
				},
				
				passwordsignup: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				passwordsignup_confirm: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address",
				
			}
		});

		

		
	});
	</script>
	
	
	-->
	
	
	
    <body>
        <div class="container">
            

            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form   method="post" autocomplete="on"> 
                                <h1>Admin Login</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" name="submit1" /> 
								</p>
                               
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form method="post" autocomplete="on" name="myForm" id="commentForm"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup_label" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" equalTo="passwordsignup_confirm" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" equalTo="passwordsignup" type="password" placeholder="eg. X8df!90EO"/>
                                
								</p>
                                <p class="signin button"> 
									<input class="submit" type="submit" value="Submit" name="submit2">
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
