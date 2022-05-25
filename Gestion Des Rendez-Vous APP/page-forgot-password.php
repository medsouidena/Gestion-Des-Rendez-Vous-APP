<?php

session_start();
require_once("code php\connexionDB\connexion_php.php");



if(isset($_POST["SubmitBtn"])){

$to = $_POST["email"];
$sql = "SELECT * FROM `user` WHERE `email` = '$to' "  ;
$qr_test=mysqli_query($cn,$sql);

if($to==''){ $ok= '<script type="text/javascript">toastr.error("Veuillez votre adresse email,Svp! ")</script>';}
//Email existe
elseif($Resulte_test=mysqli_fetch_row($qr_test) ){
 

  $subject = " DETECTION DU MASQUE APP: RECUPERATION DE VOTRE MOT DE PASSE ";
  $password=$Resulte_test[5];
  $message = '
  <!doctype html>
  <html lang="en-US">
  
  <head>
      <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
      <title>Reset Password Email Template</title>
      <meta name="description" content="Reset Password Email Template.">
      <style type="text/css">
          a:hover {text-decoration: underline !important;}
      </style>
  </head>
  
  <body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
      <!--100% body table-->
      <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
          style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family:  sans-serif;">
          <tr>
              <td>
                  <table style="background-color: #f2f3f8; max-width:670px;  margin:0 auto;" width="100%" border="0"
                      align="center" cellpadding="0" cellspacing="0">
                      <tr>
                          <td style="height:80px;">&nbsp;</td>
                      </tr>
                      <tr>
                          <td style="text-align:center;">
                            <a href="http://localhost/DETECTION%20DU%20MASQUE%20%20APP/DETECTION%20DU%20MASQUE%20%20APP/page-login.php" title="logo" target="_blank">
                              <h1 style="color:#4169E1;"> DETECTION DU MASQUE APP </h1>
                              <h1 style="color:#4169E1;"> BONJOUR,'.$Resulte_test[1].'  '.$Resulte_test[2].'  </h1>
                            </a>
                          </td>
                      </tr>
                      <tr>
                          <td style="height:20px;">&nbsp;</td>
                      </tr>
                      <tr>
                          <td>
                              <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                  style="max-width:670px;background:#fff; border-radius:3px; text-align:center;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);">
                                  <tr>
                                      <td style="height:40px;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td style="padding:0 35px;">
                                          <h1 style="color:#1e1e2d; font-weight:500; margin:0;font-size:32px;font-family:sans-serif;">Vous avez demandé la réinitialisation de votre mot de passe</h1>
                                          <span
                                              style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; width:100px;"></span>
                                          <p style="color:#455056; font-size:15px;line-height:24px; margin:0;">
                                          Nous  simplement vous envoyer votre ancien mot de passe </p>
                                          <h2> - '.$password.' - </h2>
          
                                      </td>
                                  </tr>
                                  <tr>
                                      <td style="height:40px;">&nbsp;</td>
                                  </tr>
                              </table>
                          </td>
                      <tr>
                          <td style="height:20px;">&nbsp;</td>
                      </tr>
                      <tr>
                          <td style="text-align:center;">
                              <p style="font-size:14px; color:rgba(69, 80, 86, 0.7411764705882353); line-height:18px; margin:0 0 0;">&copy; <strong>DETECTION DU MASQUE APP</strong></p>
                          </td>
                      </tr>
                      <tr>
                          <td style="height:80px;">&nbsp;</td>
                      </tr>
                  </table>
              </td>
          </tr>
      </table>
      <!--/100% body table-->
  </body>
  
  </html>';
  
  $headers = "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  
  
  
  try {
    mail($to,$subject,$message,$headers);
    $_SESSION['email']=$to;
    $_SESSION['key']=$password;
    header('location:page-login.php');
  } catch (Exception $e) {
    $ok= '<script type="text/javascript">toastr.error("ERROR Email ")</script>';
  }



}else {
  $ok= '<script type="text/javascript">toastr.error("Cette adresse email est invalide ")</script>';
}




}





?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
    <title>DETECTION DU MASQUE |  MOT DE PASSE OUBLIE ?</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/face-mask-5550729_960_720.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- toastr -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>

<body class="vh-100">
<?php if(isset($ok)){ 
  echo $ok; 
}
?>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12">
                    <div class="authincation-content">
                        <div class="row">
                            <div class="col-xl-5">
                                <br>
                                <img src="images/password-bro.png" alt="" style="width: 400px;height: 400px;">
                            </div>
                            <div class="col-xl-7">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/face-mask-5550729_960_720.png" alt="" style="width: 100px;height: 100px;">
									</div>
                                    <h3 class="text-center mb-4">DETECTION DU MASQUE APP </h3>
                                    <h5>RECUPERATION DE MOT DE PASSE PAR EMAIL</h5>
                                    <br>
                                    <form  method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email </strong></label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-block" style="background-color: #FF5733; color: aliceblue;"  name="SubmitBtn" value="SubmitBtn">RECUPERATION </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>