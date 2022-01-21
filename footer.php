<footer class="Footer">
            <a href="#front-page" class="GotoTop js-GotoTop">
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gototop.png" alt="トップへ戻る | 株式会社BOSSES" type="image/png" class="-d ls-is-cached lazyloaded" width="50" height="50" loading="lazy"> </picture>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gototop_h.png" alt="トップへ戻る | 株式会社BOSSES" type="image/png" class="-h ls-is-cached lazyloaded" width="50" height="50" loading="lazy"> </picture>
            </a>
            <div class="Footer__Head">
                <p>
                    <a href="#/" class="Footer__Logo">
                        <picture>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="株式会社BOSSES" type="image/png" class=" ls-is-cached lazyloaded" width="160" height="45" loading="lazy"> </picture>
                    </a>
                </p>
                <nav id="FooterNav" class="Footer__Nav">
                    <ul class="Footer__List">
                        <li class="Footer__Item"> <a href="<?php echo home_url();?>/index" class="Footer__Link">Top</a></li>
                        <li class="Footer__Item"> <a href="<?php echo home_url();?>/service" class="Footer__Link">Service</a></li>
                        <li class="Footer__Item"> <a href="<?php echo home_url();?>/contact" class="Footer__Link js-MoveTo">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="Footer__Bottom">
                <p class="Footer__Copyright"> <small>©︎ BOSSES Inc. All Rights Reserved.</small></p>
                <div class="Footer__Sns">
                    <p class="Footer__SnsLabel">Follow</p>
                    <ul class="Footer__SnsList">
                        <li class="Footer__SnsItem">
                            <a href="https://twitter.com/gaudiy_inc" class="Footer__SnsLink" target="_blank" rel="noopener">
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tw.png" alt="Twitter |株式会社BOSSES" type="image/png" class="-d ls-is-cached lazyloaded" width="40" height="40" loading="lazy"> </picture>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_tw_h.png" alt="Twitter |株式会社BOSSES" type="image/png" class="-h ls-is-cached lazyloaded" width="40" height="40" loading="lazy"> </picture>
                            </a>
                        </li>
                        <li class="Footer__SnsItem">
                            <a href="https://note.com/gaudiy_inc" class="Footer__SnsLink" target="_blank" rel="noopener">
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_note.png" alt="Note |株式会社BOSSES" type="image/png" class="-d ls-is-cached lazyloaded" width="40" height="40" loading="lazy"> </picture>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_note_h.png" alt="Note |株式会社BOSSES" type="image/png" class="-h ls-is-cached lazyloaded" width="40" height="40" loading="lazy"> </picture>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!-- footerここまで -->
    </div>
    <link rel="stylesheet" id="mw-wp-form-css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style(1).css" type="text/css" media="all">
    <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js" id="smart-script-js"></script> -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wp-embed.min.js" id="wp-embed-js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/form.js" id="mw-wp-form-js"></script>
</body>
<?php wp_footer(); ?>

</html>