<?php session_start()?>


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

        .line1 {
            color: black;
        }

        .description {
            margin-top: 10px;
            font-family: 'Josefin Sans', sans-serif;
            margin-left: 5px;
            margin-right: 40px;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: #005c00;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown .dropbtn {
            padding-top: 14px;
            padding-right: 16px;
            padding-bottom: 14px;
            padding-left: 19px;
        }

        .create-header {
            margin-left: 45%;
            margin-top: 2%;
            font-family: 'Oswald', sans-serif;
            font-size: 50px;
        }

        .search-header {
            margin-left: 45%;
            margin-top: 12%;
            font-family: 'Oswald', sans-serif;
            font-size: 50px;
        }

        .SignUpButton {
            margin-left: 50%;
        }

        .SignUpButton {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            left: 37%;
            top: -40%;
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

        #course-list {
            padding: 5px;

        }

        /*****************************************Searching for course**************************************/

        #myInput {
            background-image: url('/css/searchicon.png');
            /* Add a search icon to input */
            background-position: 10px 12px;
            /* Position the search icon */
            background-repeat: no-repeat;
            /* Do not repeat the icon image */
            width: 100%;
            /* Full-width */
            font-size: 16px;
            /* Increase font-size */
            padding: 12px 20px 12px 40px;
            /* Add some padding */
            border: 1px solid #ddd;
            /* Add a grey border */
            margin-bottom: 12px;
            /* Add some space below the input */
            width: 80%;
            margin-left: 16%;
            margin-top: 5%;
        }

        #myTable {
            border-collapse: collapse;
            /* Collapse borders */
            width: 80%;
            /* Full-width */
            border: 1px solid #ddd;
            /* Add a grey border */
            font-size: 18px;
            /* Increase font-size */
            margin-left: 16%;
            margin-top: -1%;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            /* Left-align text */
            padding: 12px;
            /* Add padding */
        }

        #myTable tr {
            /* Add a bottom border to all table rows */
            border-bottom: 1px solid #ddd;
        }

        #myTable tr.header,
        #myTable tr:hover {
            /* Add a grey background color to the table header and on hover */
            background-color: #f1f1f1;
        }

    </style>

    <script>
        function myFunction() {
            // Declare variables 
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }

    </script>
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

                    <li><a href="Teacher-SignupHTML.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
                    <!--<?php
                        echo $_SESSION['teacherName'] ;
                        ?>-->
                    <li><a href="Teacher-SignupHTML.php"><span class="glyphicon glyphicon-user"></span> Teacher Name</a></li>



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
                    <li id="course-list"><a href="#">
                        First Course
                        </a>
                    </li>
                    <li id="course-list"><a href="#">
                        Second Course
                        </a>
                    </li>
                    <li id="course-list"><a href="#">
                        Third Course
                        </a>
                    </li>
                    <li id="course-list"><a href="#">
                        Fourth Course
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div>
            <h1 class="create-header">
                Create A Classroom!
            </h1>
            <a href="Student-Signup.html" class="SignUpButton"><i class="fa-dribbble"></i><strong>Add Course </strong></a>
        </div>

        <!---------------------------------------Searching for an existing course------------------------------------------------------>
        <h1 class="search-header">
            Search A Classroom
        </h1>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Classrooms..">

        <table id="myTable">
            <tr class="header">
                <th style="width:60%;">Classroom Title</th>
                <th style="width:40%;">Teacher</th>
            </tr>
            <tr>
                <td><a href="#">Alfreds Futterkiste</a></td> <!--هو دا السطر, حط ال أكشن مع ال a-->
                <td>Abaas Ibn Fernas</td>
            </tr>
            <tr>
                <td>Berglunds snabbkop</td>
                <td>Albert Einstien</td>
            </tr>
            <tr>
                <td>Island Trading</td>
                <td>Ibn Siena</td>
            </tr>
            <tr>
                <td>Koniglich Essen</td>
                <td>Abdelfattah AL Sisi</td>
            </tr>
        </table>


</body>

</html>
