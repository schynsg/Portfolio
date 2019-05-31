<?php

/*
    Template Name: Projects
*/

get_header();
?>

<main class="index__projects">
    <?php
    $project = new WP_Query([
        'post_type' => 'page',
        'pagename' => 'projects',
    ]);

    if ($project->have_posts()): while ($project->have_posts()) : $project->the_post();
    ?>

    <div class="projects">

        <h2 class="projects__h2">My projects</h2>
        <p class="about__sub-title"><?php the_field('sub-title'); ?></p>

    <?php endwhile; else: ?>
        <p class="empty"></p>
    <?php endif; ?>

        <div class="projects__content">
            <?php
            $exp = new WP_Query([
                'post_type' => 'project',
                'order'=>'DESC',
                'order_by'=>'date'
            ]);

            if ($exp->have_posts()): while ($exp->have_posts()) : $exp->the_post();
                ?>

                <div class="project">
                    <a href="<?php the_permalink(); ?>">
                    <div class="project__div">
                        <div class="project__title">
                            <h3 class="project__h3"><?php the_field('name'); ?></h3>
                        </div>
                        <div class="project__img">
                            <img src="<?php the_field('vignette'); ?>" alt="<?php the_field('name'); ?>">
                        </div>
                    </div>
                    </a>
                </div>

            <?php endwhile; else: ?>
                <p class="empty"></p>
            <?php endif; ?>
        </div>
    </div>
</main>


<?php get_footer(); ?>