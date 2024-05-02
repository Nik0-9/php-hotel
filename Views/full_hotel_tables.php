<?php
$template = '';

foreach($filt_hotel as $hotel) {
    $template .= "<tr> <td>{$hotel['name']}</td> <td>{$hotel['description']}</td> <td>{$hotel['parking']}</td> <td>{$hotel['vote']}</td> <td>{$hotel['distance_to_center']}</td> </tr>";
}
?>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Hotel name</th>
            <th scope="col">Description</th>
            <th scope="col">Parking</th>
            <th scope="col">vote</th>
            <th scope="col">distance_to_center</th>
        </tr>
    </thead>
    <tbody>
        <?= $template; ?>
    </tbody>
</table>