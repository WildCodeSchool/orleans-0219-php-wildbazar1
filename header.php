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

<header>

    <nav id="gradient" class="navbar fixed-top navbar-expand-lg navbar-light navbar-top">

        <!-- Show this only on mobile to medium screens -->
        <a class="navbar-brand d-lg-none" href="index.php"><img src="./images/logoblanc.png">
    Wild Bazar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Use flexbox utility classes to change how the child elements are justified -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

            <!-- Show this only lg screens and up -->
            <a class="navbar-brand d-none d-lg-block" href="index.php"><img src="./images/logoblanc.png">

                                                                                 Wild Bazar</a>

            <ul class="texto navbar-nav text-white px-3">
                <li class="nav-item">
                    <a class="nav-link" href="index.php#aboutUs"> About Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#topSelling"> Top Selling </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contactUs"> Contact Us </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
    Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="apple.php">Apples</a>
                        <a class="dropdown-item" href="windows.php">Windows</a>
                        <a class="dropdown-item" href="penguins.php">Penguins</a>
                        <a class="dropdown-item" href="raspberries.php">Raspberries</a>
                        <a class="dropdown-item" href="developers.php">Developpers</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4"><?php echo $pageTitle ?></h1>
            <h3 class="lead"><?php echo $pageUnderTitle?></h3>
        </div>
    </div>

</header>