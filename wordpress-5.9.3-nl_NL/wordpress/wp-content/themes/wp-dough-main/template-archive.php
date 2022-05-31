<?php
/*
 * Template Name: Archive
 */

$args = array(
    'numberposts'=> 9,
    'post_type'=> 'reviews'
);              

$title = get_the_title();
$content = get_the_content();
$posts = get_posts($args);
$links = get_permalink();

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
            <a href="http://wonderproject/">home</a>
        </li>
        <li>
            <a href="http://wonderproject/about-us/">about us</a>
        </li>
        <li>
            <a href="http://wonderproject/archive">archive</a>
        </li>
    </div>
    
    <div class="home-container">
        <?php foreach ($posts as $post): { ?>
        <div class="row"> 
            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[0]->ID); ?>"><?php echo $posts[0]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[0]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str;?></p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</body>

