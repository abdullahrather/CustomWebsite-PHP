<!DOCTYPE html>
<html lang="en-US">

<head>

    <?php include_once "GoogleAnalytics.php"; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/fonts.css' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        County Medical Private Medical Insurance | Making A Claim </title>
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="icon" />
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/blog-post5021.css?v=1675786018" />

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
        <?php include_once "header.php";
        include_once "get-quote-banner.php"; ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 out-patient-wrapper">
                            <h3 class="heading-text">Making a Claim UNDER YOUR COUNTY MEDICAL PLAN</h3>

                            <p>Should you wish to make a claim on your policy or have any questions as to whether a condition is covered by this policy, please call the County Medical helpline&nbsp;on <b>0800 037 0036</b>&nbsp;between 9am to 5.30pm Monday to Friday (there is a 24 hour messaging system outside of these hours), or e-mail us at <strong>claims@countymedical.co.uk</strong><br />
                                <br />
                                &nbsp;
                            </p>
                            <br />
                            <!--contact--><!--//contat-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 out-patient-wrapper">
                <div class="col-sm-7 no-padding contact-wrapper">
                    <form method="post" id="ClaimMessageIndexForm" accept-charset="utf-8">
                        <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input name="data[ClaimMessage][name]" placeholder="Your Name" class="form-control" maxlength="255" type="text" id="ClaimMessageName" required="required" />
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                            <input name="data[ClaimMessage][policy_no]" placeholder="Your Policy Number" class="form-control" maxlength="255" type="text" id="ClaimMessagePolicyNo" required="required" />
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-question-circle"></i></span>
                            <input name="data[ClaimMessage][complain]" placeholder="Nature of Complaint" class="form-control" type="text" id="ClaimMessageComplain" />
                        </div>
                        <div class="input-group form-group">
                            <span class="input-group-addon"><i class="fa fa-stethoscope"></i></span>
                            <input name="data[ClaimMessage][diagnosis]" placeholder="Who made the diagnosis" class="form-control" maxlength="255" type="text" id="ClaimMessageDiagnosis" required="required" />
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-blue">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5 claim-bg">
                </div>
                <!--//contat-->
            </div>
        </div>
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