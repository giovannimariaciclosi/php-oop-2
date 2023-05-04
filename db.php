<?php

require_once './Models/Product.php';
require_once './Models/Cleaning.php';
require_once './Models/Food.php';
require_once './Models/Game.php';
require_once './Models/PetHouse.php';


$brush = new Cleaning("Pet brush", 10, "https://picsum.photos/400/400", "Cat", "Cleaning", "Brush your pet like a boss.");
$croquettes = new Food("Crunchy pet food", 20, "https://picsum.photos/401/401", "Cat", "Food", "The world's crunchiest kibble for your crunchy pet.");
$bone = new Game("Big Bone", 5, "https://picsum.photos/402/402", "Dog", "Game", "A big bone for stronger teeth to bite you better.");
$mansion = new PetHouse("Dubai Mansion", 120000, "https://picsum.photos/403/403", "Cat", "PetHouse", "If you work 9-to-5 is not for you and your pet deserves more. PS: Buy my course, please :)");
$hollywood = new PetHouse("Hollywood Hills", 140000, "https://picsum.photos/404/404", "Dog", "PetHouse", "The right place for bipolar pets who feel like a star.");
$nyLoft = new PetHouse("New York Loft", 160000, "https://picsum.photos/405/405", "Dog", "PetHouse", "Giant red-brick loft in the heart of New York City for the most hipster of pets. Obviously paid for by absent parents.");


$products = [
    $brush,
    $croquettes,
    $bone,
    $mansion,
    $hollywood,
    $nyLoft,
];