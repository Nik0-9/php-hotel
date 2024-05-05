<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


function getParking()
{
    if ((!empty($_GET["parking"]) || (isset($_GET["parking"]) && $_GET["parking"] == 0))) {
        return true;
    } else {
        return false;
    }
}
function getVote()
{
    if (!empty($_GET["vote"]) || (isset($_GET["vote"]) && $_GET["vote"] == 0)) {
        return true;
    } else {
        return false;
    }
}
function getHotels($hotels)
{

    if (getParking() && getVote()) {
        $parking = $_GET["parking"];
        $vote = $_GET["vote"];
        $filt_park = array_filter($hotels, function ($hotel) use ($parking) {
            return $hotel["parking"] == $parking || $parking == "all";
        });
        $filt_vote = array_filter($filt_park, function ($hotel) use ($vote) {
            return $hotel["vote"] >= $vote || $vote == "all";
        });
    } else {
        $filt_vote = $hotels;
    }
    return $filt_vote;
}

function getHotelByName($hotels){
    $hotelName = array_filter($hotels, function($item){
        return $item["name"] == $_GET['name'];
    });
    $detail = array_shift($hotelName);
    return $detail;
}