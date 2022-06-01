<?php
/*
 * Template Name: Home
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
        <br><br><br>
        <div class="row"> 
            <!-- reviews row 1 -->
            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[0]->ID); ?>"><?php echo $posts[0]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[0]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[1]->ID); ?>"><?php echo $posts[1]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[1]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[2]->ID); ?>"><?php echo $posts[2]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[2]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>
        </div>

        <div class="row"> 
            <!-- reviews row 2 -->
            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[3]->ID); ?>"><?php echo $posts[3]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[3]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[4]->ID); ?>"><?php echo $posts[4]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[4]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[5]->ID); ?>"><?php echo $posts[5]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[5]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>
        </div>

        <!-- reviews row 3 -->

        <div class="row"> 
            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[6]->ID); ?>"><?php echo $posts[6]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[6]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[7]->ID); ?>"><?php echo $posts[7]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[7]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>

            <div class="review">
                <div class="post-top">
                    <a class="title" href="<?php echo get_permalink($posts[8]->ID); ?>"><?php echo $posts[8]->post_title; ?></a> 
                </div>
                <div class="post-bottom">
                    <p><?php $str = $posts[8]->post_content; if (strlen($str) > 40)$str = substr($str, 0, 40) . '...'; echo $str?></p>
                </div>
            </div>
        </div>

    
    
</body>

