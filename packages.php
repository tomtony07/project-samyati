<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-image: url("logo.php"); /* Replace 'path_to_your_image.jpg' with your image path */
      background-size: cover;
      background-position: center;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      color: #000000; /* Text color */
      text-align: center;
    }
    .success-message {
      font-size: 40px;
      margin-bottom: 20px;
    }
    .welcome-username {
      font-size: 46px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .login-link {
      color: #fff;
      text-decoration: none;
      font-size: 20px;
      margin-top: 10px;
    }
    .login-link:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <?php
  include 'connection.php';
  $pkid = $_GET["pkid"];
  $pkname = $_GET["pkname"];
  $pkdetails = $_GET["pkdetails"];
  $pkprice = $_GET["pkprice"];

  if ($pkid != 0) {
    // Check if pkid already exists
    $checkQuery = "SELECT * FROM packages WHERE pkid = '$pkid'";
    $checkResult = $connect->query($checkQuery);

    if ($checkResult->num_rows == 0) {
        // pkid doesn't exist, proceed with insertion
        $insertQuery = "INSERT INTO packages(pkid, pkname, pkdetails, pkprice) VALUES ('$pkid', '$pkname', '$pkdetails', '$pkprice')";
        $insertResult = $connect->query($insertQuery);

        if ($insertResult) {
            echo "<div class='success-message'>Updation successful</div>";
            echo "<div class='welcome-username'> $pkid successfully added</div>";
            ?>
            <div class="login-link"><a href="package.html">Go back</a></div>
            <?php
        } else {
            echo "Updation unsuccessful. Please try again later.";
            ?>
            <div class="login-link"><a href="package.html">Go back to updating</a></div>
            <?php
        }
    } else {
        // pkid already exists, display error message
        echo "Updation unsuccessful. Package with ID $pkid already exists.";
        ?>
        <div class="login-link"><a href="package.html">Go back to updating</a></div>
        <?php
    }
} else {
    echo "Updation unsuccessful. Please try again.";
    ?>
    <div class="login-link"><a href="package.html">Go back to updating</a></div>
    <?php
}
?>
</body>
</html>
