<?php      
    include('Config.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select * from lender where lender_name = '$username' AND pass_word = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //echo "<h1><center> Login successful </center></h1>"; 
            header('location:index1.php'); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
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
      Log in as a
        <span class="accent-text">Lender</span>
      </h1>


      <form class="join-form" name="f1" action = "login-lender.php" onsubmit = "return validation()" method = "POST">
        <div class="input-group">
          <label for="user">User Name</label>
          <input type="text" name="user" id="user" required>
        </div>
        <div class="input-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" required>
        </div>
        <div class="input-group">
          <button href="index1.php" type="submit" class="btn" >Log in</button>
        </div>
      </form>
    </section>
  </div>

</body>
</html>