<?php
/*
 * Template Name: Home
 */

      

$title = get_the_title();
$content = get_the_content();
$links = get_permalink();

function DiplayPost($index)
{
    $args = array(
        'numberposts'=> 9
    );        
    $posts = get_posts($args);

    return ?>             
    <div class="$title"> <a href="<?php  echo get_permalink($posts[$index]->ID); ?>"><?php echo $posts[$index]->post_title; ?></a> </div>
    <?php
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
            <a href="">archve</a>
        </li>
    </div>
    <div class="home-container">
        <br><br><br>
        <div class="row"> 
            <?php DiplayPost(1); ?>
        </div>
        <div class="row"> 
            
        </div>
        <div class="row"> 
        
        </div>
    </div>

    <?php $str = "whentsdadsaheimposterissus";
    if (strlen($str) > 10)
    $str = substr($str, 0, 7) . '...'; 
    echo $str?>
    
</body>

