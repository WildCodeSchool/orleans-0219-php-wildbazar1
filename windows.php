<?php

$pageTitle = 'Windows';
$pageUnderTitle = 'let you see the perfect blue screen';
include 'header.php';
?>

<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
            shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
          href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
          crossorigin="anonymous">


    <link rel="stylesheet" href="../css/style_windows.css">

    <title>Wild Bazar</title>
</head>

<body>

<main>

    <div class="justify-content-center m-5 d-flex flex-wrap card-columns">

        <?php

$products = [
[
    'title' => 'broken windows',
    'price' => '40',
    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
    'size' => 'xx',
    'weight' => 'xx',
    'color' => 'xx',
    'picture' => '1.png',

],

[
    'title' => 'city windows',
    'price' => '50',
    'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
    'size' => 'xx',
    'weight' => 'xx',
    'color' => 'xx',
    'picture' => '2.png',

],

    [
        'title' => 'wooden windows',
        'price' => '50',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '3.png',

    ],

    [
        'title' => 'roof top windows',
        'price' => '30',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '4.png',

    ],

    [
        'title' => 'blue windows',
        'price' => '30',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '5.png',



    ],

    [
        'title' => 'white windows',
        'price' => '200',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '6.png',

    ],
    [
        'title' => 'curvy windows',
        'price' => '20',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '7.png',

    ],
    [
        'title' => 'snowy windows',
        'price' => '30',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '8.png',

    ],
    [
        'title' => 'cottage windows',
        'price' => '50',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '9.png',

    ],
    [
        'title' => 'over populated windows',
        'price' => '25',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '10.png',

    ],
    [
        'title' => 'peacefull windows',
        'price' => '10',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '11.png',

    ],
    [
        'title' => 'windows XP',
        'price' => '0',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum obcaecati ut error dolor dolores eveniet, accusamus ea odit dicta dignissimos animi labore vitae. Eveniet suscipit, quod dolorum culpa est quibusdam.',
        'size' => 'xx',
        'weight' => 'xx',
        'color' => 'xx',
        'picture' => '12.png',

    ],



    ];

foreach ($products as $key => $value ){
    include'windowscards.php';
    }
?>




</main>

<!-- zone footer -->
<?php

include 'footer.php';

?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>