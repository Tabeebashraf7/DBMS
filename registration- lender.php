<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $msg=' ';
    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $subid = $_POST['subid'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass_word = $_POST['pass'];
    $str=md5($pass_word);
    $sql = "INSERT INTO `dbms`.`lender` (`sub_id`, `lender_name`, `phone_number`, `email`,`pass_word`) VALUES ('$subid', '$name', '$phone','$email','$str');";
    // echo $sql;
    // Execute the query
    if($con->query($sql) == true){

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection;
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="styles.css" rel="stylesheet">
  <link href="join.css" rel="stylesheet">
  <link href="index.css" rel="stylesheet">
  <title>NOTE - lender</title>
</head>

<body class="full-height-grow">
  <div class="container full-height-grow">
    <nav>
      <div class="logo">
        <p>Note</p>
      </div>
      <p>English-01,Maths-02,Konkani-03,hindi-04,Science-05,General Knowledge 06</p>
      <ul>
        <li><a href="join.html">Join</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="mainpage.html">Home</a></li>
      </ul>
    </nav>
    <section class="join-main-section">
      <h1 class="join-text">
      Register as a
        <span class="accent-text">Lender</span>
      </h1>
      

      <form class="join-form" action="joinl.php" method="post">
        <div class="input-group">
          <label for="subid">Subject ID</label>
            <select id="subid" name="subid" class="select">
              <p>English-01,Maths-02,Konkani-03,hindi-04,Science-05,General Knowledge 06</p>
              <option value="volvo">01</option>
              <option value="saab">02</option>
              <option value="fiat">03</option>
              <option value="audi">04</option>
              <option value="audi">05</option>
              <option value="audi">06</option>
            </select>
        </div>
        <div class="input-group">
          <label for="name">Lender Name:</label>
          <input type="text" name="name" id="name" required>
        </div>
        <div class="input-group">
          <label for="pnumber">Phone Number:</label>
          <input type="text" name="pnumber" id="pnumber" required>
        </div>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" name="pass" id="pass" required>
        </div>
        <div class="input-group">
        <button type="submit" class="btn" >Join Now</button>
        </div>
        <div class="input-group">
        <button type="submit" class="btn" ><a href="data.php">check your lender id</a></button>
        </div>
      </form>


    </section>
  </div>

</body>
</html>