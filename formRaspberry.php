<?php
/**
 * Created by PhpStorm.
 * User: cyrano
 * Date: 2019-03-20
 * Time: 15:09
 */

    if($_POST){

        $errors = array();

        if(empty($_POST["title"])){
            $errors["title"] = "Please, give a title to your Raspberry!";
        }

        if(empty($_POST["price"])){
            $errors["price"] = "Please, give a price to your Raspberry!";
        }

        if(empty($_POST["description"])){
            $errors["description"] = "Please, give a description to your Raspberry!";
        }

        if(count($errors) == 0){

            // Redirect to success page.
            header("Location: successraspberries.php");
            exit();
        }
    }



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
    <link rel="stylesheet" href="./css/raspberries.css">

    <title>Wild Bazar</title>
</head>

<body>

<?php

$pageTitle = 'A taste of Raspberries';
$pageUnderTitle = 'When wildness meets Softness !';

include 'header.php';
?>

<main class="container formRaspberry">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" id="title" name="title" value="<?php if(isset($_POST["title"])) echo $_POST["title"]; ?>">
            <?php if(isset($errors["title"])) echo $errors["title"]; ?>
        </div>
        <div class="form-group">
            <label for="price">Price: </label>
            <input type="text" class="form-control" id="price" name="price" value="<?php if(isset($_POST["price"])) echo $_POST["price"]; ?>">
            <?php if(isset($errors["price"])) echo $errors["price"]; ?>
        </div>
        <div class="form-group">
            <label for="description">Description: </label>
            <textarea class="form-control" id="description" name="description" ><?php if(isset($_POST["description"])) echo $_POST["description"]; ?></textarea>
            <?php if(isset($errors["description"])) echo $errors["description"]; ?>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Choose a size</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Size : S</option>
                <option>Size : M</option>
                <option>Size : L</option>
            </select>
        </div>
        <div class="form-group spot">
            <button value="submit">Submit</button>
        </div>
    </form>

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

