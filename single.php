<?php  get_header(); ?>

<section>
    <div class="blog-head">
        <h2 class="blog-title"><?php wp_title("", true); ?></h2>
    </div>
    <div class="container">
       <div class="row single-row">
           <div class="col-md-8">
               <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="singl-blog-list-item">
                    <div class="singl-blog-img-wrap">

                        <?php if (has_post_thumbnail()) : echo the_post_thumbnail(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="blog-content">
                        <h3 ><?php the_title(); ?></h3>

                        <p class="description"><?php the_content(); ?></p>

                    </div>
                </article>
            <?php endwhile; endif; ?>
           </div>
           <div class="col-md-4">
               <?php get_sidebar(); ?>
           </div>
       </div>
    </div>
</section>

<?php get_footer(); ?>