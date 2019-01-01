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

        #course-list {
            padding: 5px;

        }

        table {
            width: 30%;
            margin-left: 20%;
            margin-right: 60%;
        }

        form {
            width: 50%;
            margin-left: 20%;
        }

        .btn-primary {
            background-color: green;
            border-color: transparent;
            font-family: 'Oswald', sans-serif;
            font-size: 20px;
            margin-top: 0%;

        }

        .btn-primary:hover {
            background: white;
            border-color: transparent;
            color: green;
            box-shadow: 2px 7px 10px;
        }

        .creating {
            margin-left: 17%;
        }

    </style>

    <script>
        var _row = null;
        // Next ID for adding a new course
        var _nextId = 1;
        // ID of course currently editing
        var _activeId = 0;

        function productBuildTableRow(id) {
            var ret =
                "<tr>" +
                "<td>" + "<a>" + "<button id = \"updateButton\" onclick=\"productDisplay(this);\">" + "Edit" + "</button>" + "</a>" + "</td>" +
                "<td>" + "<a>" + $("#productname").val() + "</a>" + "</td>" +
                "<td>" + "<a>" + $("#introdate").val() + "</a>" + "</td>" +
                "<td>" + "<a>" + $("#url").val() + "</a>" + "</td>" +
                "<td>" + "<a>" + "<button id = \"deleteButton\" onclick=\"productDelete();\">" + "X" + "</button>" + "</a>" + "</td>" +
                "</tr>"

            return ret;
        }

        function productAddToTable() {
            // First check if a <tbody> tag exists, add one if not

            if ($("#productTable tbody").length == 0) {
                $("#productTable").append("<tbody></tbody>");
            }

            // Append product to the table
            $("#productTable tbody").append(
                productBuildTableRow(_nextId));
            _nextId += 1;

        }

        function productUpdate() {
            if ($("#updateButton").text() == "Update") {
                productUpdateInTable(_activeId);
            } else {
                productAddToTable();
            }
            // Clear form fields
            formClear();
            // Focus to product name field
            $("#productname").focus();
        }

        function productUpdateInTable(id) {
            // Find Product in <table>
            var row = $("#productTable button[data-id='" + id + "']").parents("tr")[0];
            // Add changed product to table
            $(row).after(productBuildTableRow(id));
            // Remove original product
            $(row).remove();
            // Add changed product to table
            $(_row).after(productAddToTable());
            // Remove old product row
            $(_row).remove();
            // Clear form fields
            formClear();
            // Change Update Button Text
            $("#updateButton").text("Update");
        }

        function productDelete() {
            $('#deleteButton').parents("tr").remove();
        }

        function productDisplay(ctl) {
            _row = $(ctl).parents("tr");
            var cols = _row.children("td");

            _activeId = $($(cols[0]).children("button")[0]).data("id");

            $("#productname").val($(cols[1]).text());
            $("#introdate").val($(cols[2]).text());
            $("#url").val($(cols[3]).text());
            // Change Update Button Text
            $("#updateButton").text("Update");
        }

        function formClear() {
            $("#productname").val("");
            $("#introdate").val("");
            $("#url").val("");
            productDisplay(this);
        }

    </script>
</head>

<body>

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
            <!--------------------------------------------------------------------------------------------------------------------->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <table id="productTable" class="table table-bordered
                     table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th>Edit</th>
                                    <th>Material Title</th>
                                    <th>Introduction Date</th>
                                    <th>URL to PDF</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!-------------------------------------------------------------------------------------------------------------------->
            <form method="post" name="regForm" class="creating">
                <div class="form-group">
                    <label><b>Title</b></label>
                    <input id="productname" type="text" class="form-control" name="Name">
                </div>

                <div class="form-group">
                    <label><b>Description</b></label>
                    <input id="introdate" type="text" class="form-control" name="Email">
                </div>

                <div class="form-group">
                    <label><b>URL to PDF</b></label>
                    <input id="url" type="url" class="form-control" name="Email">
                </div>

                <!--<div class="form-group">
                    <label><b>Email</b></label>
                </div>-->

                <button type="button" class="btn btn-primary" onclick=" productUpdate();">Add...</button>
            </form>

    </body>

</html>
