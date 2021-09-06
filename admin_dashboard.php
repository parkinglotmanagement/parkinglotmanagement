<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="table_script.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "./css/styles.css">
    <style>
        body {
            background-image: url('./background.jpg');
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
        <a href="./admin_dashboard.php"><i class="material-icons">directions_car</i> SLOTS</a>
        <a href="./user.php"><i class="material-icons">person</i> USER</a>
        <a href="./admin_account.php"><i class="material-icons">account_circle</i> ACCOUNT</a>
    </div>
    <div class=" container_dashboard">
        <table style="width:100%" id="parking" cellpadding="5">
            <tr>
                <th>TOTAL PARKED</th>
                <th>TOTAL SLOTS</th>
            </tr>
            <tr>
                <td>4</td>
                <td>9</td>
            </tr>
        </table>
        <br>
        <br>
        <table style="width:100%" id="parking">
            <tr>
                <th>SLOTS</th>
                <th>STATUS</th>
            </tr>
            <tr>
                <td>SLOT 1</td>
                <td>
                    <form action="">
                        <select name="status" id="status">
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                        </select>
                    </form>
                </td>
            </tr>
            <tr>
                <td>SLOT 2</td>
                <td>
                    <form action="">
                        <select name="status" id="status">
                            <option value="available">Available</option>
                            <option value="occupied">Occupied</option>
                        </select>
                    </form>
                </td>
            </tr>
        </table>
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