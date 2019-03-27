<?php

$pageTitle = 'Windows';
$pageUnderTitle = 'let you see the perfect blue screen';
include 'header.php';
?>
<!--fin nav bar et jumbotron-->
<!doctype html>
<html lang="en">

<!--php verif method et remplissage form-->
<?php

require 'function_windows.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $data = trimArray($_POST);

    $errors = [];

    if (empty($data['inputUrl']) || !filter_var($data['inputUrl'], FILTER_VALIDATE_URL)) {
        $errors['inputUrl'] = 'chemin d\'accès de l\'image vide';

    }
    $inputUrlMax = 100;
    if ((strlen($data['inputUrl']) || !filter_var($data['inputUrl'], FILTER_VALIDATE_URL)) > $inputUrlMax) {
        $errors['inputUrl'] = 'chemin d\'accès de l\'image trop long limite ' . $inputUrlMax . ' caractères';

    }
    if (empty($data['windowsName']) || !is_string($data['windowsName'])) {
        $errors['windowsName'] = 'nom de l\'image vide';

    }
    $nameMax = 100;
    if ((strlen($data['windowsName']) || !is_string($data['windowsName'])) > $nameMax) {
        $errors['windowsName'] = 'nom de l\'image trop long limite ' . $nameMax . ' caractères';

    }
    if (empty($data['price']) || $_POST['price'] <= 0 ||
        !is_numeric($data['price'])) {
        $errors['price'] = 'champ du prix vide';
    }


    if (empty($data['description']) || !is_string($data['description']) > $nameMax) {
        $errors['description'] = 'Description de l\'image vide';
    }
    $descriptionLengthMax = 255;
    if ((strlen($data['description']) || !is_string($data['windowsName'])) > $descriptionLengthMax) {
        $errors['description'] = 'chemin d\'accès de l\'image trop long limite ' . $descriptionLengthMax . ' caractères';

    }


    if (empty($data['size']) || !is_string($data['description'])) {
        $errors['size'] = 'indiquez la taille du produit';

    }
    if (empty($data['weight']) || !is_string($data['description'])) {
        $errors['weight'] = 'indiquez le poids du produit';

    }
    if (empty($data['color']) || !is_string($data['description'])) {
        $errors['color'] = 'indiquez la couleur du produit';

    }


    if (empty($errors)) {
        //redirection
        header('Location:windows_form.php');
        //enregistrement bdd
    }
}
?>


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">

    <!--css perso-->
    <link rel="stylesheet" href="/public/css/windows_form.css">

    <title>Wild Bazar</title>
</head>

<body>

<main class="form">


    <div class="formulaire">

        <!--début du formulaire-->
        <form id="form" action="windows_form.php" method="POST" novalidate>

            <div class="row">
                <div class="col">
                    <label for="inputUrl">Add picture</label>
                    <input type="url" class="form-control" id="inputUrl" name="inputUrl" placeholder="your picture here"
                           required value="<?php
                    if (!empty($errors)) {
                        echo $data['inputUrl'];
                    }
                    ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['inputUrl'] ?? '' ?></div><!--message d'erreur-->

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="name">window's name</label>
                    <input type="text" class="form-control" name="windowsName" id="windowsName"
                           placeholder="window's name"
                           required value="<?php
                    if (!empty($errors)) {
                        echo $data['windowsName'];
                    }
                    ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['windowsName'] ?? '' ?></div><!--message d'erreur-->

                </div>

                <div class="col">
                    <label for="price">price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price" required
                           value="<?php
                           if (!empty($errors)) {
                               echo $data['price'];
                           }
                           ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['price'] ?? '' ?></div><!--message d'erreur-->

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                              placeholder="desccribe your product" required value="<?php
                    if (!empty($errors)) {
                        echo $data['description'];
                    }
                    ?>"></textarea><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['description'] ?? '' ?></div><!--message d'erreur-->

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="size">size</label>
                    <input type="text" class="form-control" name="size" id="size" placeholder="size" required
                           value="<?php
                           if (!empty($errors)) {
                               echo $data['size'];
                           }
                           ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['size'] ?? '' ?></div><!--message d'erreur-->

                </div>
                <div class="col">
                    <label for="weight">weight</label>
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="weight" required
                           value="<?php
                           if (!empty($errors)) {
                               echo $data['weight'];
                           }
                           ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['weight'] ?? '' ?></div><!--message d'erreur-->

                </div>
                <div class="col">
                    <label for="color">color</label>
                    <input type="text" class="form-control" name="color" id="color" placeholder="color" required
                           value="<?php
                           if (!empty($errors)) {
                               echo $data['color'];
                           }
                           ?>"><!--sauvegarde le champ rempli si correct et l'affiche-->
                    <div class="text-danger"><?= $errors['color'] ?? '' ?></div><!--message d'erreur-->

                </div>
            </div>

            <div class="submission">
                <button class="btn btn-secondary btn-lg">Add window</button>
            </div>

        </form>

    </div>


</main>

<!-- zone footer -->
<?php

include 'footer.php';

?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>