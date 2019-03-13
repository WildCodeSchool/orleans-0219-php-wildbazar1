<div class="card">
    <div data-toggle="modal" data-target="#produit<?php echo ($value['num']);?>">
        <img class="card-img-top img-fluid mt-3" src="images/developers/products<?php echo ($value['num']); ?>.jpg" alt="picture of developer <? echo ($value['num']);?>">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo ($value['title']); ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="produit<? echo ($value['num']);?>" tabindex="-1" role="dialog" aria-labelledby="produit <? echo ($value['num']); ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titreduproduit<? echo ($value['num']);?>"><?php echo ($value['title']); ?></h4>
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
                            <img class="card-img-top img-fluid mt-3" src="images/developers/products<? echo ($value['num']);?>.jpg" alt="image du produit<? echo ($value['num']);?>">
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