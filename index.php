<?php
 get_header(); ?>

<section >
    <div class="blog-head">
        <h2 class="blog-title"><?php wp_title("", true); ?></h2>
    </div>
    <div class="container">
        <div class="row single-row">
           <div class="blog-area col-md-8">
            <ul class="blog-list">

                <?php
                $args = array('post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 2 );
                $loop = new WP_Query($args);
                if ($loop->have_posts()): while ($loop->have_posts()) : $loop->the_post(); ?>
                    <li class="blog-list-item">
                        <div class="blog-img">
                         <a href="<?php the_permalink()?>">   <?php if (has_post_thumbnail()) : the_post_thumbnail('full'); endif; ?></a>
                        </div>
                        <div class="blog-content">
                            <?php the_title('
                                        <h3 class="blog-item-title">
                                        <a href="' . esc_url(get_permalink()) . '" rel="bookmark" >', '</a>
                                        </h4>'); ?>
                            <div class="blog-description"><?php the_excerpt(); ?></div>
                            <span class="date"><?php the_time('d.m.Y.'); ?></span>
                        </div>
                    </li>
                <?php endwhile; endif; ?>
            </ul>

                <div class="pagin ">
                    <?php the_posts_pagination(); ?>
                </div>

           </div>
            <div class="col-md-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
