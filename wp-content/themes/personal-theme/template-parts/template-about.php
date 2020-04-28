<?php

/*
    Template Name: About
*/

get_header();
?>

<main class="main__about">
    <?php
    $about = new WP_Query([
        'post_type' => 'page',
        'pagename' => 'about',
    ]);

    if ($about->have_posts()): while ($about->have_posts()) : $about->the_post();
    ?>
    <div class="about">
        <h2 class="about__h2">About me</h2>
        <p class="about__sub-title"><?php the_field('sub-title'); ?></p>
        <div class="about__content">
            <div class="about__description">
                <h3 class="description__title">Who's Goran ?</h3>
                <?php the_field('whos_goran'); ?>
                <div class="about__links">
                    <div>
                        <a href="<?php the_field('first_link'); ?>" class="about__first-link"><?php the_field('first_link_text'); ?></a>
                    </div>
                    <div>
                        <a href="<?php the_field('second_link'); ?>" class="about__second-link"><?php the_field('second_link_text'); ?></a>
                    </div>
                </div>
            </div>
    <?php endwhile; else: ?>
        <p class="empty"></p>
    <?php endif; ?>
            <div class="about__experience">
                <h3 class="experience__title">My experience</h3>
                <?php
                $exp = new WP_Query([
                    'post_type' => 'experience',
                    'order'=>'DESC',
                    'order_by'=>'date'
                ]);

                if ($exp->have_posts()): while ($exp->have_posts()) : $exp->the_post();
                ?>

                <div class="exp">
                    <p><?php the_field('date'); ?></p>
                    <h4><?php the_field('institution'); ?></h4>
                    <p><?php the_field('job'); ?></p>
                </div>

                <?php endwhile; else: ?>
                    <p class="empty"></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

