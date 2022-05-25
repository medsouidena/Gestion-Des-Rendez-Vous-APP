<?php
session_start();
require_once("connexionDB\connexion_php.php");

$iduser= isset ($_GET['iduser'])?$_GET['iduser']:"";



$sql = "DELETE FROM `user` WHERE `id`='$iduser'";

if(mysqli_query($cn,$sql) ){
    header('location:..\user-list-datatable.php?Alter=<script type="text/javascript">toastr.success("BIEN SUPPRIMER ")</script>');
}
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($cn);
}

mysqli_close($cn);
  

?>