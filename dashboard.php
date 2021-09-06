<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="table_script.js"></script>
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
</head>

<body>
    <span style="font-size:30px;cursor:pointer;color:white;margin:2%" onclick="openNav()">&#9776; PLMS</span>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="./dashboard.php"><i class="material-icons">directions_car</i> SLOTS</a>
        <a href="./user_account.php"><i class="material-icons">account_circle</i> ACCOUNT</a>
    </div>
    <div class=" container_dashboard">
        <table style="width:100%" id="parking">
            <tr>
                <th>AVAILABLE SLOTS</th>
                <th>TOTAL PARKED</th>
                <th>TOTAL SLOTS</th>
            </tr>
            <?php
                include("db.php");
                $sql = "SELECT COUNT(*) AS total,
                COUNT(slots) AS slot,
                COUNT(if(status='AVAILABLE',1,null)) AS available,
                COUNT(if(status='OCCUPIED',1,null)) AS occupied
                FROM data";
                $result = mysqli_query ($con,$sql) or die (mysql_error ());
                while ($data = mysqli_fetch_assoc ($result)){
                ?>
            <tr>
                <td><?php echo $data['available']; ?></td>
                <td><?php echo $data['occupied']; ?></td>
                <td><?php echo $data['slot']; ?></td>
            </tr>
            <?php
}
?>
        </table>
        <br>
        <br>
        <table style="width:100%" id="parking"> 
            <tr>
                <th>SLOTS</th>
                <th>STATUS</th>
                <th>ALERT</th>
            </tr>
            <?php
                include("db.php");
                $sql = "SELECT * FROM data ";
                $result = mysqli_query ($con,$sql) or die (mysql_error ());
                while ($data = mysqli_fetch_array ($result)){
            ?>

            <tr>
                <td><?php echo $data['slots']; ?></td>
                <td><?php echo $data['status']; ?></td>
                <td>
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>

            <?php
}
?>
        </table>

        <?php mysqli_close($con); // Close connection ?>

    </div>

    <diV>
        <form align="right" name="form1" method="post" action="">
            <label class="logoutLblPos">
                <input name="submit2" type="submit" id="submit2" value="LOG OUT">
            </label>
        </form>
    </diV>



    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>

</body>

</html>