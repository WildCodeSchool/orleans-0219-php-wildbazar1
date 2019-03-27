<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 20/03/19
 * Time: 14:15
 */

require '../connec.php';

$phpDatabaseObject = new PDO(DSN, USER, PASS);
$phpDatabaseObject->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);


$pageTitle = 'Tux need money';
$pageUnderTitle = 'To show off in front of G33K !';
$buttonRedirection = 'penguins.php';
$buttonTitle = 'Return to the products page';
$sizes = ['XXS', 'XS', 'S', 'M', 'L', 'XL', 'XXL'];
$colors = ['black', 'white', 'brown', 'red', 'blackAndWhite', 'blackAndBrown', 'other'];


require '../src/functionPenguins.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $data = cleanData($_POST);
    $errors = [];
    $data['category']='penguins';

    if (empty($data['title']) || !is_string($data['title'])) {
        $errors['title'] = 'Please put the product name';
    }
    if (empty($data['price']) || $data['price'] <= 0 ||
        !is_numeric($data['price'])) {
        $errors['price'] = 'Please put price';
    }
    if (empty($data['description']) || strlen($data['description']) < 5 ||
        strlen($data['description']) > 500 || !is_string($data['price'])) {
        $errors['description'] = 'Please describe the product with 5 carac. min. and 50 carac. max.';
    }
    if (empty($data['picture'])) {
        $errors['picture'] = 'Please give an image for the product';
    }
    if (empty($data['weight']) || $data['weight'] <= 0) {
        $errors['weight'] = 'Please give the weight of the product';
    }
    if (empty($data['quantity']) || $data['quantity'] <= 0) {
        $errors['quantity'] = 'Please give the quantity of the stock';
    }
    if (empty($data['size']) || !in_array($data['size'], $sizes)) {
        $errors['size'] = 'Please select a size';
    }
    if (empty($data['color']) || !in_array($data['color'], $colors)) {
        $errors['color'] = 'Please select a color';
    }
    if (empty($errors)) {

        $query = "INSERT INTO article (category, title, description, price, quantity, size, weight, color, picture) 
          VALUES (:category, :title, :description, :price, :quantity, :size, :weight, :color, :picture)";

        $newObjects = $phpDatabaseObject->prepare($query);

        $newObjects->bindValue(':category', $data['category'], PDO::PARAM_STR);
        $newObjects->bindValue(':title', $data['title'], PDO::PARAM_STR);
        $newObjects->bindValue(':description', $data['description'], PDO::PARAM_STR);
        $newObjects->bindValue(':price', $data['price'], PDO::PARAM_STR);
        $newObjects->bindValue(':quantity', $data['quantity'], PDO::PARAM_INT);
        $newObjects->bindValue(':size', $data['size'], PDO::PARAM_STR);
        $newObjects->bindValue(':weight', $data['weight'], PDO::PARAM_STR);
        $newObjects->bindValue(':color', $data['color'], PDO::PARAM_STR);
        $newObjects->bindValue(':picture', $data['picture'], PDO::PARAM_STR);
        $newObjects->execute();
        header('Location:penguins.php');
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
    <script type="text/javascript" src="/JS/penguinsFormControl.js"></script>
    <title>Wild Bazar</title>
</head>
<body>
<?php
include 'header.php';
?>
<main class="container">


    <div class="mb-4">
    </div>
    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <h3></h3>
        <div class="col-md-3 border">
            <div class="border_add">
                <i class="tux"></i>
                <h2>Add your Product</h2>
                <h4>Show your love to Tux !</h4>
            </div>
        </div>
        <form action="penguinsAdd.php" method="post" class="needs-validation col-md-9" novalidate>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="title">Product Name :</label>
                    <input type="text" class="form-control" name="title" id="title"
                           placeholder="Type the product name" required value="<?php
                    if (!empty($errors)) {
                        echo $data['title'];
                    }
                    ?>">
                    <div class="text-danger"><?= $errors['title'] ?? '' ?></div>
                </div>
                <div class="form-group col-md-4">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="price" required
                           min="1"
                           value="<?php
                           if (!empty($errors)) {
                               echo $data['price'];
                           }
                           ?>">
                    <div class="text-danger"><?= $errors['price'] ?? '' ?></div>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                       placeholder="Type the product description" size="30" required value="<?php
                if (!empty($errors)) {
                    echo $data['description'];
                }
                ?>">
                <div class="text-danger"><?= $errors['description'] ?? '' ?></div>
            </div>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="text" class="form-control" id="picture" name="picture" placeholder="Type the url of picture"
                       required value="<?php
                if (!empty($errors)) {
                    echo $data['picture'];
                }
                ?>">
                <div class="text-danger"><?= $errors['picture'] ?? '' ?></div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="weight">weight</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="weight" required
                               value="<?php
                               if (!empty($errors)) {
                                   echo $data['weight'];
                               }
                               ?>">
                        <div class="text-danger"><?= $errors['weight'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" placeholder="stock"
                               required min="1" value="<?php
                        if (!empty($errors)) {
                            echo $data['quantity'];
                        }
                        ?>">
                        <div class="text-danger"><?= $errors['quantity'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="size">Size</label>
                        <select id="size" name="size" class="form-control" required>
                            <option value="">Choose ...</option>
                            <?php foreach ($sizes as $size) { ?>
                                <option value="<?= $size ?>"
                                    <?php if (!empty($data['size']) && $data['size'] === $size) {
                                        echo 'selected';
                                    }; ?>
                                ><?= $size ?></option>
                            <?php }; ?>
                        </select>
                        <div class="text-danger"><?= $errors['size'] ?? '' ?></div>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="color">Color</label>
                        <select id="color" name="color" class="form-control" required>
                            <option value="" selected>Choose ...</option>
                            <?php foreach ($colors as $color) { ?>
                                <option value="<?= $color ?>"
                                    <?php if (!empty($data['color']) && $data['color'] === $color) {
                                        echo 'selected';
                                    }; ?>
                                ><?= $color ?></option>
                            <?php }; ?>
                        </select>
                        <div class="text-danger"><?= $errors['color'] ?? '' ?></div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-light">Send it now</button>
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
