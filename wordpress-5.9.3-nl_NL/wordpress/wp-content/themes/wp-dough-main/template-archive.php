<?php
/*
 * Template Name: Home
 */

$args = array(
    'numberposts'=> 9
    'post_type'=> 'reviews'
);              

$title = get_the_title();
$content = get_the_content();
$posts = get_posts($args);
$links = get_permalink();

function DiplayPost($index)
{
    
}

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
    <div class="home-container">
        <?php ?>
    </div>

    <?php $str = "whentsdadsaheimposterissus";
    if (strlen($str) > 10)
    $str = substr($str, 0, 7) . '...'; 
    echo $str?>
    
</body>

