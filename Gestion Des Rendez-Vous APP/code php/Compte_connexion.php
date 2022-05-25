<?php 

session_start();
require_once("connexionDB\connexion_php.php");

if(isset($_POST['login'])){   
    $date = date('d-m-y h:i:s');
    $ip=$_SERVER['REMOTE_ADDR'];
    $usename=$_POST['usename'];
    $mdp =$_POST['password'];
   
    if(empty($usename)||empty($mdp)){

    //tout les champs remplir
    header('location:..\page-login.php?Alter=<script type="text/javascript">toastr.warning("REMPLISSEZ TOUS LES CHAMPS , SVP !")</script>');
           
    }else{
        
        $sql = "SELECT mdp FROM `user` WHERE `username` ='$usename' and `etat`='1'";
        $resultat=mysqli_query($cn,$sql);
        
        if ($ligne=mysqli_fetch_row($resultat)) {
            if($mdp== $ligne[0])
                {
                    $sql3 = "   UPDATE `user` `dateder`=SYSDATE(),`ipder`='$ip' WHERE `username`='$usename'";
                 
                    mysqli_query($cn,$sql3);
                    $_SESSION['user']=$usename; 
                    header('location:..\index.php');
                   
                }
            else 
                {
                    header('location:..\page-login.php?Alter=<script type="text/javascript">toastr.error("LE MOT DE PASSE INCCORECT ")</script>'); 
 
                }
            
        
        
        }else { 
              header('location:..\page-login.php?Alter=<script type="text/javascript">toastr.error("LES INFORMATIONS INCCORECET OU LE COMPTE DESACTIVER ")</script>'); }
       
    }
    
}else {     header('location:..\page-login.php'); }


mysqli_close($cn);




?>