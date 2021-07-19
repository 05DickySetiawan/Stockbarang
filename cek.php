<?php
//Jika bellum login

if(isset($_SESSION['log'])){

} else {
    header('location:login.php');
}

?>
