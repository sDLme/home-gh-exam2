<?php
get_header(); ?>

<!--intro-->
<section class="section-pd section-pd-bottom color-bg-second ">
    <div class="container ">

      <div class="row">
          <div class="col-md-6">
              <img src="<?php  bloginfo('template_url'); ?>/images/mac.jpg">
          </div>
          <div class="intro-text col-md-6 ">
           <h2 class="site-title-less"><?php echo get_theme_mod('intro_title'); ?></h2>
              <p>We are Professional </br>1000+ Clients, Live Support</p>

           <span><?php echo get_theme_mod('intro_description'); ?></span>
       </div>
      </div>
    </div>
</section>
<!-- end intro-->
<!--about-->
<section class="section-pd">
    <div class="container">
        <p class="description"><?php echo get_theme_mod('sec_section_description'); ?></p>

       <div class="row">
           <div class="col-md-4">
            <img src="<?php  bloginfo('template_url'); ?>/images/man.png">
        </div>
           <div class="col-md-8 about-description">
               <?php
               $the_slug = 'about';
               $args = array(
                   'name' => $the_slug,
                   'post_type' => 'page',
                   'post_status' => 'publish',
                   'posts_per_page' => 1
               );
               $query = new WP_Query($args);
               if ($query->have_posts()):?>
                   <?php while ($query->have_posts()) : $query->the_post(); ?>
                       <h2 class="section-title"><?php echo get_theme_mod('sec_section_title'); ?></h2>
                       <div class="description-dark"><?php the_excerpt(); ?></div>
                   <?php endwhile; ?>

               <?php endif;
               wp_reset_postdata(); ?>
           </div>
       </div>
    </div>
</section>
<!--and about us-->
<!--service-->
<section class="section-pd section-pd-bottom color-bg-prime-color">
    <div class="container">
       <header class="section-head section-head-light">
           <h2 class="section-title"><?php echo get_theme_mod('th_section_title'); ?></h2>
        <p><?php echo get_theme_mod('th_section_description'); ?></p>
       </header>
        <?php
        $args = array(
            'post_type' => 'ajy_services', 'posts_per_page' => 3);
        $servisloop = new WP_Query( $args);
        ?>
        <ul class="services-list row">
            <?php while ($servisloop->have_posts()) :
            $servisloop->the_post(); ?>
            <li class="services-list-item-wrap col-md-4">
                <div class="services-list-item">
                    <div class="thumbnail-wrapp">
                        <?php the_post_thumbnail()?>
                    </div>
                    <h4 class="title title-dark title-bold title-trasf"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p class="description"><?php the_excerpt(); ?></p>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </li>
        </ul>
    </div>
</section>
<!--end services-->
<!--portfolio-->
<section class="section-pd">
    <div class="container">
       <header class="section-head">
           <h2 class="section-title"><?php echo get_theme_mod('fr_section_title'); ?></h2>
            <p><?php echo get_theme_mod('fr_section_description'); ?></p>
       </<header>
            <ul id="list" class="portfolio-filter">
                <li data-filter-by="*" class="filter-item"><a href="#">All</a></li>
                <li data-filter-by=".designe" class="filter-item"><a href="#">Design</a></li>
                <li data-filter-by=".web" class="filter-item"><a href="#">Development</a></li>
                <li data-filter-by=".illustration" class="filter-item"><a href="#">SEO</a></li>
                <li data-filter-by=".motion" class="filter-item"><a href="#">Other</a></li>
            </ul>
            <?php
            $args = array(
                'post_type' => 'ajy_works', 'posts_per_page' => 6);
            $servisloop = new WP_Query( $args);
            ?>
            <ul class="services-list row">
                <?php while ($servisloop->have_posts()) :
                $servisloop->the_post(); ?>
                <li class="col-sm-6 col-md-4 item designe">
                    <div class="portfolio-img-wrap">
                        <?php the_content(); ?>
                    </div
                </li>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </ul>
    </div>
</section>
<!--end portfolio-->

<?php get_footer(); ?>
