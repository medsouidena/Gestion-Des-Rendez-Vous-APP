<?php
        try{ $cn=mysqli_connect("localhost","root", "", "maskapp") or die("Connection failed: " ) ;}
        catch(Exception $ex ){die("Error de la connexion" . $ex->getMessage());}
 
 ?> 