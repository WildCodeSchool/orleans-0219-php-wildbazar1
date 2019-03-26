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

var_dump($_POST);


if ($_SERVER['REQUEST_METHOD'] === 'POST')
    foreach ($_POST as $key => $value) {
        $data[$key] = trim($value);
        if (empty($_POST['inputUrl'])) {
            echo 'chemin d\'accès de l\'image vide';
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
        <form id="form" action="" method="POST" novalidate>

            <div class="row">
                <div class="col">
                    <label for="inputUrl">Add picture</label>
                    <input type="url" class="form-control" id="inputUrl" name="inputUrl" placeholder="your picture here"
                           required>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="name">window's name</label>
                    <input type="text" class="form-control" name="windowsName" id="windowsName"
                           placeholder="window's name"
                           required>

                </div>

                <div class="col">
                    <label for="price">price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="price" required>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"
                              placeholder="desccribe your product" required></textarea>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="size">size</label>
                    <input type="text" class="form-control" name="size" id="size" placeholder="size" required>

                </div>
                <div class="col">
                    <label for="weight">weight</label>
                    <input type="text" class="form-control" name="weight" id="weight" placeholder="weight" required>

                </div>
                <div class="col">
                    <label for="color">color</label>
                    <input type="text" class="form-control" name="color" id="color" placeholder="color" required>

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