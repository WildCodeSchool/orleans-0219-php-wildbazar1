<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 20/03/19
 * Time: 14:15
 */
$pageTitle = 'Tux need money';
$pageUnderTitle = 'To show off in front of G33K !';
$buttonRedirection = 'penguins.php';
$buttonTitle = 'Return to the products page';
$sizes = ['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'];
$colors = ['black', 'white', 'brown', 'red', 'blackAndWhite', 'blackAndBrown', 'other'];
$errors = [];

if ($_POST) {
    if (empty($_POST['productName']) || strlen($_POST['productName']) <= 3 ||
        !is_string($_POST['productName'])) {
        $errors['productName'] = 'Please put the product name';
    }
    if (empty($_POST['price']) || $_POST['price'] <= 0 ||
        !is_numeric($_POST['price'])) {
        $errors['price'] = 'Please put price';
    }
    if (empty($_POST['description']) || strlen($_POST['description']) < 5 ||
        strlen($_POST['description']) > 50 || !is_string($_POST['price'])) {
        $errors['description'] = 'Please describe the product with 5 carac. min. and 50 carac. max.';
    }
    if (empty($_POST['url']) || !filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
        $errors['url'] = 'Please give an image for the product';
    }
    if (empty($_POST['weight']) || $_POST['weight'] <= 0 ||
        !is_numeric($_POST['weight'])) {
        $errors['weight'] = 'Please give the weight of the product';
    }
    if (empty($_POST['quantity']) || $_POST['quantity'] <= 0) {
        $errors['quantity'] = 'Please give the quantity of the stock';
    }
    if (empty($_POST['size']) || !in_array($_POST['size'], $sizes) || '' === $_POST['size']) {
        $errors['size'] = 'Please select a size';
    }
    if (empty($_POST['color']) || !in_array($_POST['color'], $colors) || '' === $_POST['color']) {
        $errors['color'] = 'Please select a color';
    }

    if (empty($errors)) { 
    }
}

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
    <!--    <script type="text/javascript" src="/JS/penguinsFormControl.js"></script> -->
    <title>Wild Bazar</title>
</head>
<body>
<?php
include 'header.php';
?>
<main>
    <div class="mb-4">
        <h3>Adding a new product :</h3>
    </div>
    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <h3></h3>

        <form action="penguinsForm.php" method="post" class="needs-validation" novalidate>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="productName">Product Name :</label>
                    <input type="text" class="form-control" name="productName" id="productName"
                           placeholder="Type the product name" required value="<?php
                    if (!empty($errors)) {
                        echo $_POST['productName'];
                    }
                    ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" required
                           min="1"
                           value="<?php
                           if (!empty($errors)) {
                               echo $_POST['price'];
                           }
                           ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       placeholder="Type the product description" size="30" required value="<?php
                if (!empty($errors)) {
                    echo $_POST['description'];
                }
                ?>">
            </div>
            <div class="form-group">
                <label for="url">Picture</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="Type the url of picture"
                       required value="<?php
                if (!empty($errors)) {
                    echo $_POST['url'];
                }
                ?>">
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="weight">weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="weight" required
                               value="<?php
                               if (!empty($errors)) {
                                   echo $_POST['weight'];
                               }
                               ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="stock"
                               required min="1" value="<?php
                        if (!empty($errors)) {
                            echo $_POST['quantity'];
                        }
                        ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="size">Size</label>
                        <select id="size" name="size" class="form-control" required>
                            <option value="" selected>Choose ...</option>
                            <?php foreach ($sizes as $size) { ?>
                                <option value="<?= $size ?>"><?= $size ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="color">Color</label>
                        <select id="color" name="color" class="form-control" required>
                            <option value="" selected>Choose ...</option>
                            <?php foreach ($colors as $color) { ?>
                                <option value="<?= $color ?>"><?= $color ?></option>
                            <?php }; ?>
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Send it now</button>
                </div>
        </form>
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
