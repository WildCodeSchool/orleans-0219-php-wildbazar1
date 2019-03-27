<?php
?>
<!-- Card -->
<div class="card">
    <div data-toggle="modal" data-target="#produit<?= $product['id'] ?>">
        <img class="card-img-top img-fluid mt-3" src="<?= htmlentities($product['picture']); ?>"
             alt="image <?= htmlentities($product['title']) ?>">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo htmlentities($product['title']); ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="produit<?= $product['id'] ?>" tabindex="-1" role="dialog"
     aria-labelledby="produit<?= htmlentities($product['title']) ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titreduproduit"><?= htmlentities($product['title']) ?></h4>
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
                            <div class="col-sm-6">
                                <!-- prices -->
                                <h5><i class="fab fa-bitcoin"></i><?= htmlentities($product['price']) ?></h5>
                                <!-- product description -->
                                <p><?= htmlentities($product['description']) ?></p>
                            </div>
                        </div>
                        <!-- product features -->
                        <div>
                            <div class="row mx-3">
                                <div class="col-sm-6 text-center">

                                    <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                    <ul class="text-left">
                                        <li>Size: <?= htmlentities($product['size']) ?></li>
                                        <li>Weight: <?= htmlentities($product['weight']) ?></li>
                                        <li>Color: <?= htmlentities($product['color']) ?></li>
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
</div>
