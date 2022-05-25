<?php
/*
 * Template Name: About Us
 */

$title = get_the_title();
$content = get_the_content();


?>
<head>
    <style> </style>
</head>
<body>
    <div class="banner">
        <img src="https://image.shutterstock.com/image-vector/vector-banner-design-circuit-board-260nw-1233925105.jpg" alt="">
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

