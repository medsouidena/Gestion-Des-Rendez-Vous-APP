<?php

session_start();
require_once("code php\connexionDB\connexion_php.php");
$username=$_SESSION['user'];
$sqluser="SELECT * FROM `user` where username = '$username' ";
$resultat_User=mysqli_query($cn,$sqluser);

$sqluser2="SELECT * FROM `user` ";
$resultat_User2=mysqli_query($cn,$sqluser2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <title>DETECTION DU MASQUE | GESTION D'UTILISATEURS </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/face-mask-5550729_960_720.png">
	<link rel="stylesheet" href="vendor/chartist/css/chartist.min.css">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

	 <!-- google charts -->
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- toastr -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


	
</head>
<body>
<?php if(isset($_GET['Alter'])){ 
  echo $_GET['Alter']; 
}
?>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
         
				
            

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		

		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							
                        </div>
                        <ul class="navbar-nav header-right main-notification">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="#">
									<i id="icon-light" class="fa fa-sun-o"></i>
                                    <i id="icon-dark" class="fa fa-moon-o"></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                    <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                </a>
							</li>
						
							
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
									<?php  while($ligne_User=mysqli_fetch_row($resultat_User)) { ?>
										<span> <?php echo $username; ?></span>
										<small> <?php echo $ligne_User[1]." ". $ligne_User[2]?></small>
									<?php } ?>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="page-login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
			</div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<div class="main-profile">
				<img src="images/face-mask-5550729_960_720.png" alt="" style="width: 100px;height: 100px;">

					<h3 class="name"><span class="font-w400">DETECTION DU MASQUE APP</h3>
				</div>
				<ul class="metismenu" id="menu">
					<li>
						<a class="has-arrow " href="index.php" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">Statistiques</span>
						</a>
                    </li>
                </ul>
				<ul class="metismenu" id="menu">
					<li>
						<a class="has-arrow " href="user-list-datatable.php" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">Gestion utilisateurs</span>
						</a>
                    </li>
                </ul>
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->




		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
			<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">GESTION D'UTILISTEURS</h2>
				</div>
				<div class="card">
					<div class="card-header d-sm-flex d-block">
						<div class="mr-auto mb-sm-0 mb-3">
							<h4 class="card-title mb-2">LISTE D'UTILISATEURS</h4>
						</div>
						<a href="javascript:void(0);" class="btn btn-info">+ AJOUTER UTILISATEUR</a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table style-1" id="ListDatatableView">
								<thead>
									<tr>
										<th>#</th>
										<th>USERNAME</th>
										<th>EMAIL</th>
										<th>ETAT</th>
										<th>DATE DERNIER CONNEXION</th>
										<th>@IP DERNIER CONNEXION</th>
										<th>ACTION</th>
									</tr>
								</thead>
								<tbody>
								<?php $i=0 ?>
								<?php  
									while($ligne_User2=mysqli_fetch_row($resultat_User2)) { 
								 	$i= $i+1 ;
								?>	
									<tr>
										<td>
											<h6><?php echo $i ?></h6>
										</td>
										<td>
											<div class="media style-1">
												<div class="media-body">
													<h6> <?php echo $ligne_User2[3]?></h6>
													<span><a href="#" class="__cf_email__" data-cfemail="6c060304020803092c0b010d0500420f0301">[ <?php echo $ligne_User2[1]?>&#160; <?php echo $ligne_User2[2]?>]</a></span>
												</div>
											</div>
										</td>
										<td>
											<div>
												<h6> <?php echo $ligne_User2[4]?></h6>
											</div>
										</td>
										<td>
											<div>
												<h6 class="text-primary">
												<?php 
												 if($ligne_User2[6]=='1') {echo 'ACTIVE';}
												 if($ligne_User2[6]=='0') {echo 'DESACTIVE';}
												?>
												</h6>
											</div>
										</td>
										<td>
											<div>
												<h6> <?php echo $ligne_User2[7]?></h6>
											</div>
										</td>
										<td>
											<div>
												<h6> <?php echo $ligne_User2[8]?></h6>
											</div>
										</td>
										<td>
											<!--  ACTIVER COMPTE -->
											<a style="color: red;" onclick="return confirm('estes vous sur de vouloir activer compte ')" href="code php\Compte_Activer.php?iduser=<?php echo $ligne_User2[0] ?>" data-placement="top" title="Activer"><i class='fas fa-check-circle' style='font-size:24px'></i></a>&nbsp;  
											<!-- DESACTIVES COMPTE  -->
											<a style="color: red;" onclick="return confirm('estes vous sur de vouloir desactiver compte ')" href="code php\Compte_Desactiver.php?iduser=<?php echo $ligne_User2[0] ?>" data-placement="top" title="Désactiver"><i class='fas fa-minus-circle' style='font-size:24px'></i></a>&nbsp;
										  	<!--  SUPPRIMER COMPTE -->
											<a style="color: red;" data-toggle="modal" data-target="#exampleModal<?php echo $ligne_User2[1];?>" href=""  data-placement="top" title="Supprimer"><i class='fas fa-trash-alt' style=" font-size:20px "></i> </a>
											<!-- Modal Supprimer -->
											<div>
												<div class="modal fade" id="exampleModal<?php echo $ligne_User2[1];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
													<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
														<div class="modal-content bg-gradient-danger">												
															<div class="modal-header">
																<h6 class="modal-title" id="modal-title-notification">Votre attention est requise  </h6>
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">×</span>
																</button>
															</div>
															<div class="modal-body">
																<div class="py-3 text-center">
																	<i class='fas fa-trash-alt'style="font-size: 50px;color:red;"></i>
																	<h4 class="heading mt-4">attention!</h4>
																	<p>êtes vous sûr de vouloir supprimer ce compte de  :</p><p style="font-size: 20px" ><?php echo $ligne_User2[1]." ".$ligne_User2[2];?></p>
																</div>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-white" style="color:red;">  <a href="code php\Compte_Supprimer.php?iduser=<?php echo $ligne_User2[0] ?>" style="color:red;"> <i class='fas fa-trash-alt'></i> Supprimer</a></button>
																<button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Fermer</button>
															</div>
																		
														</div>    
													</div>
												</div>
                           					</div>
											<!-- Fin Modal Supprimer -->
										</td>
									</tr>

									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Mohamed SOUIDENA</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
		
		
		
		
		
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>
</html>