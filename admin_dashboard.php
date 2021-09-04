<!DOCTYPE html>
<html>

<head>
    <script type="text/javascript" src="table_script.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-image: url('./background.jpg');
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: OpenSans;
        }

        .container {
            margin-right: 25%;
            margin-left: 25%;
            margin-top: 10%;
            margin-bottom: 10%;
            width: 50%;
            height: 10%;
            padding: 10%;
            opacity: 0.89;
            border-radius: 10px;
            background-color: #405840;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #405840;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #ffff;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }

        i.custom {
            font-size: 6em;
            color: green;
        }

        .logoutLblPos {
            position: fixed;
            right: 10px;
            top: 5px;
            font-size: 20px;
        }

        #parking {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #parking td,
        #parking th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #parking tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #parking tr:hover {
            background-color: #ddd;
        }

        #parking th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
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
    <div class=" container">
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