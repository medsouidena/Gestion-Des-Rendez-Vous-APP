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
    <title>Académie de l'Emploi | CONNEXION</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo_87 - Copie.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- toastr -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

</head>

<body class="vh-100">
<?php if(isset($_GET['Alter'])){ 
  echo $_GET['Alter']; 
}
?>
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-12">
                    <div class="authincation-content">
                        <div class="row">
                            <div class="col-xl-5">
                                <img src="images/Login-rafiki.png" alt="" style="width: 500px;height: 550px;">
                            </div>
                            <div class="col-xl-7">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo_87.png" alt="" style="width: 300px;height: 100px;">
									</div>
                                    <h3 class="text-center mb-4">Académie de l'Emploi </h3>
                                    <form action="code php/Compte_connexion.php" method="POST">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>email</strong></label>
                                            <input type="text" class="form-control" name="usename">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Mot de passe</strong></label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <a href="page-forgot-password.php">Mot de passe oublié ?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-block" style="background-color: #DFA700; color: aliceblue;"  name="login" value="login">CONNEXION</button>
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