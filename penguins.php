<?php

$products = [

    ['Sweat "Got Linux ?"','40', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT GOT LINUX ? dolores eveniet', 'XL', '10lb', 'Black','sweat1.jpg'],
    ['Sweat "Peace, Love, Linux"', '50', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT Peace, Love, Linux dolores eveniet', 'L', '11lb', 'Black','sweat2.jpeg'],
    ['Sweat " May the force be with you"', '45', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT May the source be with you ? dolores eveniet', 'XXL', '12lb', 'Black','sweat3.jpg'],
    ['Sweat "Why so Windows ?"', '30', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati T-shirt Why so Windows ? dolores eveniet', 'M', '6lb', 'White','tshirt1.jpg'],
    ['Mug "Fork You"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Fork You dolores eveniet', 'Standard', '8lb', 'Black','mug1.jpg'],
    ['Mug "Just sudo It"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Just sudo It dolores eveniet', 'Standard', '8lb', 'White','mug2.jpg'],
    ['Mug "Del Windows"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Del windows dolores eveniet', 'XL', '10lb', 'White','mug3.jpg'],
    ['Plush "Tux"', '30', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Plush Tux dolores eveniet', '1,2 in', '5lb', 'Black','plush1.jpg'],
    ['Cap "Tux"', '25', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Tux dolores eveniet', 'L', '10lb', 'Light brown','cap1.jpg'],
    ['Cap "Ubuntu"', '25', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Ubuntu dolores eveniet', 'L', '10lb', 'Black & white','cap2.jpg'],
    ['Sticker "sudo rm"', '10', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker sudo rm dolores eveniet', '2 in', '1lb', 'Black','stickers1.jpg'],
    ['Sticker "Gnu/Linux"', '10', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker Gnu/Linux dolores eveniet', '2 in', '1lb', 'Black & White','stickers2.jpg'],
];

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!--- Appel Bootstrap 4 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <!-- Appel fontawesome -->
        <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
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
                    include 'cardsPenguins.php';
                }
            ?>


        </div>
    </main>

    <!-- zone footer -->

    <?php
    include 'footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>

</html>