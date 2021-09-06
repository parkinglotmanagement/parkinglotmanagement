<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="./js/table_script.js"></script>
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
        <table align="center" style="width:100%" id="parking" cellpadding="5" cellspacing="2">
            <tr>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>PASSWORD</th>
                <th>ACTION</th>
            </tr>
            <tr id="row1">
                <td id="name_row1">Jhon Doe</td>
                <td id="email_row1">jhondoe@gmail.com</td>
                <td id="password_row1">********</td>
                <td>
                    <input type="button" id="edit_button1" value="Edit" class="edit" onclick="edit_row('1')">
                    <input type="button" id="save_button1" value="Save" class="save" onclick="save_row('1')">
                    <input type="button" value="Delete" class="delete" onclick="delete_row('1')">
                </td>
            </tr>

            <tr id="row2">
                <td id="name_row2">Jhon Doe</td>
                <td id="email_row2">jhondoe@gmail.com</td>
                <td id="password_row2">********</td>
                <td>
                    <input type="button" id="edit_button2" value="Edit" class="edit" onclick="edit_row('2')">
                    <input type="button" id="save_button2" value="Save" class="save" onclick="save_row('2')">
                    <input type="button" value="Delete" class="delete" onclick="delete_row('2')">
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