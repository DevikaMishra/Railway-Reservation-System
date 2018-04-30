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
<title>Railways | Stations</title>
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
<body id="page3">
<!-- START PAGE SOURCE -->
<div class="body1">
  <div class="main">
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">Railways</a><span id="slogan">Nationwide Travel</span></h1>
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
			  --><li><a href="http://localhost/dbms_project/register.php">Login</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>
<div class="main">
  <div id="bannerr">
    <div class="text1"> COMFORT<span>Guaranteed</span>
      <p>Well maintained stations with trained station staff to gaurantee passenger comfort</p>
    </div>
  </div>
</div>
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
              <input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
            </div>
          </div>
          <div class="wrapper"> Going To:
            <div class="bg">
              <input type="text" class="input input1" value="Enter City or Airport Code" onBlur="if(this.value=='') this.value='Enter City or Airport Code'" onFocus="if(this.value =='Enter City or Airport Code' ) this.value=''">
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
        </form>
        <h2>Stations</h2>
        <p><strong>Well maintained</strong> stations with cafeteria and water filters are provided at every platform for user comfort. </p>
        <div class="wrapper pad_bot2"><a href="#" class="button2">Read More</a></div>
      </div>
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

$sql = "SELECT passenger_name,train_id FROM waiting_list";
$result = $conn->query($sql);
?>
<table >
      <thead>
        <tr>
          <th>Passenger Name</th>
          <th>Train_Id</th>
		  
		  
        </tr>
      </thead>
      <tbody>
	  <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<tr>
              <td><?php echo $row[passenger_name];?></td>
              <td><?php echo $row[train_id];?></td>
              
            </tr><?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>
    </article>
  </section>
</div>
</br></br></br>
<!--
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
</div>-->
<script type="text/javascript"> Cufon.now(); </script>

<!-- END PAGE SOURCE -->
</body>
</html>