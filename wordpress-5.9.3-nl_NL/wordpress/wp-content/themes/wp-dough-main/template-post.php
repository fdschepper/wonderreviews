<?php
/*
 * Template Name: Post
 */

$title = get_the_title();
$content = get_the_content();

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

    <h1 class="post_title"> <?php echo $title; //door echo $title; kan je de titel van de post laten zien ?> </h1>
    <div class="post-container">
        <p> <a class="post_link" href="https://kidzcity.nl/?utm_source=www.google.com&amp;utm_medium=organic&amp;utm_content=" target="_blank" rel="noopener">pretpark</a>
        <p><?php echo $content; ?></p>
<!--<img class="post_afbeelding" src="https://www.want.nl/wp-content/uploads/2021/03/Among-Us-feat.jpg" alt="among us afbeelding" height="400" />-->
        
    </div>
</body>

