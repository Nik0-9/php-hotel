
<?php
include __DIR__ . "/../Models/hotels.php";
$details = getHotelByName($hotels);
include __DIR__. "/../Views/header.php";
?>

<main class="container">
<h1 class="text-center">
    <?= $details['name']?>
</h1>
<div>
    <?php 
    echo "Descrizione: {$details['description']} <br> Voto: {$details['vote']} <br> distanza dal centro: {$details['distance_to_center']}";
    ?>
    

</div>
</main>

<?php
include __DIR__. '/../Views/footer.php';
?>