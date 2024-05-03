<?php
include __DIR__ . "/Controllers/hotelsControl.php";
//var_dump($hotels);

    include __DIR__ ."/Views/header.php";
?>
<main class="container">
<!-- <?php
include __DIR__ ."/Views/full_hotel_tables.php";
?> -->
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
</main>
<?php
include __DIR__ ."/Views/footer.php";
?>