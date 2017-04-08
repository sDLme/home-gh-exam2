


<!--clients-->
<section class=" clients color-bg-second">
    <div class="container">
        <header class="section-head section-head-light">
            <h3 class="section-title">Featured Clients</h3>
        </header>
        <?php
        $args = array('post_type' => 'ajy_clients', 'posts_per_page' => 8);
        $loop = new WP_Query($args);
        ?>
            <div class="client-slide">
                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="client-slide-item">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
    </div>
</section>
<!--clients end-->
<!--contact-->
<section class="section-pd contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
               <div class="section-head section-head-align section-head-light"> <h2 class="section-title"><?php echo get_theme_mod('fv_section_title'); ?></h2>
                <p class="description section-title "><?php echo get_theme_mod('fv_section_description'); ?></p></div>
                <ul class="contact-us">
                    <li class="contact-item">
                        <a href="tel:<?php echo get_theme_mod('ajy-contact-call-label'); ?>" class="phone">
                            <?php echo get_theme_mod('ajy-contact-call-label'); ?>
                        </a>
                    </li>
                    <li>
                        <span class="local"><?php echo get_theme_mod('address-contact'); ?></span>
                    </li>
                </ul>
                <div class="map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1mAKX4iBDfVEgOcjmWaKLqd11XCs" width="100%"
                            height="480"></iframe>
                </div>
            </div>

            <div class="col-md-6">
                <form action="/" class="my-form">
                    <?php echo do_shortcode("[contact-form-7 id=\"95\" title=\"Contact form\"]") ?>
                </form>
            </div>
        </div>
    </div>
</section>
<!--end contact-->
</main>
<footer class="site-footer color-bg-prime-color">

        <div class="foot-logo">
        <?php
        if ( function_exists( 'the_custom_logo' ) )
            the_custom_logo();?>
    </div>
    <p class="copy color-bg-second"> © 2015  All Rights Reserved.</p>


</footer>
<?php wp_footer(); ?>
</body>
</html>