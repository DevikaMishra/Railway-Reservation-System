<!DOCTYPE html>
<html lang="en">
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<title>Railway| User-Details </title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/ie6_script_other.js"></script>
<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page4">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">AirLines</a><span id="slogan">International Travel</span></h1>
        <div class="right">
          <nav>
            <ul id="top_nav">
              <li><a href="#"><img src="images/img1.gif" alt=""></a></li>
              <li><a href="#"><img src="images/img2.gif" alt=""></a></li>
              <li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
            </ul>
          </nav>
          <nav>
            <ul id="menu">
              <li><a href="http://localhost/dbms_project/index.php">Home</a></li>
              <li><a href="http://localhost/dbms_project/aircrafts.php">Train_Details</a></li>
              <li><a href="http://localhost/dbms_project/safety.php">Stations</a></li>
              <li id="menu_active"><a href="http://localhost/dbms_project/charters.php">Users</a></li>
              <!--<li><a href="http://localhost/dbms_project/contacts.php">Contacts</a></li>
			  --><li><a href="http://localhost/dbms_project/b.php">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
<a align = "center" href="http://localhost/dbms_project/index.php">Back to homepage</a>
<!--
<div class="main">
  <div id="bannerr">
    <div class="text1"> COMFORT<span>Guaranteed</span>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
  </div>
</div>-->
</br></br></br>
<div class="main">
  <section id="content">
    <article class="col1">
      <div class="pad_1">
        <h2>Your Train Planner</h2>
        <form id="form_1" action="#" method="post">
      <div class="wrapper pad_bot1">
               <!-- <div class="radio marg_right1">
              <input type="radio" name="name1">
              Round Trip<br>
              <input type="radio" name="name1">
              One Way </div>
            <div class="radio">
              <input type="radio" name="name1">
              Empty-Leg<br>
              <input type="radio" name="name1">
              Multi-Leg </div>
          </div> -->
          <div class="wrapper"> Leaving From:
            <div class="bg">
              <input type="text" class="input input1" value="Enter City or station Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Going To:
            <div class="bg">
              <input type="text" class="input input1" value="Enter City or station Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Departure Date :
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="yyyy/mm/dd " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
                 <!-- <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>-->
            </div>
          </div>
          <!--<div class="wrapper"> Return Date and Time:
            <div class="wrapper">
              <div class="bg left">
                <input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''">
              </div>
              <div class="bg right">
                <input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''">
              </div>
            </div>
          </div>-->
          <div class="wrapper">
            <p>Passenger(s):</p>
            <div class="bg left">
              <input type="text" class="input input2" value="# passengers" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''">
            </div>
            <a href="#" class="button2">go!</a> </div>
        </form></div>
        <div class="wrapper pad_bot2"><a href="http://localhost/dbms_project/waitng_list.php" class="button2">Waiting List</a></div>
      
    </article>
    <article class="col2 pad_left1">
	<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway_reservation_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email_id, name, gender,mobile,city,state FROM user_details";
$result = $conn->query($sql);
?>
<table>
      <thead>
        <tr>
          <th>Email_id</th>
          <th>User_Name</th>
		  <th>Gender</th>
		  <th>Phone</th>
		  <th>City</th>
		  <th>State</th>
		  
        </tr>
      </thead>
      <tbody>
	  <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<tr>
              <td><?php echo $row[email_id];?></td>
              <td><?php echo $row[name];?></td>
              <td><?php echo $row[gender];?></td>
              <td><?php echo $row[mobile];?></td>
			  <td><?php echo $row[city];?></td>
              <td><?php echo $row[state];?></td>
            </tr><?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
      <!--<h2>A Premier Air Charter Services Broker</h2>
      <div class="wrapper">
        <figure class="left marg_right1"><img src="images/page4_img1.jpg" alt=""></figure>
        <p><strong>Et harum quidem</strong> facilis est et expedita distinctio nam libero tempore, cum soluta nobis:</p>
        <ul class="list1 left pad_bot1">
          <li><a href="#">Est eligendi optio cumque nihil impedit quo</a></li>
          <li><a href="#">Minus id quod maxime placeat facere possimus</a></li>
          <li><a href="#">Omnis voluptas assumenda est</a></li>
        </ul>
      </div>
      <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
      <div class="wrapper"><a href="#" class="button1">Read More</a></div>
      <h2>Aircraft for Charter</h2>
      <div class="wrapper">
        <figure class="left marg_right1"><img src="images/page4_img2.jpg" alt=""></figure>
        <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis assumenda.</p>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fugat harum quidem rerum.</p>
      </div>-->
	  
    </article>
  </section>
</div>
</br></br></br>
<div class="body2">
  <div class="main">
    <footer>
      <div class="footerlink">
        <p class="lf">Copyright &copy; 2017 <a href="#">Domain Name</a> - All Rights Reserved</p>
        <p class="rf">Design by Railway Reservation System</a></p>
        <div style="clear:both;"></div>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript"> Cufon.now(); </script>

<!-- END PAGE SOURCE -->
</body>
</html>