<?php
/*
 * Template Name: Home
 */

$args = array(
    'numberposts'=> 9
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
        <img src="./assets/img/wonder.png">
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
        <br><br><br>
        <div class="row"> 
            <div class="review"> <a href="<?php echo get_permalink($posts[0]->ID); ?>"><?php echo $posts[0]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[2]->ID); ?>"><?php echo $posts[2]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[1]->ID); ?>"><?php echo $posts[1]->post_title; ?></a> </div>
        </div>
        <div class="row"> 
            <div class="review"> <a href="<?php echo get_permalink($posts[3]->ID); ?>"><?php echo $posts[3]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[4]->ID); ?>"><?php echo $posts[4]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[5]->ID); ?>"><?php echo $posts[5]->post_title; ?></a> </div>
        </div>
        <div class="row"> 
            <div class="review"> <a href="<?php echo get_permalink($posts[6]->ID); ?>"><?php echo $posts[6]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[7]->ID); ?>"><?php echo $posts[7]->post_title; ?></a> </div>
            <div class="review"> <a href="<?php echo get_permalink($posts[8]->ID); ?>"><?php echo $posts[8]->post_title; ?></a> </div>
        </div>
    </div>

    <?php $str = "whentsdadsaheimposterissus";
    if (strlen($str) > 10)
    $str = substr($str, 0, 7) . '...'; 
    echo $str?>
    
</body>

