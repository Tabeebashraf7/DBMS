<?php
$insert = false;
if(isset($_POST['lendid'])){
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
    $lendid = $_POST['lendid'];
    $bid = $_POST['bid'];
    $ammount = $_POST['ammount'];
    $sql = "INSERT INTO `dbms`.`donation` (`len_id`, `bow_id`, `ammount`) VALUES ('$lendid', '$bid', '$ammount');";
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
      Donate to a
        <span class="accent-text">Lender</span>
      </h1>


      <form class="join-form">
        <div class="input-group">
          <label for="name">Lender ID:</label>
          <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
          <label for="pnumber">Borrower ID:</label>
          <input type="text" name="pnumber" id="pnumber">
        </div>
        <div class="input-group">
          <label for="ammount">Amount:</label>
          <input type="value" name="ammount" id="ammount">
        </div>
        <div class="input-group">
          <button type="submit" class="btn" >Done</button>
        </div>
      </form>


    </section>
  </div>
</body>
</html>