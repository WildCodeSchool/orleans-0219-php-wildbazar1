<?php
$products = [

    'products1' => ['Sweat \"Got Linux ?\"', '40', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT GOT LINUX ? dolores eveniet', 'XL', '10lb', 'Black'],
    'products2' => ['Sweat \"Peace, Love, Linux\"', '50', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT Peace, Love, Linux dolores eveniet', 'L', '11lb', 'Black'],
    'products3' => ['Sweat \" May the force be with you\"', '45', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT May the source be with you ? dolores eveniet', 'XXL', '12lb', 'Black'],
    'products4' => ['Sweat \"Why so Windows ?\"', '30', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati T-shirt Why so Windows ? dolores eveniet', 'M', '6lb', 'White'],
    'products5' => ['Mug \"Fork You\"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Fork You dolores eveniet', 'Standard', '8lb', 'Black'],
    'products6' => ['Mug \"Just sudo It\"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Just sudo It dolores eveniet', 'Standard', '8lb', 'White'],
    'products7' => ['Mug \"Del Windows\"', '20', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Del windows dolores eveniet', 'XL', '10lb', 'White'],
    'products8' => ['Plush \"Tux\"', '30', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Plush Tux dolores eveniet', '1,2 in', '5lb', 'Black'],
    'products9' => ['Cap \"Tux\"', '25', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Tux dolores eveniet', 'L', '10lb', 'Light brown'],
    'products10' => ['Cap \"Ubuntu\"', '25', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Ubuntu dolores eveniet', 'L', '10lb', 'Black & white'],
    'products11' => ['Sticker \"sudo rm\"', '10', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker sudo rm dolores eveniet', '2 in', '1lb', 'Black'],
    'products12' => ['Sticker \"Gnu/Linux\"', '10', 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker Gnu/Linux dolores eveniet', '2 in', '1lb', 'Black & White'],
];



?>
<div class="card">
    <div data-toggle="modal" data-target="#produit1">
        <img class="card-img-top img-fluid mt-3" src="images/penguins/sweat1.jpg" alt="image du sweat 1">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo $Products; ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="produit1" tabindex="-1" role="dialog" aria-labelledby="produit1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titreduproduit1">Sweat "Got linux ?"</h4>
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
                            <img class="card-img-top img-fluid mt-3" src="images/penguins/sweat1.jpg" alt="image du produit1">
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

                                <button type="button" class="btn btn-lg">Add to card</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
};