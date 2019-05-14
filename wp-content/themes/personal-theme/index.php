<?php get_header(); ?>

<main>
    <div class="background__pic">
        <?php
        $home = new WP_Query([
            'post_type' => 'page',
            'pagename' => 'goran-schyns',
        ]);

        if ($home->have_posts()): while ($home->have_posts()) : $home->the_post();
            ?>

            <div class="introduction">
                <div class="intro__text">
                    <h2 class="intro__h2 hidden">Introduction</h2>
                    <?php the_field('intro'); ?>
                </div>
                <div class="intro__links">
                    <a href="<?php the_field('first_link'); ?>" class="intro__first-link"><?php the_field('first_link_text'); ?></a>
                    <a href="<?php the_field('second_link'); ?>" class="intro__second-link"><?php the_field('second_link_text'); ?></a>
                </div>
            </div>

        <?php endwhile; else: ?>
            <p class="empty"></p>
        <?php endif; ?>



        <div class="social__media">
            <h2 class="media__h2 hidden">My social media</h2>
            <ul class="media__ul">
                <?php
                $media = new WP_Query([
                    'post_type' => 'social_media',
                    'order' => 'ASC',
                    'orderby' => 'date'
                ]);

                if ($media->have_posts()): while ($media->have_posts()) : $media->the_post();
                    ?>
                    <li class="media__li">
                        <a class="media__link" href="<?php the_field('link'); ?>">
                            <img src="<?php the_field('icon'); ?>" alt=" My <?php the_field('name'); ?> profile" height="28" width="28">
                            <p class="media__p"><?php the_field('name'); ?></p>
                        </a>
                    </li>
                <?php endwhile; else: ?>
                    <p class="empty"></p>
                <?php endif; ?>
            </ul>

        </div>
    </div>
    <div class="contact">
        <div class="contact__left">
            <h2 class="contact__h2">Let's talk</h2>
            <p class="contact__p">Ask me anything or just say hi...</p>
            <ul class="contact__ul">
                <?php
                $contact = new WP_Query([
                    'post_type' => 'contact_link',
                    'order' => 'DESC',
                    'orderby' => 'date'
                ]);

                if ($contact->have_posts()): while ($contact->have_posts()) : $contact->the_post();
                    ?>
                    <li class="contact__li">
                        <a class="contact__link" href="<?php the_field('link'); ?>">
                            <img src="<?php the_field('icon'); ?>" alt="<?php the_field('name'); ?>" height="28" width="28">
                            <p class="contact__p"><?php the_field('name'); ?></p>
                        </a>
                    </li>
                <?php endwhile; else: ?>
                    <p class="empty"></p>
                <?php endif; ?>
            </ul>
        </div>
        <div class="contact__right">
            <div class="contact__form">
                <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>