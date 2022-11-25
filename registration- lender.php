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
    $sql = "INSERT INTO `dbms`.`lender` (`sub_id`, `lender_name`, `phone_number`, `email`,`pass_word`) VALUES ('$subid', '$name', '$phone','$email','$pass_word');";
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
      <ul>
        <li><a href="DBMS-PROJECT.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="join.html">Join</a></li>
        <li><a href="login-option.html">Login</a></li>
        <li><a href="update-option.html">Update</a></li>
      </ul>
    </nav>
    <section class="join-main-section">
      <h1 class="join-text">
      Register as a
        <span class="accent-text">Lender</span>
      </h1>
      

      <form class="join-form" action="registration- lender.php" method="post">
        <div class="input-group">
          <label for="sid">Subject ID</label>
          <input type="value" name="subid" id="sid" required>
        </div>
        <div class="input-group">
          <label for="lname">Lender Name:</label>
          <input type="text" name="name" id="lname" required>
        </div>
        <div class="input-group">
          <label for="pnumber">Phone Number:</label>
          <input type="text" name="phone" id="pnumber" required>
        </div>
        <div class="input-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" required>
        </div>
        <div class="input-group">
          <button href="data.php" type="submit" class="btn" >Join Now</button>
        </div>
        <div class="input-group">
          <button href="data.php" type="submit" class="btn" ><a href="data.php">check your lender id</a></button>
        </div>
      </form>
    </section>
  </div>

  <div class="ttext">
  <p>English-01,Maths-02,Konkani-03,hindi-04,Science-05,General Knowledge-06</p>
  </div>
</body>
</html>