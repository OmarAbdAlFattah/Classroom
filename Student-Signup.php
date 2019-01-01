<html>

<head>
    <title>Student Sign up Form</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">

    <style>
        .head-title {
            position: relative;
            left: 30%;
            margin-top: 2%;
            transform: translate(0%, -10%);
            color: green;
            font-family: 'Oswald', sans-serif;
        }

        .background-image {
            position: fixed;
            left: 0;
            right: 0;
            z-index: 1;
            display: block;
            background-image: url('E:\Computer Science\Web\MyDictionary\books and notes.jpg');
            width: 1200px;
            height: 800px;
            -webkit-filter: blur(5px);
            -moz-filter: blur(5px);
            -o-filter: blur(5px);
            -ms-filter: blur(5px);
            filter: blur(5px);
        }

        .form-group,
        button {
            color: black;
            width: 33%;
            margin-left: 35%;
            padding: 10px;
        }

        .btn-primary {
            background-color: green;
            border-color: transparent;
            font-family: 'Oswald', sans-serif;
            font-size: 20px;

        }

        .btn-primary:hover {
            background: white;
            border-color: transparent;
            color: green;
            box-shadow: 2px 7px 10px;
        }

    </style>
    
    <script>
        function formValidation() {
            var name = document.forms["regForm"]["Name"];
            var email = document.forms["regForm"]["Email"];
            var password = document.forms["regForm"]["Passwrod"];
            var confpass = document.forms["regForm"]["confPassword"];

            if (name.value == "") {
                window.alert("Please Enter Your Name...");
                name.focus();
                return false;
            }

            if (email.value == "") {
                window.alert("Please Enter Your Email...");
                email.focus();
                return false;
            }

            if (confpass.value == "") {
                window.alert("Please Confirm Your Password...");
                confpass.focus();
                return false;
            }

            if (email.value.indexOf("@", 0) < 0) {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0) {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (password.value == "") {
                window.alert("Please enter your password");
                password.focus();
                return flase;
            }
        }

    </script>
</head>

<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid" style="background-color: green">
            <div class="navbar-header">
                <a class="navbar-brand" href="Classroom.php" style="font-family: 'Gamja Flower', cursive; font-size: 40px;">Classroom</a>
            </div>
            <ul class="nav navbar-nav">
                <!--<li class="active"><a href="#">Home</a></li>-->
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="Student-Signup.php"><span class="glyphicon glyphicon-user"></span> Student Sign Up</a></li>
                <li><a href="Teacher-SignupHTML.php"><span class="glyphicon glyphicon-user"></span> Teacher Sign Up</a></li>
                <li><a href="Classroom.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <h1 class="head-title">Welcome! Please Fill-in Your Account Info</h1>

    <form class="regForm">
        <div class="form-group">
            <label><b>Username</b></label>
            <input type="text" class="form-control" name="Name">
        </div>

        <div class="form-group">
            <label><b>Email</b></label>
            <input type="email" class="form-control" name="Email">
            <small id="emailNote" class="form-text text-muted">An email will be sent to you in order to confirm your email address.</small>
        </div>

        <div class="form-group ">
            <label for="definition "><b>Password</b></label>
            <input type="password" class="form-control " name="Password">
        </div>

        <div class="form-group">
            <label for="url"><b>Confirm Password</b></label>
            <input type="password" class="form-control" name="ConfPassword">


        </div>

        <button type="submit" class="btn btn-primary">Submit and Sign-up</button>
    </form>

    
</body>

</html>
