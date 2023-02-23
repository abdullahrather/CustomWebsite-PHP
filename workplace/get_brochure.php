<!DOCTYPE html>
<html lang="en-US">

<head>

    <?php include_once "GoogleAnalytics.php"; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/fonts.css' rel='stylesheet' type='text/css' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        County Medical Private Medical Insurance </title>
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="icon" />
    <link href="images/sys_img/favicon_icon.png" type="image/x-icon" rel="shortcut icon" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/blog-post174e.css?v=1675786016" />

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
        <div class="row">
            <div class="col-sm-6 col-md-offset-3">
                <form class="form" role="form" enctype="multipart/form-data" id="BrochureGetBrochureForm" method="post" accept-charset="utf-8">
                    <div style="display:none;"><input type="hidden" name="_method" value="POST" /></div>
                    <div class="form-group">
                        <label>Name</label>
                        <input name="data[Brochure][name]" class="form-control" placeholder="Name" required="required" type="text" id="BrochureName" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="data[Brochure][email]" class="form-control" placeholder="Email" required="required" type="email" id="BrochureEmail" />
                    </div>
                    <div class="form-group">
                        <label>Contact Number (optional)</label>
                        <input name="data[Brochure][phone]" class="form-control" placeholder="Contact Number" type="tel" id="BrochurePhone" />
                    </div>
                    <div class="form-group">
                        <label>Captcha</label>
                        <div class="input-group">
                            <input style="height: 45px;" name="captcha" placeholder="Enter the code here" class="form-control" maxlength="255" type="text" id="captcha" required="required" />
                            <span class="input-group-addon"><img src="captcha.php" alt="Captcha"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>
                            <input type="checkbox" name="is_agree" id="is_agree" value="0" />
                            <span>Please tick the box if you're happy for us to contact you further regarding County Medical products.</span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">
                            <i class="icon-save"></i>
                            Send
                        </button>
                    </div>
                </form>
                <div class="form-group">
                    <label>For details of how we use your data please refer to our <a href="privacy.php">Privacy Policy</a></label>
                </div>
            </div>
        </div>

        <script>
            $('#is_agree').click(function() {
                var checked_val = 0;

                if ($(this).prop("checked") == true) {
                    checked_val = 1;
                } else if ($(this).prop("checked") == false) {
                    checked_val = 0;
                }

                $(this).val(checked_val);
            });
        </script>
        <div class="clearfix"></div>
        <?php include_once "footer.php"; ?>
        <!--//footer-->
    </div>
    <?php include_once "scripts.php"; ?>

</body>

</html>