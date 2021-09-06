<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel = "stylesheet" type = "text/css" href = "./css/styles.css">  
<style>
    body {
        background-image: url('./images/background.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        font-family: OpenSans;
    }
</style>

<body>
<?php
    require('./db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);
        $fullname    = stripslashes($_REQUEST['fullname']);
        $fullname    = mysqli_real_escape_string($con, $fullname);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (fullname, password, email, create_datetime)
        VALUES ('$fullname', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register.php'>Registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class=" container">
        <span class="title">PLMS</span>
        <br>
        <form method="post" action="">
            <input class="input" type="text" placeholder="Full Name" name="fullname">
            <br>
            <br>
            <input class="input" type="text" placeholder="Email" name="email">
            <br>
            <br>
            <input class="input" type="password" placeholder="Password" name="password">
            <br>
            <br>
            <button button class="button" name="submit" href="index.php">REGISTER</button>
        </form>

    </div>
    <?php
    }
?>

</body>

</html>