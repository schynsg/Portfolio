<?php

/*
    404 page
    Error page
*/

get_header();

?>

<main>
    <div class="404_div">
        <h2 class="404_title">Sorry, this page doesn't exist.</h2>
        <a href="<?= get_home_url(); ?>" class="404_link">Return home</a>
    </div>
</main>


<?php get_footer(); ?>
