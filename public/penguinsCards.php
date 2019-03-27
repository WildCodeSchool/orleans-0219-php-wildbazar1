<?php

?>


<div class="card">
    <div data-toggle="modal" data-target="#produit<?php echo $product; ?>">
        <img class="card-img-top img-fluid mt-3" src="<?php echo htmlentities($caracteristic['picture']); ?>" alt="image <?php echo htmlentities($caracteristic['title']); ?>">
        <div class="card-body">
            <!-- product description-->
            <h4 class="card-title text-center"><?php echo htmlentities($caracteristic['title']); ?></h4>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade " id="produit<?php echo $product; ?>" tabindex="-1" role="dialog" aria-labelledby="produit<?php echo htmlentities($caracteristic['title']); ?>" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- product title -->
                <h4 id="titreduproduit1"><?php echo htmlentities($caracteristic['title']); ?></h4>
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
                            <img class="card-img-top img-fluid mt-3" src="<?php echo htmlentities($caracteristic['picture']) ?>" alt="image du <?php echo $product; ?>">
                        </div>
                        <div class="col-sm-6">
                            <!-- prices -->
                            <h5><i class="fab fa-bitcoin"></i><?php echo htmlentities($caracteristic['price']) ?></h5>
                            <!-- product description -->
                            <p><?php echo htmlentities($caracteristic['description']) ?></p>
                        </div>
                    </div>
                    <!-- product features -->
                    <div>
                        <div class="row mx-3">
                            <div class="col-sm-6 text-center">

                                <h6 class="text-center caracteristics"> Caracteristics :</h6>
                                <ul class="text-left">
                                    <li>Size: <?php echo htmlentities($caracteristic['size']) ?></li>
                                    <li>Weight: <?php echo htmlentities($caracteristic['weight']) ?></li>
                                    <li>Color: <?php echo htmlentities($caracteristic['color']) ?></li>
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

<?php
$oldProductsArray = [

    [
        'title' => 'Sweat "Got Linux ?"',
        'price' => 40,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT GOT LINUX ? dolores eveniet',
        'size' => 'XL',
        'weight' => '10lb',
        'color' => 'Black',
        'picture' => 'sweat1.jpg',
    ],

    [
        'title' => 'Sweat "Peace, Love, Linux"',
        'price' => 50,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT Peace, Love, Linux dolores eveniet',
        'size' => 'L',
        'weight' => '11lb',
        'color' => 'Black',
        'picture' => 'sweat2.jpeg',
    ],

    [
        'title' => 'Sweat " May the force be with you"',
        'price' => 45,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati SWEAT May the source be with you ? dolores eveniet',
        'size' => 'XXL',
        'weight' => '12lb',
        'color' => 'Black',
        'picture' => 'sweat3.jpg',
    ],

    [
        'title' => 'Sweat "Why so Windows ?"',
        'price' => 30,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati T-shirt Why so Windows ? dolores eveniet',
        'size' => 'M',
        'weight' => '6lb',
        'color' => 'White',
        'picture' => 'tshirt1.jpg',
    ],

    [
        'title' => 'Mug "Fork You"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Fork You dolores eveniet',
        'size' => 'Standard',
        'weight' => '8lb',
        'color' => 'Black',
        'picture' => 'mug1.jpg',
    ],

    [
        'title' => 'Mug "Just sudo It"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Just sudo It dolores eveniet',
        'size' => 'Standard',
        'weight' => '8lb',
        'color' => 'White',
        'picture' => 'mug2.jpg',
    ],

    [
        'title' => 'Mug "Del Windows"',
        'price' => 20,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Mug Del windows dolores eveniet',
        'size' => 'XL',
        'weight' => '10lb',
        'color' => 'White',
        'picture' => 'mug3.jpg',
    ],

    [
        'title' => 'Plush "Tux"',
        'price' => 30,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Plush Tux dolores eveniet',
        'size' => '1,2 in',
        'weight' => '5lb',
        'color' => 'Black',
        'picture' => 'plush1.jpg',
    ],

    [
        'title' => 'Cap "Tux"',
        'price' => 25,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Tux dolores eveniet',
        'size' => 'L',
        'weight' => '10lb',
        'color' => 'Light brown',
        'picture' => 'cap1.jpg',
    ],

    [
        'title' => 'Cap "Ubuntu"',
        'price' => 25,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Cap Ubuntu dolores eveniet',
        'size' => 'L',
        'weight' => '10lb',
        'color' => 'Black & white',
        'picture' => 'cap2.jpg',
    ],

    [
        'title' => 'Sticker "sudo rm"',
        'price' => 10,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker sudo rm dolores eveniet',
        'size' => '2 in',
        'weight' => '1lb',
        'color' => 'Black',
        'picture' => 'stickers1.jpg',
    ],

    [
        'title' => 'Sticker "Gnu/Linux"',
        'price' => 10,
        'description' => 'Lorem ipsum dolor sit, amet consectetur adpsiciing elit. Cum obcaecati Sticker Gnu/Linux dolores eveniet',
        'size' => '2 in',
        'weight' => '1lb',
        'color' => 'Black & White',
        'picture' => 'stickers2.jpg',
    ],
];
?>