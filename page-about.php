<?php get_header()?>

<!-- BANNER -->
<section class="page__banner bg-light_accent mb-[180px]">
      <div class="container px-4 mx-auto">
        <div class="text-center pt-10">
          <?php the_content()?>
          <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'translate-y-20 w-full object-cover h-[400px]', 'alt' => esc_attr(get_the_title())]); ?>
            <?php endif; ?>
        </div>
      </div>
</section>

<!-- PAGE CONTENT -->
 <section class="page__content mb-20">
      <div class="container px-4 mx-auto">
        <div
          class="grid grid-cols-1 md:grid-cols-[1fr_350px] gap-10 max-w-[1000px] w-full mx-auto"
        >

        <?php $my_query = new WP_Query(array(
                'post_type' => 'post',
                'meta_key' => "Grouping",
                'meta_value' => "aboutContent",
                'posts_per_page' => 2
            ))?>  
           <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
          <div class="page__body max-w-[800px] w-full mx-auto">
            <h2><?php the_title()?></h2>
            <p>
              <?php the_content()?>
            </p>

            <ul>
              <li><?php echo get_post_meta(get_the_ID(), 'Corporation', true)?></li>
              <li><?php echo get_post_meta(get_the_ID(), 'Address1', true)?></li>
              <li><?php echo get_post_meta(get_the_ID(), 'Address2', true)?></li>
            </ul>
          </div>
          <?php endwhile;
          else :
              echo "No Posts";
          endif;
          ?>



          <div class="page__sidebar">
            <h4 class="mb-10">Looking for something else</h4>
            
            <?php $my_query = new WP_Query(array(
                'post_type' => 'post',
                'meta_key' => "Grouping",
                'meta_value' => "aboutCard",
                'posts_per_page' => -1
            ))?>  
           <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
            <div class="recipe__card flex gap-5 mb-5">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => '', 'alt' => esc_attr(get_the_title())]); ?>
               <?php endif; ?>

              <div>
                <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
                <h5><?php the_title()?></h5>
                <ul class="flex gap-1">
                  <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                  <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                  <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                  <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                </ul>
                <a href="<?php the_permalink()?>">Get recipe</a>
              </div>
            </div>
            <?php endwhile;
            else :
                echo "No Posts";
            endif;
            ?>


          </div>
        </div>
      </div>
    </section>

<?php get_footer()?>