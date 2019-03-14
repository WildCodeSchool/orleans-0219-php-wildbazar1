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
    <link rel="stylesheet" href="css/developers.css">
    <title>Wild Bazar</title>


</head>

<body>
<?php
//Title h1 and h3 (in jumbotron) for each page
$pageTitle = "The power of developpers";
$pageUnderTitle = "Sales our better developers!";

include 'header.php';


$products = [['title' => 'Zen your projects', 'price' => '70', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Data-analyst' , 'price' => '50', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Webdesign and safely your projects' , 'price' => '45', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Specialist Symphony' , 'price' => '70', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Dev Style' , 'price' => '80', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Work Together' , 'price' => '40', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Clear your mind', 'price' => '90', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Never Stop Dreaming' , 'price' => '55', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Upgrade your project' , 'price' => '75', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Workflow' , 'price' => '80', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Security!' , 'price' => '50', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
             ['title' => 'Better Security &#128514;' , 'price' => '40', 'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                obcaecati
                                ut error
                                dolor dolores eveniet.'],
            ];

?>

<main>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">


        <?php
        foreach ($products as $key =>$value){
            include "cardsDevelopers.php";
        }

        ?>
</main>

<!-- zone footer -->

<?php include 'footer.php'?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>