<?php

$title = get_the_title();
$content = get_the_content();

$reviewsCategories = get_the_terms(\get_post(), 'reviewsCategory');

render('reviews/templates/reviews-detail.php', compact('title','content', 'reviewsCategories'));