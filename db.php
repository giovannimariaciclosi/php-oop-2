<?php

require_once './Models/Product.php';
require_once './Models/Cleaning.php';
require_once './Models/Food.php';
require_once './Models/Game.php';
require_once './Models/PetHouse.php';


$brush = new Cleaning("Pet brush", 10, "https://picsum.photos/seed/picsum/200/200", "Cleaning", "Brush your pet like a boss.");
$croquettes = new Food("Crunchy pet food", 20, "https://picsum.photos/seed/picsum/200/200", "Food", "The world's crunchiest kibble for your crunchy pet.");
$bone = new Game("Big Bone", 5, "https://picsum.photos/seed/picsum/200/200", "Game", "A big bone for stronger teeth to bite you better.");
$mansion = new PetHouse("Dubai Mansion", 100000, "https://picsum.photos/seed/picsum/200/200", "PetHouse", "If you work 9-to-5 is not for you and your pet deserves more." );


$products = [
    $brush,
    $croquettes,
    $bone,
    $mansion,
];
