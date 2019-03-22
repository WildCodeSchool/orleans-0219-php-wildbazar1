<?php
if ($_POST) {
    $errors = array();
    if (empty($_POST['style'])) {
        $errors['style1'] = "Please enter a style for your Apple";
    }

    if (empty($_POST['price'])) {
        $errors['price1'] = "Please define a price for your product";
    }

    $isEmailValid = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if ($isEmailValid === false) {
        $errors['email1'] = "Please enter a valid email";
    }


    if (empty($_POST['picture'])) {
        $errors['picture1'] = "Please add a link for a picture";
    }

    if (0 == count($errors)) {
        unset($_POST);
    }


}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">

    <link rel="stylesheet" href="./css/addAplle.css"


</head>

<body>


<?php
include 'header.php';
?>

<main>
    <div class="container contact">
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <i class="fab fa-apple"></i>
                    <h2>Add your Product</h2>
                    <h4>We would love to sell your </h4>
                </div>
            </div>
            <form class="col-md-9" novalidate method="post">
                <?php
                if (isset($errors) && count($errors) == 0) {
                    ?>
                    <div class="centered send">
                        Your product has been taken, it will be online under 48h ! Thanks !
                    </div>
                    <?php
                }
                ?>
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="fname">Style:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" placeholder="Apple Violet" name="style"
                                   value="<?php if (isset($_POST['style'])) echo $_POST['style']; ?>">
                            <p><?php if (isset($errors['style1'])) echo $errors['style1'];
                                ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Price:</label>
                        <div class="col-sm-10">
                            <input name="price" class="form-control" id="price" placeholder="Enter your Price"
                                   value="<?php if (isset($_POST['price'])) echo $_POST['price']; ?>">
                            <p><?php if (isset($errors['price1'])) echo $errors['price1'];
                                ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">E-mail:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="contac@example.com"
                                   name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>">
                            <p><?php if (isset($errors['email1'])) echo $errors['email1'];
                                ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="lname">Caracteristics:</label>
                        <div class="col-sm-10">
                            <select name="choix" class="form-control" id="lname">
                                <option value="choix">Select your Size</option>
                                <option value="choix0">XS/S</option>
                                <option value="choix1">S/M</option>
                                <option value="choix1">M/L</option>
                                <option value="choix1">L/XL</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="description">Description:</label>
                        <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="5" placeholder="Add a description">

                            </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Picture:</label>
                        <div class="col-sm-10">
                            <input class="form-control" id="picture" placeholder="Add Link" name="picture"
                                   value="<?php if (isset($_POST['picture'])) echo $_POST['picture']; ?>">
                            <p><?php if (isset($errors['picture1'])) echo $errors['picture1'];
                                ?></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include 'footer.php';
?>

<div></div>


</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>









