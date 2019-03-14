<?php
$apples = [
        "Apple \'Worm\'" => ["40", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Worm", "xx", "xx", "xx", "pomme-_-ver.jpeg.bmp"],
        "Apple \'Black\'" => ["50", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Black", "xx", "xx", "xx", "pomme-deco-en-resine-28cm-noir.jpg"],
        "Apple \'Violet\'" => ["50", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Violet", "xx", "xx", "xx", "Minaudiere-Pomme-Violet-11.jpg"],
        "Apple \'Rotten\'" => ["30", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Rotten", "xx", "xx", "xx", "Pomme-au-four-à-la-crème-de-marrons.jpg"],
        "Apple \'Red\'" => ["20", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Red", "xx", "xx", "xx", "shutterstock_102978833.jpg"],
        "Apple \'Gold\'" => ["20", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Gold", "xx", "xx", "xx", "images/apple/pomme-or.jpg"],
        "Apple \'Blue\'" => ["20", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Blue", "xx", "xx", "xx", "images/apple/pomme5.jpg"],
        "Apple \'Yellow\'" => ["30", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Yellow", "xx", "xx", "xx", "images/apple/pomme_golden.jpg"],
        "Apple \'Bite\'" => ["25", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Bite", "xx", "xx", "xx", "images/apple/pomme.png"],
        "Apple \'Smoothie\'" => ["25", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Smoothie", "xx", "xx", "xx", "images/apple/smoothie-pomme.jpg"],
        "Apple \'Jobs\'" => ["10", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Jobs", "xx", "xx", "xx", "images/apple/SteveJobs.jpg"],
        "Apple \'Green\'" => ["40", "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet.", "Apple - Green", "xx", "xx", "xx", "images/apple/fotolia_55372155_subscription_xxl-copy.jpg"],

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

    <title>Wild Bazar</title>
</head>

<body>

<?php
include 'header.php'
?>

<main>
    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">


        <?php
        foreach ($apples as $tools => $number) {
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
