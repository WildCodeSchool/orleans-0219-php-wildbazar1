<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 20/03/19
 * Time: 14:15
 */
$pageTitle = 'Tux need money';
$pageUnderTitle = 'To show off in front of G33K !';
$size = ['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'];
$color = ['black', 'white', 'brown', 'red', 'blackAndWhite', 'blackAndBrown','other'];
$sentProducts = FALSE;
$errors=[];

if ($_POST) {
    echo'test';
    if (empty($_POST['productName']) || $_POST['productName'] >= 1) {
        $errors['ProductName'] = 'Please put the product name';
    }
    if (empty($_POST['price']) || $_POST['price'] <= 0) {
        $errors['price'] = 'Please put price';
    }
    if (empty($_POST['description']) || strlen($_POST['description']) < 15) {
        $errors['description'] = 'Please describe the product with 20 carac. min.';
    }
    if (empty($_POST['url']) || !filter_var($_POST['url'],FILTER_VALIDATE_URL)) {
        $errors['url'] = 'Please give an image for the product';
    }
    if (empty($_POST['weight'])) {
        $errors['weight'] = 'Please give the weight of the product';
    }
    if (empty($_POST['quantity']) || $_POST['quantity'] <= 0 ) {
        $errors['quantity'] = 'Please give the quantity of the stock';
    }
    if (empty($_POST['size']) || !in_array($_POST['size'], $size)) {
        $errors['size'] = 'Please select a size';
    }
    if (empty($_POST['color']) || !in_array($_POST['color'], $color)) {
        $errors['color'] = 'Please select a color';
    }
    if (empty($errors)) {
        $sentProducts = TRUE;
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
    <title>Wild Bazar</title>


</head>
var_dump($_POST);

<body>

<?php
include 'header.php';
?>

<main>
<?php
var_dump($errors);
echo '<hr>';
var_dump($_POST);
?>
    <div class="mb-4">
        <h3>Adding a new product :</h3>
    </div>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <form action="#" method="post" novalidate>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="productName">Product Name :</label>
                    <input type="text" class="form-control" name="productName" id="productName"
                           placeholder="Type the product name" required value ="<?php
                    if (!empty($errors['productName'])) {
                        echo $errors['productName'];
                    }
                    ?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" required>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       placeholder="Type the product description" size="30">
            </div>
            <div class="form-group">
                <label for="url">Picture</label>
                <input type="url" class="form-control" id="url" name="url" placeholder="Type the url of picture"
                       required>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="weight">weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="weight" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="stock"
                               required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="size">Size</label>
                        <select id="size" name="size" class="form-control" required>
                            <option value="" disabled selected>Choose ...</option>
                            <option value="XXS">XXS</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="color">Color</label>
                        <select id="color" name="color" class="form-control" required>
                            <option value="" disabled selected>Choose ...</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                            <option value="brown">Brown</option>
                            <option value="red">Red</option>
                            <option value="blackAndWhite">Black & white</option>
                            <option value="blackAndBrown">Black & brown</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="custom-control text-center custom-switch my-3">
                    <input type="checkbox" class="custom-control-input" id="sellIt" name="sellIt">
                    <label class="custom-control-label" for="sellIt">Put on sell immediately</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-info">Sent</button>
                </div>
        </form>
    </div>


</main>
<?php
    if ($sentProducts) {
        include 'penguinsFormModal.php';
    }
?>

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