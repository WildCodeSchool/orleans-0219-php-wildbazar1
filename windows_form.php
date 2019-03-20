<?php

$pageTitle = 'Windows';
$pageUnderTitle = 'let you see the perfect blue screen';
include 'header.php';
?>
<!--fin nav bar et jumbotron-->
<!doctype html>
<html lang="zxx">

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


    <link rel="stylesheet" href="/css/windows_form.css">

    <title>Wild Bazar</title>
</head>

<body>

<main class="form">

    <div class="formulaire">


        <form>
            <div class="row">
                <div class="col">
                    <label for="inputUrl">Add picture</label>
                    <input type="url" class="form-control" id="inputUrl" placeholder="your picture here">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputUrl">window's name</label>
                    <input type="text" class="form-control" placeholder="window's name">
                </div>
                <div class="col">
                    <label for="inputUrl">price</label>
                    <input type="text" class="form-control" placeholder="price">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                              placeholder="desccribe your product"></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="inputUrl">size</label>
                    <input type="text" class="form-control" placeholder="size">
                </div>
                <div class="col">
                    <label for="inputUrl">weight</label>
                    <input type="text" class="form-control" placeholder="weight">
                </div>
                <div class="col">
                    <label for="inputUrl">color</label>
                    <input type="text" class="form-control" placeholder="color">
                </div>
            </div>

            <div class="submission">
                <button type="button" class="btn btn-secondary btn-lg">Add window</button>
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