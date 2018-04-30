<?php
/*
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_reservation_system";
//$database="railway_reservation_system";
//$con=mysql_connect("localhost","root","");
$db= new mysqli($servername, $username, $password, $dbname);
$email=$_POST['email'];
$password=$_POST['password'];
if($db)
{
	$query="select email,password from user_details where email='$email'";
	$result=mysql_query($query);
	if($result)
		while($row = $result->fetch_assoc())
		
		if($row[email]==$email&&$row[password]==$password)
		{
			echo ("<script>alert('success');location='something.html'</script>");
			echo("login successful");
		}
		else
		{
			echo ("<script>alert('unsucess');location='login.html'</script>");
			echo("login failed");
		}
}
else
{
	echo "server down";
}*/
?>
<?php
   error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_reservation_system";
$db = new mysqli($servername, $username, $password, $dbname);
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT email_id FROM user_details WHERE email_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>