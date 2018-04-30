
<html>
    <head>
        <title>Railways</title>
    </head>
    <body>
        <h2>Registration Page </h2>
        <a href="http://localhost/dbms_project/index.php">Click here to go back</a><br/><br/>
		<a href="http://localhost/dbms_project/login.php">Login</a><br/><br/>
        <form action="register.php" method="POST">
           Enter Email <input type = "email" name = "email" required ="required"><br/> <br/>
           Enter password: <input type="password" name="password" required="required" /> <br/><br/>
		   Enter Name: <input type="text" name="name" required="required" /> <br/><br/>
		   Gender <input type = "text" name = "gender" required = "required" /><br/> <br/>
		   Age <input type = "number" name = "age" ><br/> <br/>
		   Enter phone number <input type = "number" name = "phone" ><br/> <br/>
		  City: <input type="text" name="city" required="required" /> <br/><br/>
		  State: <input type="text" name="state" required="required" /> <br/><br/>
           <input type="submit" value="Register"/>
        </form>
		
    </body>
</html>


<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$cust_name = mysql_real_escape_string($_POST['cust_name']);
	$password = mysql_real_escape_string($_POST['password']);
	$cust_email = mysql_real_escape_string($_POST['cust_email']);
	$cust_pho = mysql_real_escape_string($_POST['cust_pho']);
	
	
    $bool = true;
	mysql_connect("localhost", "root","yashu") or die(mysql_error()); //Connect to server
	mysql_select_db("spicepool") or die("Cannot connect to database"); //Connect to database
	$query = mysql_query("Select * from customers") or die(mysql_error()); //Query the users table
	while($row = mysql_fetch_array($query)) //display all rows from query
	{
		$table_users = $row['cust_name']; // the first username row is passed on to $table_users, and so on until the query is finished
		if($cust_name == $table_users) // checks if there are any matching fields
		{
			$bool = false; // sets bool to false
			Print '<script>alert("Customer Name has been taken!");</script>'; //Prompts the user
			Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysql_query("INSERT INTO customers (cust_name, cust_pass,cust_email,cust_pho) VALUES ('$cust_name','$password','$cust_email','$cust_pho')") or die (mysql_error());//Inserts the value to table users
		//Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
		//Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
	}
}
?>