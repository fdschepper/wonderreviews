<?php
/*
 * Template Name: Home
 */

$title = get_the_title();
$content = get_the_content();

?>

<body>
    <div class="banner">
        <img src="https://i.guim.co.uk/img/media/6c9304db6968dbcb611c74221d3d9937f8d10d9f/283_23_1478_887/master/1478.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctcmV2aWV3LTIucG5n&s=b98ef7ac4d651c56c5e692aa0c9e4a89" alt="">
    </div>

    <div class="nav">
        <li>
            <a href="">home</a>
        </li>
        <li>
            <a href="">about us</a>
        </li>
        <li>
            <a href="">archive</a>
        </li>
    </div>

    <h1> <?php echo $title; ?> </h1>
    <div class="home-container">
        <p> <?php echo $content; ?></p>
    </div>
</body>

