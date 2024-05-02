<?php
include __DIR__ . "/Models/hotels.php";
//var_dump($hotels);
if (getParking() && !empty($_GET["vote"]) || getVote()) {
    $parking = $_GET["parking"];
    $vote = $_GET["vote"];
    $filt_hotel = array_filter($hotels, function($hotel) use ($parking){
    return $hotel["parking"] == $parking || $parking == "all";
    });
    $filt_hotel = array_filter($filt_hotel, function($hotel) use ($vote){
        return $hotel["vote"] >= $vote || $vote == "all";});
} else {
    $filt_hotel = $hotels;
};
function getParking(){
    if((!empty($_GET["parking"]) || (isset($_GET["parking"]) && $_GET["parking"] == 0))) {
        return true;
    } else {
        return false;
    }
}
function getVote(){
    if(!empty($_GET["vote"]) || (isset($_GET["vote"]) && $_GET["vote"] == 0 )) {
        return true;
    } else {
        return false;
    }
}
    include __DIR__ ."/Views/header.php";
?>
<main class="container">
<?php
include __DIR__ ."/Views/full_hotel_tables.php";
?>
</main>
<?php
include __DIR__ ."/Views/footer.php";
?>