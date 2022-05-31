<?php
/*
 * Template Name: Post
 */

$title = get_the_title();
$content = get_the_content();
$score = intval(get_field('score'));
$passed;

if ($score > 5)
{
    $passed = true;
}
else{
    $passed = false;
}
?>
<head><style>
    .post_title{
        text-align: center;
    }
    .post_afbeelding{
        display: flex;
        flex-direction: row;
    }
    .post_link{
        display: flex;
        flex-direction: row-reverse;
    }

</style></head>
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
    
    <h1 class="post_title"> <?php echo $title;  ?> </h1>
    
    <div class="single-container">
        <p><?php echo $content; ?></p>
    </div>
    <!-- decide the color of the score -->
    <div 
    <?php if($passed == true){
        echo 'class="score-good"';
    }
    else { echo 'class="score-bad"';}
    ?>
    >
    <?php echo the_field('score')?></div>
</body>

