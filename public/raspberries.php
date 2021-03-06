<?php

include '../connec.php';
$connec = mysqli_connect(SERVER, USER, PASS, DB);





/*$products = [
    'produit1' => ['40', 'Black Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'black.jpg'],
    'produit2' => ['40', 'Blue Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'blue.jpg'],
    'produit3' => ['40', 'Chocolate Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'chocolat.jpg'],
    'produit4' => ['40', 'Cupcake Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'cupcake.jpg'],
    'produit5' => ['40', 'Dark Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'dark.png'],
    'produit6' => ['40', 'Donuts Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'donuts.jpg'],
    'produit7' => ['40', 'Red Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'rouge.jpg'],
    'produit8' => ['40', 'Yellow Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'jaune.jpg'],
    'produit9' => ['40', 'Pink Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'rose.jpg'],
    'produit10' => ['40', 'Pie Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'tarte.jpg'],
    'produit11' => ['40', 'Tiramisu Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'tiramisu.jpg'],
    'produit12' => ['40', 'Device Raspberry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, vero!', 'device.jpg']
];*/

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">
    <link rel="stylesheet" href="css/raspberries.css">

    <title>Wild Bazar</title>
</head>

<body>

    <?php

    $pageTitle = 'A taste of Raspberry';
    $pageUnderTitle = 'When wildness meets Softness !';
    $buttonRedirection = href="formRaspberry.php";
    $buttonTitle = 'Add your Raspberries!';

    include 'header.php';
    ?>

    <main>

        <div class="justify-content-center m-5 d-flex flex-wrap card-columns">


            <?php

            $result = mysqli_query('SELECT * FROM article');

            $data = mysqli_fetch_assoc($result);
           /*   echo $data['id'];
                echo $data['category'];
                echo $data['title'];
                echo $data['description'];
                echo $data['price'];
                echo $data['picture'];*/

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

