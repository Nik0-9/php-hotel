<?php
include __DIR__ . "/Models/hotels.php";
//var_dump($hotels);
if (!empty($_GET["parking"]) || (isset($_GET["parking"]) && $_GET["parking"] == 0)) {
    $parking = $_GET["parking"];
    $filt_hotel = array_filter($hotels, function ($hotel) use ($parking) {
        return $hotel["parking"] == $parking || $parking == "all";
    });
} else {
    $filt_hotel = $hotels;
}
include __DIR__ . "/Views/header.php";
?>
<main class="container">
    <?php
    include __DIR__ . "/Views/full_hotel_tables.php";
    ?>
</main>
<?php
include __DIR__ . "/Views/footer.php";
?>