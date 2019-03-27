<?php

// connection to table "article" //
require '../connec.php';
$pdo = new PDO(DSN, USER, PASS);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

$query = "SELECT * FROM article";
$statement = $pdo->query($query);
$products = $statement->fetchAll(PDO::FETCH_ASSOC);
// -------------------- //


// Variable for dynamic Jumbotron //
$pageTitle = 'Tux need money';
$pageUnderTitle = 'To show off in front of G33K !';
$buttonRedirection = 'penguinsAdd.php';
$buttonTitle = 'Add a new product';
// ------------------------------ //

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
        <!-- Dynamic cards -->
        <?php
        foreach ($products as $product) {
            include 'penguinsCards.php';
        }
        ?>
    </div>
</main>
<!-- zone footer -->
<?php
include 'footer.php';
?>
<!-- Javascript for bootstrap -->
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
