<?php
include __DIR__ . "/../Models/hotels.php";

function printRows($data) {
    $template = "";
    foreach($data as $hotel){
    $template .= "<tr> <td><a href='pages/detail.php?name={$hotel['name']}'>{$hotel['name']}</a></td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
    }
    return $template;
}

$hotels_list = getHotels($hotels);

$template = printRows($hotels_list);