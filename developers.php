<?php
//Title h1 and h3 (in jumbotron) for each page
$pageTitle = "The power of developpers";
$pageUnderTitle = "Sales our better developers!";

include 'header.php';

?>

<main>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <!-- cards 1 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit1">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products1.jpg" alt="image du sweat 1">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Zen your projects</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade " id="produit1" tabindex="-1" role="dialog" aria-labelledby="produit1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title -->
                        <h4 id="titreduproduit1">Zen your projects</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products1.jpg" alt="image du produit1">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5><i class="fab fa-bitcoin"></i>70</h5>
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 2  -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit2">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products2.jpg" alt="image du produit2">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Data-analyst</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit2" tabindex="-1" role="dialog" aria-labelledby="produit2" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit2">Data-analyst</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products2.jpg" alt="image du produit1">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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
                <img class="card-img-top img-fluid mt-3" src="images/developers/products3.jpg" alt="image du produit3">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Webdesign and safely your projects</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit3" tabindex="-1" role="dialog" aria-labelledby="produit3" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit3">Webdesign and safely your project</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products3.jpg" alt="image du produit1">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 4 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit4">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products4.jpg" alt="image du produit3">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Specialist Symphony</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit4" tabindex="-1" role="dialog" aria-labelledby="produit4" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit4">Specialist Symphony</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products4.jpg" alt="image du produit4">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 5 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit5">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products5.jpg" alt="image du produit5">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Dev Style</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit5" tabindex="-1" role="dialog" aria-labelledby="produit5" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title -->
                        <h4 id="titreduproduit5">Dev Style</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products5.jpg" alt="image du produit1">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 6  -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit6">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products6.jpg" alt="image du produit6">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Work together</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit6" tabindex="-1" role="dialog" aria-labelledby="produit6" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit6">Work together</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products6.jpg" alt="image du produit1">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 7 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit7">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products8.jpg" alt="image du produit7">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Clear mind</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit7" tabindex="-1" role="dialog" aria-labelledby="produit7" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit7">Clear mind</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products8.jpg" alt="image du produit1">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 8 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit8">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products12.jpg" alt="image du produit8">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Never stop dreaming !</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit8" tabindex="-1" role="dialog" aria-labelledby="produit8" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit8">Never stop dreaming !</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products12.jpg" alt="image du produit4">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 9 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit9">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products10.jpg" alt="image du produit8">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Upgrade your projects</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit9" tabindex="-1" role="dialog" aria-labelledby="produit9" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit9">Upgrade your projects</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products10.jpg" alt="image du produit4">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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
        <!-- cards 10 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit10">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products11.jpg" alt="image du produit8">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Workflow</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit10" tabindex="-1" role="dialog" aria-labelledby="produit" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit10">Workflow</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products11.jpg" alt="image du produit4">
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
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

        <!-- cards 11 -->
        <div class="card">
            <div data-toggle="modal" data-target="#produit11">
                <img class="card-img-top img-fluid mt-3" src="images/developers/products9.jpg" alt="image du produit11">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Security!</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit11" tabindex="-1" role="dialog" aria-labelledby="produit9" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit11">Too expensive!</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/products9.jpg"
                                         alt="image du produit11">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5>Not enough!</h5>
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-lg">Prepare to be empty your count!</button>
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
            <div data-toggle="modal" data-target="#produit12">
                <img class="card-img-top img-fluid mt-3" src="images/developers/linus.jpg" alt="image du produit12">
                <div class="card-body">
                    <!-- product description-->
                    <h4 class="card-title text-center">Better security &#128514;</h4>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="produit12" tabindex="-1" role="dialog" aria-labelledby="produit10" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- product title-->
                        <h4 id="titreduproduit12">Not to sale, because i'm free!</h4>
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
                                    <img class="card-img-top img-fluid mt-3" src="images/developers/linus.jpg"
                                         alt="image du produit4">
                                </div>
                                <div class="col-sm-6">
                                    <!-- prices -->
                                    <h5>Free!</h5>
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
                                            <li>Language: xx</li>
                                            <li>Speciality: xx</li>
                                            <li>Experience: xx</li>
                                        </ul>
                                    </div>


                                    <div class="col-sm-6 text-center align-self-center">

                                        <button type="button" class="btn btn-lg">Impossible!</button>
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

<!-- zone footer -->

<footer class="footer container-fluid">
    <div class="row px-3 pt-3 justify-content-center">
        <div class="col-12 col-lg-6 collumn-left">
            <div class="row footer-link">
                <nav class="flex-column">
                    <a class="nav-link" href="index.html">Home</a>
                    <a class="nav-link" href="index.html#aboutUs">About us</a>
                    <a class="nav-link" href="index.html#topSelling">Top
                        selling</a>
                    <a class="nav-link" href="index.html#contactUs">Contact</a>
                    <a class="nav-link" href="index.html">Legal mentions</a>
                </nav>
                <nav class="flex-column">
                    <a class="nav-link" href="apple.html">Apple</a>
                    <a class="nav-link" href="windows.html">Windows</a>
                    <a class="nav-link" href="penguins.html">Penguin</a>
                    <a class="nav-link" href="raspberries.html">Raspberry</a>
                    <a class="nav-link" href="developers.html">Dev</a>
                </nav>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2><img src="./images/logoblanc.png"><span class="align-baseline">Wild Bazar</span></h2>
                    <div id="address">
                        1,rue de la paix<br>
                        75000 Paris<br>
                        01-23-45-67-89
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 justify-content-center
                        collumn-right">
            <h3 class="text-center" id="contactUs">Contact us</h3>
            <form>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-2
                                    col-form-label">Email</label>
                    <div class="col-8">
                        <input type="email" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleFormControlTextarea1" class="col-2
                                    col-form-label">Message</label>
                    <div class="col-8">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <span>

                            <a>Made with <i class="fa fa-heart pulse"></i> by Vincent Mouline, Vanina Diot, Vincent Ostyn, Sylvain Lamoureux & Maïwenn Gay</a>
                         </span>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>