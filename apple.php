<?php
$products = [

        'produit1' => ['40', 'Apple - Worm', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme-_-ver.jpeg.bmp'],
        'produit2' => ['50', 'Apple - Black', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme-deco-en-resine-28cm-noir.jpg'],
        'produit3' => ['50', 'Apple - Violet', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'Minaudiere-Pomme-Violet-11.jpg'],
        'produit4' => ['30', 'Apple - Rotten', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'Pomme-au-four-à-la-crème-de-marrons.jpg'],
        'produit5' => ['20', 'Apple - Red', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'shutterstock_102978833.jpg'],
        'produit6' => ['20', 'Apple - Gold', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme-or.jpg'],
        'produit7' => ['20', 'Apple - Blue', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme5.jpg'],
        'produit8' => ['30', 'Apple - Yellow', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme_golden.jpg'],
        'produit9' => ['25', 'Apple - Bite',  'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'pomme.png'],
        'produit10' => ['25', 'Apple - Smoothie', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'smoothie-pomme.jpg'],
        'produit11' => ['10', 'Apple - Jobs', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'SteveJobs.jpg'],
        'produit12' => ['40',  'Apple - Green', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.', 'fotolia_55372155_subscription_xxl-copy.jpg'],


    ]
?>



<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" property="responsive" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style_apple.css">

    <title>Wild Bazar - Apple</title>
</head>

<body>

<?php
$pageTitle = 'A Bite of Apple';
$pageUnderTitle = 'When elegance ryhmes with performance';
$button =

include 'header.php';
?>

<main>
    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">


        <?php
        foreach ($products as $key => $value) {
            include 'appleCards.php';
        }
        ?>


    </div>


</main>


<?php
include 'footer.php'
?>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
