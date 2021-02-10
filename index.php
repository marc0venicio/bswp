<?php get_header(); ?>

      <div class="row">

        <div class="col-md-8 col-sm-12">

          <?php if(have_posts()) : while(have_posts()) : the_post();?>

          <?php get_template_part('content', get_post_format()); ?>

        <?php endwhile; ?>
        
        <?php else: get_404_template(); endif; ?>

          <div class="blog-pagination mb-5">
          <nav class="blog-pagination justify-content-center d-flex">
                        <?php wpbeginner_numeric_posts_nav(); ?>
                        </nav>
          </div>

        </div>

<?php get_sidebar(); ?>

</div>

    </div>

 <?php get_footer(); ?>