<?php

$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
  die("connection to this database failed due to " . mysqli_connect_error() );
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Bank</title>
    <style type="text/css">
      #hover:hover{
        background: white;
        color:black;

      }
      .right{
        float:right;
      }
      
      .users{
        float=right;
      }
      body{
        background-color: #808080;
      }
      h2{
        text-align: center;
        color:#003d99;
        
      }
      h3{
        text-align: right;
        color:red;
      }
      button{
        position: absolute;
         left: 200px;
        top: 300px;
      }
      #button1{
        top:500px;
        left:700px;

      }
      .top-left {
  position: absolute;
  top: 120px;
  left: 16px;
  color:blue;
}
      .top-leftt {
  position: absolute;
  top: 150px;
  left: 706px;
  color:red;
}
.bun{
  
}
    

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="homepage.php">
        <img src="https://image.shutterstock.com/image-vector/bank-icon-logo-vector-260nw-399995245.jpg" width="60" height="60" alt="">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="homepage.php"> <span id="hover">Home</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="userspage.php"> <span id="hover">Users</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="displaypage.php"><span id="hover">Transactions</span></a>
      </li>
      >
    </ul>
  </div>
</nav>

  
  
  <img src="https://image.freepik.com/free-vector/banking-background-design_1223-54.jpg">
  <h1 class="top-left">Welcome to Sparks Bank</h1>
 <img class="right"src="https://resize.indiatvnews.com/en/resize/newbucket/715_-/2019/11/online-banking-1573056852.jpg">
 <h1 class="top-leftt">Stay connected to your account 24x7</h1>

  <button type="button" class="btn btn-success btn1" style="font-size: 40px; border-radius: 20px; margin-top: -50px;margin-left: -200px;"; onclick="location.href='userspage.php';">Users</button>
<button type="button" id="button1" class="btn btn-success btn1" style="font-size: 40px; border-radius:20px;" onclick="location.href='displaypage.php';">Transaction History</button>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

