<?php
    require_once("C:/xampp/htdocs/registro-login/view/head/header.php");
    if(empty($_SESSION['usuario'])){
        header("Location:login.php");
    }
?>
    <h1 class="text-center mt-4">Bienvenido <?= $_SESSION['usuario']?></h1>
<?php
    require_once("C:/xampp/htdocs/registro-login/view/head/footer.php");
?>