<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Gamja+Flower" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Oswald:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
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

        .head-title {
            position: relative;
            left: 48%;
            margin-top: 2%;
            transform: translate(0%, -10%);
            color: #525252;
            font-family: 'Oswald', sans-serif;
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
            width: 20%;
            margin-left: 41%;
        }

        .btn bt-primary {
            width: 20%;
        }

        .btn-primary:hover {
            background: white;
            border-color: transparent;
            color: green;
            box-shadow: 2px 7px 10px;
        }

        .email {
            margin-bottom: 30%;
            padding-bottom: 0%px;
        }

        .form-control {
            margin-top: 8%;
        }

        .form {
            height: 8%;
        }
        
        #tl {
            margin-left: 30%;
        }
        
        #sl {
            margin-left: 5px;
        }

    </style>

    <script>
        function formValidation() {

            var email = document.forms["regForm"]["Email"];
            var password = document.forms["regForm"]["Password"];
            var radios = document.getElementsByName("position"); //array of elements, DOM
            var formValid = false;
            var i = 0;

            if (email.value == "") {
                window.alert("Please Enter Your Email...");
                email.focus();
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

            if (true) {
                while (!formValid && i < radios.length) {
                    if (radios[i].checked) formValid = true;
                    i++;
                }

                if (!formValid) {
                    window.alert("Must check some option!");
                    return formValid;
                }
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
                <li><a href="Log%20in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </nav>

    <h1 class="head-title">LogIn</h1>

    <form method="post" name="regForm" onsubmit="return formValidation();">

        <div class="form-group">
            <label><b class="email">Email</b></label>
            <input type="email" class="form-control" name="Email">
            <small id="emailNote" class="form-text text-muted">An email will be sent to you in order to confirm your email address.</small>
        </div>

        <div class="form-group ">
            <label for="definition "><b>Password</b></label>
            <input type="password" class="form-control " name="Password">
        </div>

        <!-- -->



        <button type="submit" class="btn btn-primary" id = "tl" >Teacher Login</button>
        <button type="submit" class="btn btn-primary" id = "sl">Student Login</button>

    </form>
</body>

</html>
