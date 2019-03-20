<?php

$pageTitle = 'Tux need money';
$pageUnderTitle = 'To show off in front of G33K !';
$buttonRedirection = 'penguinsForm.php';
$buttonTitle = 'Add a new product';
$products = [

    [
        'title' => 'Sweat "Got Linux ?"',
        'price' => 40,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT GOT LINUX ? dolores eveniet',
        'size' => 'XL',
        'weight' => '10lb',
        'color' => 'Black',
        'picture' => 'sweat1.jpg',
    ],

    [
        'title' => 'Sweat "Peace, Love, Linux"',
        'price' => 50,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT Peace, Love, Linux dolores eveniet',
        'size' => 'L',
        'weight' => '11lb',
        'color' => 'Black',
        'picture' => 'sweat2.jpeg',
    ],

    [
        'title' => 'Sweat " May the force be with you"',
        'price' => 45,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT May the source be with you ? dolores eveniet',
        'size' => 'XXL',
        'weight' => '12lb',
        'color' => 'Black',
        'picture' => 'sweat3.jpg',
    ],

    [
        'title' => 'Sweat "Why so Windows ?"',
        'price' => 30,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati T-shirt Why so Windows ? dolores eveniet',
        'size' => 'M',
        'weight' => '6lb',
        'color' => 'White',
        'picture' => 'tshirt1.jpg',
    ],

    [
        'title' => 'Mug "Fork You"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Fork You dolores eveniet',
        'size' => 'Standard',
        'weight' => '8lb',
        'color' => 'Black',
        'picture' => 'mug1.jpg',
    ],

    [
        'title' => 'Mug "Just sudo It"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Just sudo It dolores eveniet',
        'size' => 'Standard',
        'weight' => '8lb',
        'color' => 'White',
        'picture' => 'mug2.jpg',
    ],

    [
        'title' => 'Mug "Del Windows"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Del windows dolores eveniet',
        'size' => 'XL',
        'weight' => '10lb',
        'color' => 'White',
        'picture' => 'mug3.jpg',
    ],

    [
        'title' => 'Plush "Tux"',
        'price' => 30,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Plush Tux dolores eveniet',
        'size' => '1,2 in',
        'weight' => '5lb',
        'color' => 'Black',
        'picture' => 'plush1.jpg',
    ],

    [
        'title' => 'Cap "Tux"',
        'price' => 25,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Tux dolores eveniet',
        'size' => 'L',
        'weight' => '10lb',
        'color' => 'Light brown',
        'picture' => 'cap1.jpg',
    ],

    [
        'title' => 'Cap "Ubuntu"',
        'price' => 25,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Ubuntu dolores eveniet',
        'size' => 'L',
        'weight' => '10lb',
        'color' => 'Black & white',
        'picture' => 'cap2.jpg',
    ],

    [
        'title' => 'Sticker "sudo rm"',
        'price' => 10,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker sudo rm dolores eveniet',
        'size' => '2 in',
        'weight' => '1lb',
        'color' => 'Black',
        'picture' => 'stickers1.jpg',
    ],

    [
        'title' => 'Sticker "Gnu/Linux"',
        'price' => 10,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker Gnu/Linux dolores eveniet',
        'size' => '2 in',
        'weight' => '1lb',
        'color' => 'Black & White',
        'picture' => 'stickers2.jpg',
    ],
];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--- Appel Bootstrap 4 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <!-- Appel fontawesome -->
    <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <!-- Appel css -->
    <link rel="stylesheet" href="css/style_penguins.css">
    <title>Wild Bazar</title>


</head>

<body>

<?php
include 'header.php';
?>

<main>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">


        <?php
        foreach ($products as $product => $caracteristic) {
            include 'penguinsCards.php';
        }
        ?>



    </div>
</main>

<!-- zone footer -->

<?php
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>