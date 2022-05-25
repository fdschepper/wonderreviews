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
    }
    .post_link{
        display: flex;
        flex-direction: row-reverse;
    }

</style></head>
<body>
    <div class="banner">
        <img src="https://i.guim.co.uk/img/media/6c9304db6968dbcb611c74221d3d9937f8d10d9f/283_23_1478_887/master/1478.jpg?width=1200&height=630&quality=85&auto=format&fit=crop&overlay-align=bottom%2Cleft&overlay-width=100p&overlay-base64=L2ltZy9zdGF0aWMvb3ZlcmxheXMvdGctcmV2aWV3LTIucG5n&s=b98ef7ac4d651c56c5e692aa0c9e4a89" alt="">
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
        <p> <?php echo $content; //door echo $content; kan je de dingen die in de post staan laten zien ?></p>
    </div>
</body>

