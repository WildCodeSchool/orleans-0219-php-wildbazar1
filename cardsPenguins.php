<?php
?>


<div class="card">
    <div data-toggle="modal" data-target="#produit<?php echo $product; ?>">
        <img class="card-img-top img-fluid mt-3" src="images/penguins/<?php echo $caracteristic[6]; ?>" alt="image du sweat 1">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo $caracteristic[0]; ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="produit<?php echo $product; ?>" tabindex="-1" role="dialog" aria-labelledby="produit1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titreduproduit1"><?php echo $caracteristic[0]; ?></h4>
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
                            <img class="card-img-top img-fluid mt-3" src="images/penguins/<?php echo $caracteristic[6]; ?>" alt="image du produit1">
                        </div>
                        <div class="col-sm-6">
                            <!-- prices -->
                            <h5><i class="fab fa-bitcoin"></i><?php echo $caracteristic[1]; ?></h5>
                            <!-- product description -->
                            <p><?php echo $caracteristic[2] ?></p>
                        </div>
                    </div>
                    <!-- product features -->
                    <div>
                        <div class="row mx-3">
                            <div class="col-sm-6 text-center">

                                <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                <ul class="text-left">
                                    <li>Size: <?php echo $caracteristic[3] ?></li>
                                    <li>Weight: <?php echo $caracteristic[4] ?></li>
                                    <li>Color: <?php echo $caracteristic[5] ?></li>
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
