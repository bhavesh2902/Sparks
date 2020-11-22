<?php
    require_once('databaseconnect.php'); //connect to database

    $name = $_POST['name'];
    $query = "select * from users where name='" . $name . "'";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    $query = "select name from users where name<>'" . $row['name'] . "'";
    $result = mysqli_query($link,$query);

    if(isset($_POST['transfer'])) {
        if($_POST['credits_tr'] > $row['credit']) {
            echo "Credits transferred cannot be more than " . $row['credit'] . "<br>";
        }

        else {
            $query = "update users set credit=credit-" . $_POST['credits_tr'] . " where name='" . $row['name'] . "'";
            mysqli_query($link,$query);

            $query = "update users set credit=credit+" . $_POST['credits_tr'] . " where name='" . $_POST['to_user'] . "'";
            mysqli_query($link,$query);

            $query = "insert into transfers values('" . $row['name'] . "','" . $_POST['to_user'] . "'," . $_POST['credits_tr'] . ")";
            mysqli_query($link,$query);

            header("Location: userspage.php");
        }
    }
?>

<html>
    <head>
        <title>Transfer Credits page</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@500&display=swap" rel="stylesheet">
    <style>
      #hover:hover{
        background: white;
        color:black;

      }
      body {
        background-image: linear-gradient(to right, #08588c, #5b90b3, #08588c);
      }

      .nav-link{
        font-size: 30px;
        font-family: "Palatino Linotype", "Book Antiqua", Palatino, serif;
      }

      #box {
        width: 900px;
        height: 150px;
        border-radius: 15px;
        margin: 40px auto 10px auto;
        background-color:#39e600;
       
        font-size: 100px;
        text-align: center;
        font-family: cursive, sans-serif;
        color:black;
      }

      #box1 {
        width: 460px;
        height: 400px;
        border-radius: 15px;
        margin: 40px auto 20px auto;
        background-color:#ffff00;
        box-shadow: 0px 4px #666C72;
        -moz-box-shadow: 0px 4px #666C72;
        -webkit-box-shadow: 0px 4px #666C72;
      }

      .details {
        font-size: 30px;
        font-family: 'Satisfy', cursive;
        margin-left: 5px;
        padding: 30px 30px 0px 30px;
        color: white;
      }

      .amount {
        font-size: 20px;
        margin-left: 28px;
        height: 50px;
        width: 250px;
        border-radius: 20px;
        border: 2px solid white;
      }

      .names {
        font-size: 30px;
        font-family: 'Satisfy', cursive;
        margin-left: 20px;
        margin-top: 10px;
        color: white;
      }

      .btn{
        margin-left: 165px;
        font-family: 'Sansita Swashed', cursive;
      }

      #print{
        font-family: 'Satisfy', cursive;
        font-size: 60px;
        text-align: center;
        color: white;
      }

      #demo{
        margin-left: 165px;
      }
      #black{
        color:black;
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
        <a class="nav-link" href="Userspage.php"> <span id="hover">Users</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="displaypage.php"><span id="hover">Transactions</span></a>
      </li>
      >
    </ul>
  </div>
</nav>

        <div class ="add">
            <div id="box">
                <div id="print">
                    <h2 style="float: left; color:black;margin-left: 300px; margin-top: 20px; text-align: center; text-transform: uppercase;">Name: <?php echo $_POST['name'] ?></h2>
                    <br>
                    <h2 style="float: left; color:black; margin-left: 70px;">Email: <?php echo $_POST['email'] ?></h2><h2 style="float: right; color:black;margin-right: 180px;">Credit: <?php echo $_POST['credit'] ?></h2>
                </div>
            </div>

        <form action="#" method="post">
            <center>
        <input type="hidden" name="name" value=<?php echo $_POST['name'] ; ?>>

        <input type="hidden" name="email" value=<?php echo $_POST['email'] ; ?>>

        <input type="hidden" name="credit" value=<?php echo $_POST['credit'] ; ?> >
    </center>

                <!-- <legend>Transfer your credits to</legend>
               Enter your Credits: <input type="number" name="credits_tr" min =0 value=1 required>
                <br><br>    
                credits to user: <select name="to_user" required>
                    <option value =""></option> -->
        <div id="box1">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="names"><span id="black">Select Name</span></label>
        <select name="to_user" required id="mySelect" class="custom-select custom-select-lg mb-3"style="width: 350px; margin-left: 50px; color:black; border-radius:20px">
          <option selected>Select Name</option>

                <?php
                        while($tname = mysqli_fetch_array($result)) {
                            echo "<option value='" . $tname['name'] . "'>" . $tname['name'] . "</option>";
                        }
                ?>
                </select>
            <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="details"  ><span id="black">Enter No. of credentials</span></label>  <br>
        <input class="amount" type="amount"  style="margin-left:50px;width: 350px;"  placeholder="Enter amount" name="credits_tr"  required> <br><br><br>


        <input type="submit" id="demo" class="btn btn-success" name="transfer" value="TRANSFER">
        </form>
        </head>
 </div>
    </body>
</html>
