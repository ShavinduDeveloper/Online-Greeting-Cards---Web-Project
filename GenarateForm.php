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
        <title>Online වෙසක්  සුබපැතුම්  - නිර්මාණය කිරීම</title>

        <!--Title bar icon-->
        <link rel = "icon" href = "Resources/img/Logo.png"  type = "image/x-icon">

        <!-- Html2Canves js -->
        <script src="Resources/files/vendor/bootstrap-3.3.7-dist/js/html2canvas.js" type="text/javascript"></script>

        <!--Bootstrap Css file-->
        <link href="Resources/files/vendor/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!--Fonts-->
        <link href="Resources/files/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <!--CSS file-->
        <link href="Css/style.css" rel="stylesheet" type="text/css"/>

        <!--responcive css-->
        <link href="Css/responsive-Style.css" rel="stylesheet" type="text/css"/>

        <!--Ressponcive-->
        <link href="Resources/files/vendor/responsive-Style.css" rel="stylesheet" type="text/css"/>

        <!--jquery file-->
        <script src="Resources/files/vendor/bootstrap-3.3.7-dist/js/jquery-3.3.1.min.js"></script>

        <!--Bootstrap js file-->
        <script src="Resources/files/vendor/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

        <!--Javascript File-->
        <script src="javascript/javascript.js" type="text/javascript"></script>

        <script>
            function doCapture() {
                window.scrollTo(0, 0);

                var caption = $('#caption-input').val();
                if (caption === "") {
                    caption = 'Image';
                } else {
                    caption = $('#caption-input').val();
                }

                html2canvas(document.getElementById('bg')).then(function (canvas) {
                    console.log(canvas.toDataURL("image/jpeg", 0.9));
                    $('#blank').attr('href', canvas.toDataURL('image/jpeg', 0.9));
                    $('#blank').attr('download', caption + '.jpeg');
                    $('#blank')[0].click();
                });
                $("#remove").removeClass("hidden");
                $("#add").addClass("hidden");
            }
        </script>
    </head>
    <body>
        <?php
        ?>
        <form action="GotoGenarateForm.php" method="post">
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
                <div class="bg2G text-center">
                    <h2 class="heading1L">ඔබට අවශ්‍ය පරිදි වෙසක් සුබපැතුම් පත්‍රය සකසාගන්න.</h2>
                </div>
            </div>

            <div class="container">
                <div class="bg2G2 text-center">
                    <p>
                        <i class="tag">
                            කරුණාවෙන් සලකන්න : 
                        </i>
                        මෙහිදී ඔබගේ නම " යවන්නාගේ නම ඇතුලත් කරන්න. " යන තීරුවටත් සුබපැතුම්පත ලබන්නාගේ නම " ලබන්නාගේ නම ඇතුලත් කරන්න. " යන තීරුවටත් ඇතුලත් කරන්න.    
                    </p>

                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <input type="text" name="name-sender" id="sn" placeholder="යවන්නාගේ නම ඇතුලත් කරන්න." class="form-control widthf">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <h3 class="waper">විසින් .</h3>
                    </div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                        <input type="text" name="name-reciver" id="rn" placeholder="ලබන්නාගේ නම ඇතුලත් කරන්න." class="form-control widthf">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                        <h3 class="waper">වෙත.</h3>
                    </div>
                    <div class="submit-btn">
                        <div>
                            <p><input id="buttonRi" type="reset" name="reset" value="මකන්න" class="btn btn-lg btn-danger button1" role="button"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="bg2G211 text-center">
                    <p>
                        <i class="tag">
                            කරුණාවෙන් සලකන්න : 
                        </i>
                        මෙහිදී  වෙසක් සුබපැතුම් පත්‍රයේ අඩංගු වියයුතු ඡයාරූපය ඔබට තෝරාගත හැකිය.
                    </p>

                    <div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="6500" data-pause="non">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel1" data-slide-to="1"></li>
                            <li data-target="#carousel1" data-slide-to="2"></li>
                            <li data-target="#carousel1" data-slide-to="3"></li>
                            <li data-target="#carousel1" data-slide-to="4"></li>
                            <li data-target="#carousel1" data-slide-to="5"></li>
                            <li data-target="#carousel1" data-slide-to="6"></li>
                            <li data-target="#carousel1" data-slide-to="7"></li>
                            <li data-target="#carousel1" data-slide-to="8"></li>
                            <li data-target="#carousel1" data-slide-to="9"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (1).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (1).jpg" checked><h4>01</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (2).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (2).jpg"><h4>02</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (3).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (3).jpg" ><h4>03</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (4).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (4).jpg" ><h4>04</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (5).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (5).jpg" ><h4>05</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (6).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (6).jpg" ><h4>06</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (7).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (7).jpg" ><h4>07</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (8).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (8).jpg" ><h4>08</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (9).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (9).jpg" ><h4>09</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-image">
                                    <center><img src="Resources/img/Card img/img (10).jpg" class="img-responsive img-coner"  style="width: 300px;" alt="0003"/></center>
                                    <div class="text-center">
                                        <input type="radio" id="img" name="img" value="Resources/img/Card img/img (10).jpg" ><h4>10</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="container">
                <div class="bg2G211 text-center">
                    <p>
                        <i class="tag">
                            කරුණාවෙන් සලකන්න : 
                        </i>
                        මෙහිදී  වෙසක් සුබපැතුම් පත්‍රයේ අඩංගු වියයුතු සුබපැතුම් කවිය ඔබට තෝරාගත හැකිය.
                    </p>

                    <div id="carousel2" class="carousel slide" data-ride="carousel" data-interval="8000" data-pause="non">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel2" data-slide-to="1"></li>
                            <li data-target="#carousel2" data-slide-to="2"></li>
                            <li data-target="#carousel2" data-slide-to="3"></li>
                            <li data-target="#carousel2" data-slide-to="4"></li>
                            <li data-target="#carousel2" data-slide-to="5"></li>
                            <li data-target="#carousel2" data-slide-to="6"></li>
                            <li data-target="#carousel2" data-slide-to="7"></li>
                            <li data-target="#carousel2" data-slide-to="8"></li>
                            <li data-target="#carousel2" data-slide-to="9"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/01-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/01-song.JPG" checked><h4>01</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/02-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/02-song.JPG"><h4>02</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/03-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/03-song.JPG" ><h4>03</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/04-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/04-song.JPG" ><h4>04</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/05-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/05-song.JPG" ><h4>05</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/06-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/06-song.JPG" ><h4>06</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/07-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/07-song.JPG" ><h4>07</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/08-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/08-song.JPG" ><h4>08</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/09-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/09-song.JPG" ><h4>09</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card-song">
                                    <img src="Resources/img/card-song/10-song.JPG" class="img-responsive height-i" alt=""/>
                                    <div class="text-center">
                                        <input type="radio" id="song" name="song" value="Resources/img/card-song/10-song.JPG" ><h4>10</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel2" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel2" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <div id="hide1" class="container">
                <div class="bg2G2 text-center">
                    <p>
                        <i class="tag">
                            කරුණාවෙන් සලකන්න : 
                        </i>
                        වෙසක් සුබපැතුම් පත්‍රය පරික්ෂා කර බැලීමට " පරික්ෂා කරන්න බොත්තම " ඔබන්න.
                    </p>
                    <input id="buttonRi" type="button" class="btn btn-lg btn-success button" name="show" value="පරික්ෂා කරන්න" data-toggle="modal" data-target=".bd-example-modal-lg" role="button" title="Let's Go" onclick="remove()">
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-close fa-2x" style="color: red;"></i>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div id="bg" class="row back">
                                <div class="back">
                                    <div class="black">
                                        <!--==============================================================================================================-->
                                        <div class="container-fluid">
                                            <div class="wid">
                                                <div id="dimg" class="col-lg-6" style="color: #fff;">
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="col-lg-12">
                                                        <div id="dsong" class="card-song-desply">
<!--                                                            <p style="color: #FFF;">
                                                            පුන් සද හිනැහී බලා                  සිටිනවා 
                                                            <br>
                                                            තරු කැට දිලි දිලි නුවන්         තෙමනවා
                                                            <br>
                                                            බෝපත් හිමිහිට පවන්              සලනවා
                                                            <br>
                                                            බෝමලුවේ වැලි කැට ගත    සනසනවා 
                                                            <br><br>
                                                            <i class="text">- පසන් කෑරගල -</i>
                                                        </p>-->
<!--                                                            <p style="color: #FFF;">
                                                            නිවන් සොයන්නට පෙරමන්       බලනා
                                                            <br>
                                                            නුවන් පියා බුදු බන සිහි               කරනා
                                                            <br>
                                                            සවන් රැසට හිමි ගුන ගැයුම්  ගලන්නා
                                                            <br>
                                                            සිත නිවනින් තව දුරක         නොයන්නා 
                                                            <br><br>
                                                            <i class="text">- පසන් කෑරගල -</i>
                                                        </p>-->
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">

                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                            <p id="snd" class="displayF"></p>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-0">
                                                            <h3 class="waper12" style="color: #fff;">විසින් </h3>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                                            <p id="rnd" class="displayF">
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-0">
                                                            <h3 class="waper12" style="color: #fff;">වෙත</h3>
                                                        </div>
                                                        <div id="opding" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <img src="Resources/img/Logo White.png" style="width: 100px; margin: 55px auto 5px auto" class="img-responsive center-block" alt=""/>
                                                            <p style="color: #FFF;" class="title-card">නිර්මාණය<br>STS Software Develpment<br> වෙතිනි.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--==============================================================================================================-->
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="col-lg-9 col-md-9" style="padding: 2px;">
                                <input type="text" name="caption-input" id="caption-input" placeholder="සුරකියයුතු නම ඇතුලත් කරන්න " class="widthf23">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12" style="padding: 2px">
                                <button id="add" type="button" class="btn btn-success widthf112" onclick="doCapture();" >Download as Image</button>
                                <a href="" id="blank"></a>
                                <input id="remove" type="submit" class="btn btn-lg btn-success widthf112 hidden" name="prs" value="සකසන්න" title="Let's Go">
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12" style="padding: 2px;">
                                <button type="button" class="btn btn-danger widthf2" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
