<?php

require_once 'house.php';

$huis1 = new Huis(2 , 6, 10.5, 6.0, 18.0);
$huis2 = new Huis(4 , 12, 8.0, 3.5, 11.0);
$huis3 = new Huis(3 , 8, 15.0, 9.0, 20.0);

$huis1->toonDetails();
$huis2->toonDetails();
$huis3->toonDetails();

?>