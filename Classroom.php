<html lang="en">

<head>
    <title>Classroom</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
    <style>
        .body {
            background-color: #fff8ea;
        }

        .Welcome {
            color: red;
        }

        .container-fluid {
            box-shadow: 1px 5px 15px;
            border-style: none;
            position: fixed;
            width: 100%;

        }

        .navbar-inverse .navbar-brand {
            color: white;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #fff;
        }

        .a_student {
            font-family: 'Oswald', sans-serif;
            font-size: 80px;
            margin-left: 10%;
            margin-top: 7%;
            display: block;
        }

        .a_teacher {
            font-family: 'Oswald', sans-serif;
            font-size: 80px;
            margin-left: 60%;
            margin-top: -9%;
            display: block;

        }

        .or {
            font-family: 'Oswald', sans-serif;
            font-size: 60px;
            margin-left: 45%;
            margin-top: 0%;
            display: block;
        }

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Noto Sans', sans-serif;
        }

        .SignUpButton {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid green;
            border-radius: 8px;
            height: 2.8em;
            width: 10em;
            padding: 0;
            outline: none;
            overflow: hidden;
            color: green;
            transition: color 0.3s 0.1s ease-out;
            text-align: center;
            line-height: 250%;
        }

        .SignUpButton::before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            content: '';
            border-radius: 50%;
            display: block;
            width: 20em;
            height: 20em;
            line-height: 20em;
            left: -5em;
            text-align: center;
            transition: box-shadow 0.5s ease-out;
            z-index: -1;
        }

        .SignUpButton:hover {
            color: #fff;
        }

        .SignUpButton:hover::before {
            box-shadow: inset 0 0 0 10em green;
        }

        .SignUpButton {
            margin-left: 17%;
            margin-top:
        }

        /*\\\\\\\\\\\\\\\\\\\\\\\\*/

        *,
        *:before,
        *:after {
            box-sizing: border-box;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            font-family: 'Noto Sans', sans-serif;
        }

        .SignUpButton1 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            margin-left: 60%;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid green;
            border-radius: 8px;
            height: 2.8em;
            width: 10em;
            padding: 0;
            outline: none;
            overflow: hidden;
            color: green;
            transition: color 0.3s 0.1s ease-out;
            text-align: center;
            line-height: 250%;
        }

        .SignUpButton1::before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            content: '';
            border-radius: 50%;
            display: block;
            width: 20em;
            height: 20em;
            line-height: 20em;
            left: -5em;
            text-align: center;
            transition: box-shadow 0.5s ease-out;
            z-index: -1;
        }

        .SignUpButton1:hover {
            color: #fff;
        }

        .SignUpButton1:hover::before {
            box-shadow: inset 0 0 0 10em green;
        }

        .SignUpButton1 {
            margin-left: 67%;
            margin-top:
        }

        .Registered {
            font-family: 'Oswald', sans-serif;
            font-size: 80px;
            margin-left: 25%;
            margin-top: 8%;
            display: block;
        }

        .SignUpButton2 {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            margin-left: 60%;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid green;
            border-radius: 8px;
            height: 2.8em;
            width: 10em;
            padding: 0;
            outline: none;
            overflow: hidden;
            color: green;
            transition: color 0.3s 0.1s ease-out;
            text-align: center;
            line-height: 250%;
        }

        .SignUpButton2::before {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            content: '';
            border-radius: 50%;
            display: block;
            width: 20em;
            height: 20em;
            line-height: 20em;
            left: -5em;
            text-align: center;
            transition: box-shadow 0.5s ease-out;
            z-index: -1;
        }

        .SignUpButton2:hover {
            color: #fff;
        }

        .SignUpButton2:hover::before {
            box-shadow: inset 0 0 0 10em green;
        }

        .SignUpButton2 {
            margin-left: 41%;
            margin-top: 45%;
        }

    </style>
</head>

<body class="body">
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
                <li><a href="Log%20in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <span class="a_student">A Student?</span>
    <span class="a_teacher">A Teacher?</span>
    <span class="or">Or</span>
    <a href="Student-Signup.php" class="SignUpButton"><i class="fa-dribbble"></i><strong>Signup as Student </strong></a>
    <a href="Teacher-SignupHTML.php" class="SignUpButton1"><i class="fa-dribbble"></i><strong>Signup as Teacher</strong></a>
    <span class="Registered">Already Registered?</span>
    <a href="Log in.php" class="SignUpButton2"><i class="fa-dribbble"></i><strong>Login</strong></a>
</body>

</html>
