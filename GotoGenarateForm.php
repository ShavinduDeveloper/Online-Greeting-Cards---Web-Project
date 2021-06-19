<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Online වෙසක්  සුබපැතුම්  - පිවිසෙන්න</title>

        <!--Title bar icon-->
        <link rel = "icon" href = "Resources/img/Logo.png"  type = "image/x-icon">

        <!--Bootstrap Css file-->
        <link href="Resources/files/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!--Fonts-->
        <link href="Resources/files/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!--CSS file-->
        <link href="Css/style.css" rel="stylesheet" type="text/css"/>

        <!--responcive css-->
        <link href="Css/responsive-Style.css" rel="stylesheet" type="text/css"/>

        <!--jquery file-->
        <script src="Resources/files/vendor/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>

        <!--Bootstrap js file-->
        <script src="Resources/files/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <!--Javascript File-->
        <script src="javascript/javascript.js" type="text/javascript"></script>

    </head>
    <body>
        <?php
// ----------------Database Details----------
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "database";

// ----------------Database Connection ----------
        $con = new mysqli($servername, $username, $password, $database);

        if ($con->connect_errno) {
            die("Database connection error" . $conn->connect_error);
        }

//----------< data insert to the "database" database-> "contact_information" table on view btn click>---------

        if (isset($_POST['send'])) {
            $Cus_Name = $_POST['full_name'];
            $Cus_Email = $_POST['email'];
            $Cus_Msg = $_POST['message'];
            $query = "INSERT INTO `contact_information`(`customer_no`, `customer_name`, `customer_email`, `customer_msg`) VALUES ('null','$Cus_Name','$Cus_Email','$Cus_Msg')";
            $ressult = mysqli_query($con, $query);
            if ($ressult) {
                $mesg = "<script>if(confirm('Thanks for your feedback .Go to the Home page')){document.location.href='index.php'};</script>";
                echo $mesg;
            } else {
                echo "mysql_error";
            }
        }

//----------< ata insert to the "database" database-> "card_details" table on processing btn click >---------

        if (isset($_POST['prs'])) {
            $Sender_Name = $_POST['name-sender'];
            $Reciver_Name = $_POST['name-reciver'];
            $Card_img = $_POST['img'];
            $Song = $_POST['song'];
            $query = "INSERT INTO `card_details`(`card_no`, `s_name`, `r_name`, `img_no`, `song_no`) VALUES ('null','$Sender_Name','$Reciver_Name','$Card_img','$Song')";
            $ressult = mysqli_query($con, $query);
            if ($ressult) {
                $mesg = "<script>window.alert('සුබපැතුම් පත්‍රය සැකසීම සාර්ථකයි.');</script>";
                echo $mesg;
            } else {
                echo "mysql_error";
            }
            //    header('location: GenarateForm.php');
        }
        ?>

        <!-- Navigation Bar -->
        <header>
            <nav role="navigation" class="navbar sts sts1 navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="sts-nav-wrapper">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-link">
                                <span class="sr-only"> Toggle Navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php">
                                <img src="Resources/img/Logo White.png" height="50px">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="nav-link">
                            <ul class="nav navbar-nav">
                                <li><a href="index.php">මුල්පිටුව</a></li><!--home page-->
                                <li><a href="introduction.html">හැදින්වීම</a></li><!--Introduction-->
                                <li><a href="teamMembers.html">අප සාමාජිකයින් </a></li><!--team Members-->
                                <li><a href="ContactUs.php">අවශ්‍ය උපදෙස් </a></li><!--Contact us-->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="container">
            <div class="bg2bk text-center">
                <h1 class="heading1">ඔබේ ප්‍රියතමයන්ට වෙසක් සුබපැතුම්  පත්‍රයක්  යවන්න</h1>
                <a class="btn btn-lg btn-success button" href="GenarateForm.php" role="button" title="Let's Go">පිවිසෙන්න</a>
            </div>
        </div>

        <div class="container">
            <div class="bg1L1">
                <h1 class="headingL1">🙏<br>ඔබ සැමට<br>පින්බර වෙසක් මංගල්‍යයක් <br>වේවා !!</h1>
                <p class="title12 text-center">මෙම පැතුම STS Software Development වෙතින්  ආදරණිය ඔබ වෙත.</p>
            </div>
        </div>
    </body>
</html>
