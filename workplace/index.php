<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">

<head>

    <?php include_once "GoogleAnalytics.php"; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/fonts.css' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        County Medical Private Medical Insurance | Home Page </title>
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="icon" />
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/blog-post2703.css?v=1675785989" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jwplayer.js"></script>
    <base />
    <script>
        jwplayer.key = "hlWeT6cffk8+Iuvvq20KSlgAxqwefjXEY40dJw==";
    </script>
    <style>
        .error-message {
            color: red;
        }

        textarea {
            resize: none;
        }
    </style>
</head>

<body>
    <div class="body-wrapper">
        <?php include_once "header.php"; ?>
        <!--main-->
        <div class="container-fluid banner-fix"><!--quote-->
            <!--        <div class="text-center" id="base">
                    <p>
        <a href="http://www.countymedical.co.uk/get-a-quote">Get A Quote</a>                        <a href="#">Get A Quote</a>
                    </p>
                </div>-->
            <!--//quote--><!--banner-->

            <div class="row" style="margin-top:14px;">
                <!--<div class="col-sm-12 banner-wrapper1" style="background-image: url('images/banners/banner_20160704050639.jpg')">-->
                <div class="">
                    <img src="images/Cm_Website_Header.jpg" style="width: 100%;">
                </div>
                <!--            <div class="col-sm-12 banner-wrapper1" style="background:#1B7894;">
                <div class="banner_list_wrap">
                    <ul class="banner_list">
                        <li>Covers over 400 common waiting list operations</li>
                        <li>Eases the strain on the NHS</li>
                        <li>Quick treatment in top quality facilities</li>
                        <li>Consultant support to guide you through your treatment</li>
                    </ul>
                </div>
                <div class="banner_video" id="banner_video">
                    <video autoplay="" controls="" height="196px">
                        <source src="images/country_medical_final_2.mov" type="video/mp4">
                    </video>
                </div>
                <script type="text/javascript">
                    var screen_width = $(window).width();
                    var player_width = '380';
                    if(screen_width < 395){
                        player_width = (screen_width - 20);
                    }
                    window.jwplayer("banner_video").setup({
                        flashplayer: "player.swf",
                        file: "images/country_medical_final_2.mp4",
                        image: "/images/CM_video_thumb.JPG",
//                        autostart: true,
                        height: "270",
                        width: player_width
                    });
                </script>
                <div class="banner_btns">
                    <a class="btn btn-lg" href="get-a-quote.php">Get a Quote</a>
                    <a class="btn btn-lg" href="https://buy.countymedical.co.uk/Public/RetrieveQuote" target="__blank">Retrieve a Quote</a>
                    <a class="btn btn-lg" href="brochures/get_brochure">Request Brochure</a>
                </div>
            </div>-->
            </div>
            <!--//banner-->
        </div><!--feature-->

        <div class="container">
            <div class="row" id="feature">
                <!--            <div class="col-sm-10 col-md-10 col-lg-10 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 text-center bg-white-tp">
                <h1 style="text-align: center;"><span style="font-size: 28px;"><strong>Affordable Private Health Insurance<br />
Designed and Managed by Doctors&nbsp;<br />
A Personal Service for Individuals and Small Businesses<br />
Free Access To BMI Hospital Network<br />
Freedom To</strong></span><span style="font-size: 28px;"><strong>&nbsp;Choose Your Preferred Hospital</strong></span></h1>

<p>&nbsp;</p>
                <hr /></div>-->
                <!--item1-->
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/mother-daughter-video-call.jpg" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5>
                            <p><span style="color:#059CD1;"><strong>GET A QUOTE</strong></span></p>
                        </h5>
                        <p>
                        <p><span style="font-size:16px;">Getting a quote for you, your family or your business is quick and easy</span></p>
                        </p>
                        <a href="get-a-quote.php">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/20-25-years-old-man-blazer-blurred-background-2662794.jpg" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5>
                            <p><span style="color:#059CD1;"><strong>OUR PREMIUMS</strong></span></p>
                        </h5>
                        <p>
                        <p><span style="font-size:16px;">View our full list of affordable premiums here</span></p>
                        </p>
                        <a href="premiums.php">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/55daaefa0caea_feature1.png" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5></h5>
                        <p>
                        <p><span style="font-size:16px;">The Surgery Only Plan covers you should you need surgery or a procedure approved by us. You will save on the premium but will&nbsp;need to fund any outpatient costs yourself</span>.</p>
                        </p>
                        <a href="surgery.php">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/55dab0de1a54b_feature2.png" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5></h5>
                        <p>
                        <p><span style="font-size:16px;">The Outpatients and Surgery Plan covers you for approved surgical procedures as well as outpatient diagnosis and consultations.​</span></p>
                        </p>
                        <a href="outpatients-and-surgery.php">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/55dab148da9c5_feature3.png" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5></h5>
                        <p>
                        <p><span style="font-size:16px;">Cancer Benefit is an optional addition to&nbsp;your policy provides a </span><span style="font-size:16px;">one-off</span><span style="font-size:16px;"> payment to you should you develop cancer</span></p>
                        </p>
                        <a href="cancer-cover.php">Learn More</a>
                    </div>
                </div>
                <div class="col-sm-6 feature-wrapper">
                    <div class="col-sm-5 no-padding">
                        <div class="img-holder"><img class="img-responsive" src="images/55dab16436bc5_feature4.png" /></div>
                    </div>

                    <div class="col-sm-7 desc_feature">
                        <h5></h5>
                        <p>
                        <p><span style="color:#000000;"><span style="font-size:16px;">With our Membership Benefits we can provide consultant support when you are ill as well as concessions on health assessments.</span></span></p>
                        </p>
                        <a href="additional-member-benefits.php">Learn More</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="service">
        <!--service-->
        <div class="col-md-7 service-wrapper">
            <h3>Our Medical Services</h3>
            <ul>
                <li>Breast surgery</li>
                <li>Hip surgery</li>
                <li>Cardiology</li>
                <li>Knee surgery</li>
                <li>Cardiothoracic surgery</li>
                <li>Neurology</li>
                <li>Colorectal surgery</li>
                <li>Ophthalmology</li>
                <li>Dermatology</li>
                <li>Paediatric ear, nose and throat</li>
                <li>Ear, nose and throat surgery</li>
                <li>Paediatrics</li>
                <li>Foot and ankle surgery</li>
                <li>Paediatric surgery (over 2s)</li>
                <li>Gastroenterology</li>
                <li>Rheumatology</li>
                <li>General medicine</li>
                <li>Shoulder and elbow surgery</li>
                <li>Liver, gall bladder surgery</li>
                <li>Spinal orthopaedic surgery</li>
                <li>General surgery</li>
                <li>Upper gastrointestinal surgery</li>
                <li>Gynaecology</li>
                <li>Urology</li>
                <li>Hand and wrist surgery</li>
                <li>Vascular surgery</li>
            </ul>
        </div>
        <!--//services-->
        <!--contact-->
        <div class="col-md-5 contact-wrapper">
            <div class="col-md-12">
                <h3>Request More Information</h3>
                <form id="MoreInfoIndexForm" method="post" accept-charset="utf-8">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="data[MoreInfo][firstname]" placeholder="First name" class="form-control" maxlength="255" type="text" id="MoreInfoFirstname" required="required" />
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input name="data[MoreInfo][lastname]" placeholder="Last name" class="form-control" maxlength="255" type="text" id="MoreInfoLastname" required="required" />
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input name="data[MoreInfo][email]" placeholder="Email Address" class="form-control" maxlength="255" type="email" id="MoreInfoEmail" required="required" />
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                        <input name="data[MoreInfo][phone]" placeholder="Telephone" class="form-control" maxlength="255" type="tel" id="MoreInfoPhone" required="required" />
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-align-left"></i></span>
                        <textarea name="data[MoreInfo][massage]" placeholder="Message" class="form-control" id="MoreInfoMassage" required="required"></textarea>
                    </div>
                    <div class="input-group form-group">
                        <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                        <input style="height: 45px;" name="captcha" placeholder="Enter the code here" class="form-control" maxlength="255" type="text" id="captcha" required="required" />
                        <span class="input-group-addon"><img src="captcha.php" alt="Captcha"></span>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-blue" name="submit">Send</button>
                    </div>
                </form>
                <?php include_once "MoreInfoIndexFormAPI.php" ?>
            </div>
            <div class="col-md-12">
                <a class="btn btn-lg btn-blue" href="get_brochure.php" style="width: 100% !important;">Request Brochure</a>
            </div>
        </div>
        <!--//contat-->
    </div>
    <style>
        table p {
            margin: 0px 6px 10px;
        }
    </style>
    <div class="clearfix"></div>
    <?php include_once "footer.php"; ?>
    <!--//footer-->
    </div>
    <?php include_once "scripts.php"; ?>

</body>

</html>