<?php

/*
    Template Name: Contact
*/

get_header();
?>

<main class="contact__main">
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
            <div class="social__contact">
                <h2 class="media__h2 hidden">My social media</h2>
                <ul class="media__ul">
                    <?php
                    $home = new WP_Query([
                        'post_type' => 'page',
                        'pagename' => 'goran-schyns',
                    ]);

                    if ($home->have_posts()): while ($home->have_posts()) : $home->the_post();
                        ?>
                        <li class="media__li">
                            <a class="media__link github" href="<?php the_field('github'); ?>">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 438.5 438.5" style="enable-background:new 0 0 438.5 438.5;" xml:space="preserve" height="28" width="28">
                            <g>
                                <path class="st0" d="M409.1,114.6c-19.6-33.6-46.2-60.2-79.8-79.8C295.7,15.2,259.1,5.4,219.3,5.4c-39.8,0-76.5,9.8-110.1,29.4
                                    C75.6,54.4,49,81,29.4,114.6C9.8,148.2,0,184.9,0,224.6c0,47.8,13.9,90.7,41.8,128.9c27.9,38.2,63.9,64.6,108.1,79.2
                                    c5.1,1,8.9,0.3,11.4-2c2.5-2.3,3.7-5.1,3.7-8.6c0-0.6,0-5.7-0.1-15.4c-0.1-9.7-0.1-18.2-0.1-25.4l-6.6,1.1c-4.2,0.8-9.5,1.1-15.8,1
                                    c-6.4-0.1-13-0.8-19.8-2c-6.9-1.2-13.2-4.1-19.1-8.6c-5.9-4.5-10.1-10.3-12.6-17.6l-2.9-6.6c-1.9-4.4-4.9-9.2-9-14.6
                                    c-4.1-5.3-8.2-8.9-12.4-10.8l-2-1.4c-1.3-1-2.6-2.1-3.7-3.4c-1.1-1.3-2-2.7-2.6-4c-0.6-1.3-0.1-2.4,1.4-3.3S64,310,68,310l5.7,0.9
                                    c3.8,0.8,8.5,3,14.1,6.9c5.6,3.8,10.2,8.8,13.8,14.8c4.4,7.8,9.7,13.8,15.8,17.8c6.2,4.1,12.4,6.1,18.7,6.1s11.7-0.5,16.3-1.4
                                    c4.6-1,8.8-2.4,12.8-4.3c1.7-12.8,6.4-22.6,14-29.4c-10.8-1.1-20.6-2.9-29.3-5.1c-8.7-2.3-17.6-6-26.8-11.1
                                    c-9.2-5.1-16.9-11.5-23-19.1c-6.1-7.6-11.1-17.6-15-30c-3.9-12.4-5.9-26.6-5.9-42.8c0-23,7.5-42.6,22.6-58.8
                                    c-7-17.3-6.4-36.7,2-58.2c5.5-1.7,13.7-0.4,24.6,3.9c10.9,4.3,18.8,8,23.8,11c5,3,9.1,5.6,12.1,7.7c17.7-4.9,36-7.4,54.8-7.4
                                    s37.1,2.5,54.8,7.4l10.8-6.8c7.4-4.6,16.2-8.8,26.3-12.6c10.1-3.8,17.8-4.9,23.1-3.1c8.6,21.5,9.3,40.9,2.3,58.2
                                    c15,16.2,22.6,35.8,22.6,58.8c0,16.2-2,30.5-5.9,43c-3.9,12.5-8.9,22.5-15.1,30c-6.2,7.5-13.9,13.9-23.1,19
                                    c-9.2,5.1-18.2,8.9-26.8,11.1c-8.7,2.3-18.4,4-29.3,5.1c9.9,8.6,14.8,22.1,14.8,40.5v60.2c0,3.4,1.2,6.3,3.6,8.6
                                    c2.4,2.3,6.1,3,11.3,2c44.2-14.7,80.2-41.1,108.1-79.2c27.9-38.2,41.8-81.1,41.8-128.9C438.5,184.9,428.7,148.2,409.1,114.6z"/>
                            </g>
                            </svg>
                                <p class="media__p">Github</p>
                            </a>
                        </li>
                        <li class="media__li">
                            <a class="media__link facebook" href="<?php the_field('facebook'); ?>">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 96.1 96.1" style="enable-background:new 0 0 96.1 96.1;" xml:space="preserve" height="28" width="28">
                            <g>
                                <path class="st0" d="M72.1,0L59.6,0c-14,0-23.1,9.3-23.1,23.7v10.9H24c-1.1,0-2,0.9-2,2v15.8c0,1.1,0.9,2,2,2h12.5v39.9
                                    c0,1.1,0.9,2,2,2h16.4c1.1,0,2-0.9,2-2V54.3h14.7c1.1,0,2-0.9,2-2l0-15.8c0-0.5-0.2-1-0.6-1.4s-0.9-0.6-1.4-0.6H56.8v-9.2
                                    c0-4.4,1.1-6.7,6.8-6.7l8.4,0c1.1,0,2-0.9,2-2V2C74,0.9,73.2,0,72.1,0z"/>
                            </g>
                            </svg>
                                <p class="media__p">Facebook</p>
                            </a>
                        </li>
                        <li class="media__li">
                            <a class="media__link instagram" href="<?php the_field('instagram'); ?>">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" fill="#C1BEBF" height="28" width="28">
                            <g>
                                <g>
                                    <path class="st0" d="M352,0H160C71.6,0,0,71.6,0,160v192c0,88.4,71.6,160,160,160h192c88.4,0,160-71.6,160-160V160
                                        C512,71.6,440.4,0,352,0z M464,352c0,61.8-50.2,112-112,112H160c-61.8,0-112-50.2-112-112V160C48,98.2,98.2,48,160,48h192
                                        c61.8,0,112,50.2,112,112V352z"/>
                                </g>
                            </g>
                                    <g>
                                        <g>
                                            <path class="st0" d="M256,128c-70.7,0-128,57.3-128,128s57.3,128,128,128s128-57.3,128-128S326.7,128,256,128z M256,336
                                        c-44.1,0-80-35.9-80-80c0-44.1,35.9-80,80-80s80,35.9,80,80C336,300.1,300.1,336,256,336z"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <circle class="st0" cx="393.6" cy="118.4" r="17.1"/>
                                        </g>
                                    </g>
                            </svg>
                                <p class="media__p">Instagram</p>
                            </a>
                        </li>
                    <?php endwhile; else: ?>
                        <p class="empty"></p>
                    <?php endif; ?>
                </ul>

            </div>
        </div>
        <div class="contact__right">
            <div class="contact__form">
                <?php echo do_shortcode( '[contact-form-7 id="8" title="Contact form 1"]' ); ?>
                <p class="required__labels">*These fields are required</p>
            </div>
        </div>
</main>


<?php get_footer(); ?>