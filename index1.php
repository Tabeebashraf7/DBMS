<?php include 'filesLogic.php';?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="index1.php" method="post" enctype="multipart/form-data" >
        <div class="input-group">
          <label for="lend">Lender id:</label>
          <input type="value" name="lend" id="lend" required>
        </div>
        <div class="input-group">
          <label for="subid">subject id:</label>
          <input type="text" name="subid" id="subid" required>
        </div>
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>