<?php
require_once 'class/OpenWeather.php';
$weather = new OpenWeather('94c6cf0868fa5cb930a5e2d71baf0dbf');
$forecast = $weather->getForecast('Jerusalem,Israel');
$today = $weather->getToday('Jerusalem,Israel');
require 'elements/header.php';
?>

<div class="container">
    <ul>
        <li>En ce moment <?= $today['description'] ?> <?= $today['temp'] ?>°C</li>
        <?php foreach($forecast as $day): ?>
        <li><?= $day['date']->format('d/m/Y') ?> <?= $day['description'] ?> <?= $day['temp'] ?>°C</li>
        <?php endforeach ?>
    </ul>
</div>

<?php require 'elements/footer.php';

