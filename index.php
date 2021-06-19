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
        <title>Online වෙසක්  සුබපැතුම්  - මුල්පිටුව</title>

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
        // put your code here
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
                                <li class="active"><a href="index.php">මුල්පිටුව</a></li><!--home page-->
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
            <div class="bg1">
                <h1 id="headingR" class="heading">🙏<br>ඔබ සැමට<br>පින්බර වෙසක් මංගල්‍යයක් <br>වේවා !!</h1>
                <p class="title text-center">මෙම පැතුම<br>STS Software Development වෙතින් <br>ආදරණිය ඔබ වෙත.</p>
            </div>
        </div>

        <div class="container">
            <div class="bg2 text-center">
                <h1 id="heading1R" class="heading1">ඔබේ ප්‍රියතමයන්ට වෙසක් සුබපැතුම්  පත්‍රයක්  යවන්න</h1>
                <a id="buttonRi" class="btn btn-lg btn-success button" href="introduction.html" role="button" title="හැදින්වීමේ පිටුවට යාමට ඔබන්න">පිවිසෙන්න</a>
            </div>
        </div>
    </body>
</html>
