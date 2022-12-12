<?php
 $user = 'root';
 $password ='';
 $database = 'population_db';
 $servername ='localhost:3306';
 $mysqli = new mysqli($servername, $user, $password,  $database);
    
      if($mysqli ->connect_error) {
          die('Connect Error (' .
            
         $mysqli->connect_errno . ') '.
    
         $mysqli ->connect_error);
 }

  $sql="SELECT * FROM recreut_tb ORDER BY id DESC ";
  $result =$mysqli->query($sql);
  $mysqli ->close(); 


?>





<!DOCTYPE html>
<html>
  <head>
    <title></title>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style>
    body {
      margin: 0px;
      padding: 0px;
      background-color: #1b203d;
      overflow: hidden;
      font-family: system-ui;
    }
    .clearfix {
      clear: both;
    }
    .logo {
      margin: 0px;
      margin-left: 28px;
      font-weight: bold;
      color: white;
      margin-bottom: 30px;
    }
    .logo span {
      color: #f7403b;
    }
    .sidenav {
      height: 100%;
      width: 300px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #272c4a;
      overflow: hidden;
      transition: 0.5s;
      padding-top: 30px;
    }
    .sidenav a {
      padding: 15px 8px 15px 32px;
      text-decoration: none;
      font-size: 20px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }
    .sidenav a:hover {
      color: #f1f1f1;
      background-color: #6773bc;
    }
    .sidenav {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
    }
    #main {
      transition: margin-left 0.5s;
      padding: 16px;
      margin-left: 300px;
    }
    .head {
      padding: 20px;
    }
    .col-div-6 {
      width: 50%;
      float: left;
    }
    .profile {
      display: inline-block;
      float: right;
      width: 160px;
    }
    .pro-img {
      float: left;
      width: 40px;
      margin-top: 5px;
    }
    .profile p {
      color: white;
      font-weight: 500;
      margin-left: 55px;
      margin-top: 10px;
      font-size: 13.5px;
    }
    .profile p span {
      font-weight: 400;
      font-size: 12px;
      display: block;
      color: #8e8b8b;
    }
    .col-div-3 {
      width: 25%;
      float: left;
    }
    .box {
      width: 85%;
      height: 100px;
      background-color: #272c4a;
      margin-left: 10px;
      padding: 10px;
    }
    .box p {
      font-size: 35px;
      color: white;
      font-weight: bold;
      line-height: 30px;
      padding-left: 10px;
      margin-top: 20px;
      display: inline-block;
    }
    .box p span {
      font-size: 20px;
      font-weight: 400;
      color: #818181;
    }
    .box-icon {
      font-size: 15px !important;
      float: right;
      margin-top: 35px !important;
      color: #818181;
      padding-right: 10px;
    }
    .col-div-8 {
      width: 100%;
      float: left;
    }
    .col-div-4 {
      width: 30%;
      float: left;
    }
    .content-box {
      padding: 20px;
    }
    .content-box p {
      margin: 0px;
      font-size: 20px;
      color: #f7403b;
    }
    .content-box p span {
      float: right;
      background-color: #ddd;
      padding: 3px 10px;
      font-size: 15px;
    }
    .box-8,
    .box-4 {
      width: 95%;
      background-color: #272c4a;
      height: 330px;
    }
    .nav2 {
      display: none;
    }

    .box-8 {
      margin-left: 10px;
    }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td,
    th {
      text-align: left;
      padding: 15px;
      color: #ddd;
      border-bottom: 1px solid #81818140;
    }
    .circle-wrap {
      margin: 50px auto;
      width: 150px;
      height: 150px;
      background: #e6e2e7;
      border-radius: 50%;
    }
    .circle-wrap .circle .mask,
    .circle-wrap .circle .fill {
      width: 150px;
      height: 150px;
      position: absolute;
      border-radius: 50%;
    }
    .circle-wrap .circle .mask {
      clip: rect(0px, 150px, 150px, 75px);
    }

    .circle-wrap .circle .mask .fill {
      clip: rect(0px, 75px, 150px, 0px);
      background-color: #f7403b;
    }
    .circle-wrap .circle .mask.full,
    .circle-wrap .circle .fill {
      animation: fill ease-in-out 3s;
      transform: rotate(126deg);
    }

    @keyframes fill {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(126deg);
      }
    }
    .circle-wrap .inside-circle {
      width: 130px;
      height: 130px;
      border-radius: 50%;
      background: #fff;
      line-height: 130px;
      text-align: center;
      margin-top: 10px;
      margin-left: 10px;
      position: absolute;
      z-index: 100;
      font-weight: 700;
      font-size: 2em;
    }
  </style>

  <body>
    <div id="mySidenav" class="sidenav">
      <p class="logo"><span>CENSUS</p>
      
      <a href="index.php" class="icon-a"
        ><i class="fa fa-users icons"></i> &nbsp;&nbsp;Analytics</a
      >
      <a href="graph3.php" class="icon-a"
        ><i class="fa fa-list icons"></i> &nbsp;&nbsp;Regional Base</a
      >
      <a href="#" class="icon-a"
        ><i class="fa fa-shopping-bag icons"></i> &nbsp;&nbsp;Report
      </a>
      <a href="employ.php" class="icon-a"
        ><i class="fa fa-tasks icons"></i> &nbsp;&nbsp;Employment</a
      >
      <a href="index.php" class="icon-a"
        ><i class="fa fa-user icons"></i> &nbsp;&nbsp;Population List</a
      >
      <a href="websi.php" class="icon-a"
        ><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;View Site</a
      >

       <a href="graph2.php" class="icon-a"
        ><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Gender Data</a
      >

       <a href="grap1.php" class="icon-a"
        ><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Years</a
      >

    </div>
    <div id="main">
      <div class="head">
        <div class="col-div-6">
          <span
            style="font-size: 30px; cursor: pointer; color: white"
            class="nav"
            >&#9776; Dashboard</span
          >
          <span
            style="font-size: 30px; cursor: pointer; color: white"
            class="nav2"
            >&#9776; Dashboard</span
          >
        </div>

        <div class="col-div-6">
          <div class="profile">
            <p>Be Counted</p>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>

      <div class="clearfix"></div>
      <br />

      <div class="col-div-3">
        <div class="box">
          <p>
            <?php


  $con = mysqli_connect("localhost","root","","population_db");
  
    
    $sql = "SELECT * from people WHERE gender ='male'";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>

            <br /><span>MALE</span>
          </p>
          <i class="fa fa-users box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>
                          <?php


  $con = mysqli_connect("localhost","root","","population_db");
  
    
    $sql = "SELECT * from people WHERE gender = 'female'";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>


       <br /><span>FEMALES</span></p>
          <i class="fa fa-users box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>



              <?php


  $con = mysqli_connect("localhost","root","","population_db");
  
    
    $sql = "SELECT * from people ";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }
  
  
  mysqli_close($con);
  
  ?>

            




    <br /><span>TOTAL</span></p>
          <i class="fa fa-users box-icon"></i>
        </div>
      </div>
      <div class="col-div-3">
        <div class="box">
          <p>

           <?php


  $con = mysqli_connect("localhost","root","","population_db");
  
    
    $sql = "SELECT COUNT(*) as less_than_18 FROM people WHERE dob < 18";
  
    if ($result = mysqli_query($con, $sql)) {
  
    $rowcount = mysqli_num_rows( $result );
    
    
    printf(" %d\n", $rowcount);
  }


?>

    <br /><span>&#60; 18</span></p>
          <i class="fa fa-users box-icon"></i>
        </div>
      </div>
      <div class="clearfix"></div>
      <br /><br />
      <div class="col-div-8">
        <div class="box-8">
          <div class="content-box">
            <p> Administration<span>-Heads</span></p>
            <br />
            <table>
              <tr>
                <th>Names</th>
                <th>Position</th>
                <th>Password</th>
		
              </tr>
      <?php
 $user = 'root';
 $password ='';
 $database = 'population_db';
 $servername ='localhost:3306';
 $mysqli = new mysqli($servername, $user, $password,  $database);
    
      if($mysqli ->connect_error) {
          die('Connect Error (' .
            
         $mysqli->connect_errno . ') '.
    
         $mysqli ->connect_error);
 }

  $sql="SELECT * FROM recreut_tb ORDER BY id DESC ";
  $result =$mysqli->query($sql);
  $mysqli ->close(); 


?>







		<?php
		   while($rows = $result ->fetch_assoc())
                      {
			?>

              <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['position'];?></td>
                <td><?php echo $rows['password'];?></td>
              </tr>
              
                   <?php
		    }
                   ?>             
            </table>
          </div>
        </div>
      </div>

     
      <div class="clearfix"></div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      $(".nav").click(function () {
        $("#mySidenav").css("width", "70px");
        $("#main").css("margin-left", "70px");
        $(".logo").css("visibility", "hidden");
        $(".logo span").css("visibility", "visible");
        $(".logo span").css("margin-left", "-10px");
        $(".icon-a").css("visibility", "hidden");
        $(".icons").css("visibility", "visible");
        $(".icons").css("margin-left", "-8px");
        $(".nav").css("display", "none");
        $(".nav2").css("display", "block");
      });

      $(".nav2").click(function () {
        $("#mySidenav").css("width", "300px");
        $("#main").css("margin-left", "300px");
        $(".logo").css("visibility", "visible");
        $(".icon-a").css("visibility", "visible");
        $(".icons").css("visibility", "visible");
        $(".nav").css("display", "block");
        $(".nav2").css("display", "none");
      });
    </script>
  </body>
</html>
