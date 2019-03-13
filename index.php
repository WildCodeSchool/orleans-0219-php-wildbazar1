<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link href="http://fr.allfont.net/allfont.css?fonts=courier" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <title>Wild Bazar</title>
</head>

<body>

    <header>

        <nav id="gradient" class="navbar fixed-top navbar-expand-lg navbar-light navbar-top">

            <!-- Show this only on mobile to medium screens -->
            <a class="navbar-brand d-lg-none" href="#"><img src="images/logoblanc.png" alt="logo"> Wild
                Bazar</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
                aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Use flexbox utility classes to change how the child elements are justified -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

                <!-- Show this only lg screens and up -->
                <a class="navbar-brand d-none d-lg-block" href="#"><img src="images/logoblanc.png" alt="logo">
                    Wild Bazar</a>

                <ul class="texto navbar-nav text-white px-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutUs"> About Us </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#topSelling"> Top Selling </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contactUs"> Contact Us </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Categories
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
                <h1 class="display-4">Wild Bazar</h1>
                <h3 class="lead">We can find everything but mostly anything !</h3>
            </div>
        </div>

    </header>


    <main class="container-fluid">

        <section id="catégories">
            <div class="px-5 py-5">
                <div class="text-center mb-4">
                    <i class="fas fa-caret-up"></i>
                    <h2>Categories</h2><i class="fas fa-caret-down"></i>
                </div>
                <div id="portfolio">
                    <div class="container-fluid">
                        <div class="row no-gutters">


                            <div class="col-lg-4 col-md-4 line1">
                                <div class="portfolio-item wow fadeInUp">
                                    <a href="apple.php">
                                        <img src="images/categories_index/apple-1122537_1280.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h3 class="text1">A bite of Apple</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 line1">
                                <div class="portfolio-item wow fadeInUp">
                                    <a href="windows.html">
                                        <img src="images/categories_index/40-fenetre-et-volets-bois.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h3 class="text1">Light trough the Window</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 line1">
                                <div class="portfolio-item wow fadeInUp">
                                    <a href="penguins.html">
                                        <img src="images/categories_index/penguin-56101_1280.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h3 class="text1">Freedom as a Penguin</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="portfolio">
                    <div class="container-fluid">
                        <div class="row no-gutters">
                            <div class="col-lg-4 col-md-4 center">
                                <div class="portfolio-item wow fadeInUp">
                                    <a href="rasberries.html">
                                        <img src="images/categories_index/rasberry-2812469_1280.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h3 class="text1">Taste of Rasberries</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 center">
                                <div class="portfolio-item wow fadeInUp">
                                    <a href="developers.html">
                                        <img src="images/categories_index/computer-1209641_1280.jpg" alt="">
                                        <div class="portfolio-overlay">
                                            <div class="portfolio-info">
                                                <h3 class="text1">Powers of Devellopers</h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section id="aboutUs" class="aboutus">
            <!--partie sylvain-->

            <div class="px-5 py-5">
                <!--espacement section-->
                <div class="text-center mb-4">
                    <!--position h2-->
                    <i class="fas fa-caret-up"></i>
                    <h2>About us</h2><i class="fas fa-caret-down"></i>
                    <!--titre section-->
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-12">
                        <div class="text-center ">
                            <img src="images/wild.jpg" class=" img-thumbnail px-1 py-1" alt="Responsive image">
                            <!--image-->
                        </div>
                    </div>
                    <div class="col-lg-9 col-sm-12">
                        <p class="text-align-center px-3 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Integer tempor
                            laoreet urna, id lobortis mauris varius eu. Aenean in molestie felis,
                            semper rhoncus leo. Phasellus ut metus ut eros facilisis accumsan et
                            quis mauris. Curabitur sodales elit
                            nisl, quis tincidunt orci auctor ac. In sed cursus enim, ut feugiat
                            erat. Etiam gravida feugiat nisi, et porttitor tellus euismod eget.
                            Aliquam neque dui, facilisis ac mi ut, tincidunt congue quam.Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Integer tempor.
                        </p>
                        <p class="text-align-center px-3 py-1">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit. Integer tempor
                            laoreet urna, id lobortis mauris varius eu. Aenean in molestie felis,
                            semper rhoncus leo.
                        </p>
                        <!--texte-->
                    </div>
                </div>
            </div>
        </section>
        <!--fin partie sylvain-->
        <br>
        <!-- Section Top Selling crée par vinny. Utilisation de cards bootstrap -->

        <section id="topSelling" class="topselling">
            <div class="px-5 py-5">
                <div class="text-center mb-4">
                    <i class="fas fa-caret-up"></i>
                    <h2> Top Selling</h2><i class="fas fa-caret-down"></i>
                    </br>
                    <h3 class="py-3"> Find our best sells here </h3>
                </div>

                <!-- images Top Selling -->

                <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

                    <!-- cards 1 -->
                    <div class="card">
                        <div data-toggle="modal" data-target="#produit1">
                            <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-or.jpg" alt="Pomme Or">
                            <div class="card-body">
                                <!-- product description-->
                                <h4 class="card-title text-center">Pomme Or</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade " id="produit1" tabindex="-1" role="dialog" aria-labelledby="produit1"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- product title -->
                                    <h4 id="titreduproduit1">Pomme Or</h4>
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
                                                <img class="card-img-top img-fluid mt-3" src="images/apple/pomme-or.jpg" alt="Pomme Or">
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- prices -->
                                                <h5><i class="fab fa-bitcoin"></i>20000000</h5>
                                                <!-- product description -->
                                                <p>Sa couleur or fera chaviré vos coeurs , cette élégance signé "Pomme"
                                                    à été intégrée à merveille dans ce modèle.</p>
                                            </div>
                                        </div>
                                        <!-- product features -->
                                        <div>
                                            <div class="row mx-3">
                                                <div class="col-sm-6 text-center">

                                                    <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                                    <ul class="text-left">
                                                        <li>Gold</li>
                                                        <li>Paillettes</li>
                                                        <li>10lb</li>
                                                        </ul>
                                                </div>

                                                <div class="col-sm-6 text-center align-self-center">

                                                    <button type="button" class="btn btn-lg">Add to
                                                        card</button>
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
                        <div data-toggle="modal" data-target="#produit5">
                            <img class="card-img-top img-fluid mt-3" src="images/penguins/mug1.jpg" alt="image du produit5">
                            <div class="card-body">
                                <!-- product description-->
                                <h4 class="card-title text-center">Mug "Fork You"</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="produit5" tabindex="-1" role="dialog" aria-labelledby="produit5" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- product title -->
                                    <h4 id="titreduproduit5">Mug "Fork You"</h4>
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
                                                <img class="card-img-top img-fluid mt-3" src="images/penguins/mug1.jpg" alt="image du produit2">
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
        
                                                    <button type="button" class="btn btn-lg">Add to card</button>
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
                        <div data-toggle="modal" data-target="#produit3">
                            <img class="card-img-top img-fluid mt-3" src="images/windows/7.png" alt="image du produit7">
                            <div class="card-body">
                                <!-- product description-->
                                <h4 class="card-title text-center">Product 7</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="produit3" tabindex="-1" role="dialog" aria-labelledby="produit3"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <!-- product title-->
                                    <h4 id="titreduproduit3">Product 7</h4>
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
                                                <img class="card-img-top img-fluid mt-3" src="images/windows/7.png" alt="image du produit3">
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- prices -->
                                                <h5><i class="fab fa-bitcoin"></i>5000</h5>
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

                                                    <button type="button" class="btn btn-lg">Add to
                                                        card</button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <br>
        <!-- fin de section top selling cree par vinny -->
    </main>

    <?php
    include 'footer.php'
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>