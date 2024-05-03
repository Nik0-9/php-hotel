<?php
session_start();
if (!isset($_SESSION["userId"])) {
session_destroy();
header("Location: login.php");
die(); 
}
include __DIR__ . "/Controllers/hotelsControl.php";
//var_dump($hotels);

include __DIR__ . "/Views/header.php";
?>
<main class="container">
    <div class="d-flex justify-content-between ">
        <h4>Benvenuto <?= $_SESSION['name'] ?></h4>
        <a href="logout.php" class="btn btn-danger ">Logout</a>
    </div>
     <?php
    include __DIR__ . "/Views/full_hotel_tables.php";
    ?> 
    
</main>
<?php
include __DIR__ . "/Views/footer.php";
?>