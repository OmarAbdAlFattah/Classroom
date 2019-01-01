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
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

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

        .sideBar {
            width: 13%;
            height: 100%;
            margin-left: 0px;
            margin-top: -20px;
            border-radius: 1.5%;
            background-color: green;
            box-shadow: 5px 10px 8px #888888;
            font-family: 'Oswald', sans-serif;
            position: fixed;
        }

        .Name {
            font-family: 'Lato', sans-serif;
            font-size: 30px;
            color: black;
            margin-left: 16px;
            margin-top: 2%;
        }

        .description {
            margin-top: 10px;
            font-family: 'Josefin Sans', sans-serif;
            margin-left: 5px;
            margin-right: 40px;
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
            width: 10%;
            margin-left: 46%;

        }

        .btn-primary:hover {
            background: white;
            border-color: transparent;
            color: green;
            box-shadow: 2px 7px 10px;
        }



        .head-title {
            position: relative;
            left: 42%;
            margin-top: 2%;
            transform: translate(0%, -10%);
            color: black;
            font-family: 'Oswald', sans-serif;

        }
        
        #course-list{
            padding: 5px;
            
        }

    </style>
</head>

<body>
    <?php

        $search_value = "alimaged98@gmail.com" ;

        $serverName = 'localhost' ;
        $userName = 'root' ; 
        $password = '' ;
        $dbName = 'classroom' ; 

        $connection = new mysqli($serverName , $userName , $password , $dbName) ;

        if ($connection->connect_error)
        {
            echo 'Connection Faild: '.$connection->connect_error;
        }
        else
        {
             $sql="SELECT * FROM teacher WHERE Email LIKE '$search_value'";
             $res=$connection->query($sql);
             /*while ($row= $res->fetch_assoc())
             {
                 echo $row["StudentName"];
             }*/
        }
    ?>

        <nav class="navbar navbar-inverse">
            <div class="container-fluid" style="background-color: green">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: 'Gamja Flower', cursive; font-size: 40px;">Classroom</a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    
                        <li><a href="Teacher-SignupHTML.php" ><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                    <li><a><span class="glyphicon glyphicon-user"></span>Teacher Name
                    <!--<?php
                        echo $_SESSION['teacherName'] ;
                        ?>-->
                    
                    </a>
                    </li>
                </ul>
        </nav>

        <div class="sideBar" onclick="showContext()">
            <div class="Name"><b>
                <!--<?php
                echo $_SESSION['teacherName'] ;
                ?>-->
                Teacher Name
            </b></div>
            <div class="Create-Courses">
                <ul>
                    <li id = "course-list"><a  href="x  ">
                        First Course
                        </a>
                    </li>
                    <li id = "course-list"><a href="#" >
                        Second Course
                        </a>
                    </li>
                    <li id = "course-list"><a href="#" >
                        Third Course
                        </a>
                    </li>
                    <li id = "course-list"><a href="#" >
                        Fourth Course
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <h1 class="head-title">Create Classroom</h1>
        <form class="regForm">
            <div class="form-group">
                <label><b>Classroom Title</b></label>
                <input type="text" class="form-control" name="Name">
            </div>
            <div class="form-group">
                <label><b>Classroom Description</b></label>
                <textarea class="form-control" rows="5" id="description"></textarea>
            </div>



            <button type="submit" class="btn btn-primary">Create...</button>
        </form>


</body>

</html>
