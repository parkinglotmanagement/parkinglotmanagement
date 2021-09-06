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
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE email='$email'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class=" container">
        <form method="post" action="" name="login">
            <span class="title">PLMS</span>
            <br>
            <br>
            <input class="input" placeholder="Email" name="email">
            <br>
            <br>
            <input class="input" type="password" placeholder="Password" name="password">
            <br>
            <br>
            <button button class="button" href="./dashboard.php">LOGIN</button>
        </form>


    </div>
<?php
    }
?>
</body>

</html>