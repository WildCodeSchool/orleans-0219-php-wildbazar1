
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" property="responsive" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style_apple.css">

    <title>Wild Bazar</title>
</head>

<body>

<header>

    <nav id="gradient" class="navbar fixed-top navbar-expand-lg navbar-light navbar-top">

        <!-- Show this only on mobile to medium screens -->
        <a class="navbar-brand d-lg-none" href="#"><img src="images/logoblanc.png" width="25px" height="25px"> Wild
            Bazar</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Use flexbox utility classes to change how the child elements are justified -->
        <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

            <!-- Show this only lg screens and up -->
            <a class="navbar-brand d-none d-lg-block" href="index.php"><img src="images/logoblanc.png" width="25px" height="25px">
                Wild Bazar</a>

            <ul class="texto navbar-nav text-white px-3">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> About Us </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Top Selling </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"> Contact Us </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Catégories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="apple.php">Apples</a>
                        <a class="dropdown-item" href="windows.html">Windows</a>
                        <a class="dropdown-item" href="penguins.html">Penguins</a>
                        <a class="dropdown-item" href="raspberries.html">Raspberries</a>
                        <a class="dropdown-item" href="developers.html">Developpers</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">A bite of Apple</h1>
            <h3 class="lead">When you compile performance and élégance</h3>
        </div>
    </div>

</header>

<main>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <!-- cards 1 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeVer">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-_-ver.jpeg.bmp" alt="Pomme Ver">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Worm"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade " id="pommeVer" tabindex="-1" role="dialog" aria-labelledby="pommeVer" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title -->
                        <h4 id="pomme_ver">Apple - Worm</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics , prices , description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures -->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-_-ver.jpeg.bmp" alt="Pomme Ver">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>40</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>
                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 2  -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeNoire">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-deco-en-resine-28cm-noir.jpg" alt="Pomme Noire">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Black"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeNoire" tabindex="-1" role="dialog" aria-labelledby="pommeNoire" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_noire">Apple - Black</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-deco-en-resine-28cm-noir.jpg" alt="Pomme Noire">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>50</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 3 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeViolette">
                <img class="card-img-top img-fluid mt-3" src="images/apple/Minaudiere-Pomme-Violet-11.jpg" alt="Pomme Violette">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Violet"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeViolette" tabindex="-1" role="dialog" aria-labelledby="pommeViolette" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_violette">Apple - Violet</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/Minaudiere-Pomme-Violet-11.jpg" alt="Pomme Violette">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>50</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 4 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommePourrie">
                <img class="card-img-top img-fluid mt-3" src="images/apple/Pomme-au-four-à-la-crème-de-marrons.jpg" alt="Pomme Pourrie">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Rotten"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommePourrie" tabindex="-1" role="dialog" aria-labelledby="pommePourrie" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_pourrie">Apple - Rotten</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/Pomme-au-four-à-la-crème-de-marrons.jpg" alt="Pomme Pourrie">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>30</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 5 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeRouge">
                <img class="card-img-top img-fluid mt-3" src="images/apple/shutterstock_102978833.jpg" alt="Pomme Rouge">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Red"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeRouge" tabindex="-1" role="dialog" aria-labelledby="pommeRouge" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title -->
                        <h4 id="pomme_rouge">Apple - Red</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics , prices , description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures -->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/shutterstock_102978833.jpg" alt="Pomme Rouge">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>20</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 6  -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeOr">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-or.jpg" alt="pomme Or">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Gold"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeOr" tabindex="-1" role="dialog" aria-labelledby="pommeOr" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_or">Apple - Gold</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-or.jpg" alt="Pomme OR">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>20</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 7 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeBleue">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme5.jpg" alt="Pomme Bleue">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Blue"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeBleue" tabindex="-1" role="dialog" aria-labelledby="pommeBleue" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_bleue">Apple - Blue</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme5.jpg" alt="Pomme Bleue">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>20</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 8 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeJaune">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme_golden.jpg" alt="Pomme Jaune">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Yellow"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeJaune" tabindex="-1" role="dialog" aria-labelledby="pommeJaune" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_jaune">Apple - Yellow</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme_golden.jpg" alt="Pomme Jaune">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>30</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 9 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeCroquee">
                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme.png" alt="Pomme Croquee">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Bite"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeCroquee" tabindex="-1" role="dialog" aria-labelledby="pommeCroquee" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_croquee">Apple - Bite</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/pomme.png" alt="Pomme Croquée">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>25</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cards 10 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeSmoothie">
                <img class="card-img-top img-fluid mt-3" src="images/apple/smoothie-pomme.jpg" alt="Pomme Smoothie">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Smoothie"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeSmoothie" tabindex="-1" role="dialog" aria-labelledby="pommeSmoothie" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_smoothie">Apple - Smoothie</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/smoothie-pomme.jpg" alt="Pomme Smoothie">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>25</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 11 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeJobs">
                <img class="card-img-top img-fluid mt-3" src="images/apple/SteveJobs.jpg" alt="Pomme Jobs">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Jobs"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeJobs" tabindex="-1" role="dialog" aria-labelledby="pommeJobs" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_jobs">Apple - Jobs</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/SteveJobs.jpg"
                                         alt="Pomme Jobs">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>10</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cards 12 -->
        <div class="card">
            <div data-toggle="modal" data-target="#pommeVerte">
                <img class="card-img-top img-fluid mt-3" src="images/apple/fotolia_55372155_subscription_xxl-copy.jpg" alt="Pomme Verte">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Apple "Green"</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pommeVerte" tabindex="-1" role="dialog" aria-labelledby="pomme_Verte" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="pomme_Verte">Apple - Green</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <!-- pics, prices, description & features -->
                            <div class="row mx-3">
                                <div class="col-sm-6">
                                    <!-- pictures-->
                                    <img class="card-img-top img-fluid mt-3" src="images/apple/fotolia_55372155_subscription_xxl-copy.jpg"
                                         alt="Pomme Verte">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>10</h5>
                                    <!-- product description -->
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum
                                        obcaecati
                                        ut error
                                        dolor dolores eveniet.</p>
                                </div>
                            </div>

                            <!-- product features -->
                            <div>
                                <div class="row mx-3">
                                    <div class="col-sm-6 text-center">

                                        <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                        <ul class="text-left">
                                            <li>Size: xx</li>
                                            <li>Weight: xx</li>
                                            <li>Color: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-outline-dark btn-lg">Add to Card</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
    include 'footer.php'
?>







    </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>