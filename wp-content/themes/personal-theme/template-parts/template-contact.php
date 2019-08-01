<?php

/*
    Template Name: Contact
*/

get_header();
?>

<main>
    <div class="contact">
        <div class="contact__left">
            <h2 class="contact__h2">Let's talk</h2>
            <p class="contact__p">Ask me anything or just say hi...</p>
            <ul class="contact__ul">
                <?php
    $home = new WP_Query([
        'post_type' => 'page',
        'pagename' => 'goran-schyns',
    ]);

    if ($home->have_posts()): while ($home->have_posts()) : $home->the_post();
        ?>
                    <li class="contact__li">
                        <a class="contact__link phone" href="<?php the_field('phone'); ?>">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 348.1 348.1" style="enable-background:new 0 0 348.1 348.1;" xml:space="preserve" height="28" width="28">
                            <g>
                                <g>
                                    <g>
                                        <path class="st0" d="M340.3,275.1l-53.8-53.8c-10.7-10.7-28.4-10.3-39.5,0.7l-27.1,27.1c-1.7-0.9-3.5-1.9-5.3-3
                                            c-17.1-9.5-40.5-22.5-65.1-47.1c-24.7-24.7-37.7-48.1-47.2-65.3c-1-1.8-2-3.6-2.9-5.2l18.2-18.1l8.9-8.9
                                            c11.1-11.1,11.4-28.8,0.7-39.5L73.4,8.2C62.7-2.5,45-2.2,33.9,8.9L18.7,24.2l0.4,0.4c-5.1,6.5-9.3,14-12.5,22
                                            c-2.9,7.7-4.7,15-5.6,22.3C-6,127.8,20.9,181.6,93.9,254.5c100.9,100.9,182.2,93.2,185.7,92.9c7.6-0.9,15-2.7,22.4-5.6
                                            c8-3.1,15.5-7.4,21.9-12.4l0.3,0.3l15.3-15C350.6,303.5,351,285.8,340.3,275.1z"/>
                                    </g>
                                </g>
                            </g>
                            </svg>
                            <p class="contact__p">0485 48 60 26</p>
                        </a>
                    </li>
                    <li class="contact__li">
                        <a class="contact__link mail" href="<?php the_field('mail'); ?>">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 14 14" style="enable-background:new 0 0 14 14;" xml:space="preserve" height="28" width="28">
                            <g>
                                <g>
                                    <path class="st0" d="M7,9L5.3,7.5l-5,4.2C0.5,11.9,0.7,12,1,12h12c0.3,0,0.5-0.1,0.7-0.3L8.7,7.5L7,9z"/>
                                    <path class="st0" d="M13.7,2.3C13.5,2.1,13.3,2,13,2H1C0.7,2,0.5,2.1,0.3,2.3L7,8L13.7,2.3z"/>
                                    <polygon class="st0" points="0,2.9 0,11.2 4.8,7.1 		"/>
                                    <polygon class="st0" points="9.2,7.1 14,11.2 14,2.9 		"/>
                                </g>
                            </g>
                            </svg>
                            <p class="contact__p">schynsg@hotmail.com</p>
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
</main>


<?php get_footer(); ?>