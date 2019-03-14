<?php
/**
 * Created by PhpStorm.
 * User: cyrano
 * Date: 2019-03-13
 * Time: 15:50
 */

?>

<div class="card">
    <div data-toggle="modal" data-target="#<?php echo $key; ?>">
        <img class="card-img-top img-fluid mt-3" src="images/raspberries/<?php echo $value[3]; ?>" alt="image du <?php echo $key; ?>">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo $value[1]; ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $key; ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titredu<?php echo $key; ?>"><?php echo $value[1]; ?></h4>
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
                            <img class="card-img-top img-fluid mt-3" src="images/raspberries/<?php echo $value[3]; ?>" alt="image du <?php echo $key; ?>">
                        </div>
                        <div class="col-sm-6">
                            <!-- prices -->
                            <h5><i class="fab fa-bitcoin"></i><?php echo $value[0]; ?></h5>
                            <!-- product description -->
                            <p><?php echo $value[2]; ?></p>
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

                                <button type="button" class="btn btn-lg">Add to Cart</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

