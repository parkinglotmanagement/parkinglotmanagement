<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    body {
        background-image: url('./background.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
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

    .title {
        width: 100%;
        height: 69px;
        margin: 10%;
        opacity: 0.89;
        font-family: OpenSans;
        font-size: 36px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #fff;
    }

    .input {
        width: 100%;
        height: 100%;
        padding: 5%;
        margin: 1%;
        opacity: 0.89;
        border-radius: 10px;
        background-color: #fff;
        font-family: OpenSans;
        font-size: 14px;
        font-weight: normal;
        font-stretch: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: left;
        color: rgba(0, 0, 0, 0.25);
    }

    .button {
        width: 50%;
        height: 100%;
        margin-left: 27%;
        padding: 3%;
        opacity: 0.89;
        border-radius: 20px;
        background-color: #0ba9ff;
        font-family: OpenSans;
        font-size: 18px;
        font-weight: normal;
        font-style: normal;
        line-height: normal;
        letter-spacing: normal;
        text-align: center;
        color: #fff;
    }
</style>

<body>
    <div class=" container">
        <form name="form1" method="post" action="">
            <span class="title">PLMS</span>
            <br>
            <br>
            <input class="input" placeholder="Email" name="email">
            <br>
            <br>
            <input class="input" placeholder="Password" name="pwd">
            <br>
            <br>
            <button button class="button" href="./dashboard.php">LOGIN</button>
        </form>


    </div>

    <script type="module">
        // Import the functions you need from the SDKs you need
        import {
            initializeApp
        } from "https://www.gstatic.com/firebasejs/9.0.1/firebase-app.js";
        import {
            getAnalytics
        } from "https://www.gstatic.com/firebasejs/9.0.1/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyAeaehNlJAJRYMHMOcgxgckq6mDk5Oe33o",
            authDomain: "parkinglotmanagement-1c791.firebaseapp.com",
            projectId: "parkinglotmanagement-1c791",
            storageBucket: "parkinglotmanagement-1c791.appspot.com",
            messagingSenderId: "396616038600",
            appId: "1:396616038600:web:814a8aa3b946bea8928dfd",
            measurementId: "G-HRLQHLHSL5"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);

        var messagesRef = firebase.database().ref('contactformmessages');

        $('#contactForm').submit(function(e) {
            e.preventDefault();

            var newMessageRef = messagesRef.push();
            newMessageRef.set({
                name: $('.fullname').val(),
                email: $('.email').val(),
                subject: $('.subject').val(),
                message: $('.message').val()
            });

            $('.success-message').show();

            $('#contactForm')[0].reset();
        });
    </script>


</body>

</html>