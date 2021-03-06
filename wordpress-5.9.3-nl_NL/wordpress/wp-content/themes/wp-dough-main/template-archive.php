<?php
/*
 * Template Name: Archive
 */

$args = array(
    'numberposts'=> 9999999999999,
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
        <img src="https://i.imgur.com/IEuWhRq.png" alt="">
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
        <?php foreach ($posts as $post): ?>
        <div class="row"> 
            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a> 
                </div>  
                <div class="post-bottom">
                    <p><?php $str = $post->post_content;echo $str;?></p>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</body>

