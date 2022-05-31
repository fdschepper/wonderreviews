<?php
/*
 * Template Name: About Us
 */

$title = get_the_title();
$content = get_the_content();


?>
<head>
<style> 
    .aboutustext{ 
            font-size: 150%
    }
</style>
</head>
<body>
    <div class="banner">
        <img src="http://get.imglarger.com:8889/results/zrM7LG6w_4x.jpg" alt="">
    </div>

    <div class="nav">
        <li>
            <a href="http://wonderproject/">home</a>
        </li>
        <li>
            <a href="http://wonderproject/about-us/">about us</a>
        </li>
        <li>
            <a href="http://wonderproject/archive">archive</a>
        </li>
    </div>

    <h1> <?php echo $title; ?> </h1>
    <div class="home-container">
        <p class="aboutustext"> <?php echo $content; ?></p>
    </div>
</body>

