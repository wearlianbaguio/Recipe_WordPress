<?php get_header()?>

<!-- BANNER -->
<section class="banner mb-20">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div
          class="banner__content flex flex-col justify-center items-center md:items-start px-1"
        >
          <?php the_content()?>
          <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
        </div>
        <div class="banner__img">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-[700px] object-cover', 'alt' => esc_attr(get_the_title())]); ?>
            <?php endif; ?>
        </div>
    </div>
</section>


<!-- WEEK RECIPE -->
<section class="week mb-20">
      <div class="container mx-auto">
        <h2 class="text-center mb-20">Recipe of the Week</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            

          <?php $weekly = new WP_Query(array(
                'post_type' => 'weekly',
                'posts_per_page' => 4
            ))?>  
           <?php if($weekly->have_posts()) : while($weekly->have_posts()) : $weekly->the_post();?>
          <div class="grid__item text-center">
            <a href="#">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-[500px] object-cover mb-4', 'alt' => esc_attr(get_the_title())]); ?>
              <?php endif; ?>            
              <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
              <h3><?php the_title()?></h3>
              <p>
                <?php echo wp_trim_words(get_the_excerpt(), 10) ?>
              </p>
            </a>
          </div>
          <?php endwhile;
          else:
            echo "no posts";
          endif;
          wp_reset_postdata();
        ?>
        </div>
      </div>
    </section>


    <!-- Recipe Collecetion -->
    <section class="collection">
      <div class="container mx-auto">
        <h2 class="mb-20">Recipe Collection</h2>
        <div class="collection__item">

          <!-- LEFT -->
          <?php $my_query = new WP_Query(array(
                'post_type' => 'post',               
                'meta_key' => "Grouping",
                'meta_value' => "CollectionLeft",
                'posts_per_page' => 2
            ))?>  
           <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
          <div class="flex justify-between flex-col md:flex-row gap-10 mb-10">
            <div class="collection__item__img basis-1/2">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-[450px] object-cover', 'alt' => esc_attr(get_the_title())]); ?>
              <?php endif; ?>           
            </div>
            <div class="collection__item__content basis-1/2">
              <div
                class="flex flex-col justify-center items-start w-[80%] h-[80%] mx-auto"
              >
                <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
                <h3><?php the_title()?></h3>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 20) ?>
                </p>
                <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
              </div>
            </div>
          </div>
          <?php endwhile;
          else :
              echo "No Posts";
          endif;
          ?>

          <!-- RIGHT -->
          <?php $my_query = new WP_Query(array(
                'post_type' => 'post',               
                'meta_key' => "Grouping",
                'meta_value' => "CollectionRight",
                'posts_per_page' => 1
            ))?>  
           <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
          <div class="flex justify-between flex-col md:flex-row-reverse gap-10 mb-10">
            <div class="collection__item__img basis-1/2">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-[450px] object-cover', 'alt' => esc_attr(get_the_title())]); ?>
              <?php endif; ?>            
            </div>
            <div class="collection__item__content basis-1/2">
              <div
                class="flex flex-col justify-center items-start w-[80%] h-[80%] mx-auto"
              >
                <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
                <h3><?php the_title()?></h3>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 20) ?>
                </p>
                <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
              </div>
            </div>
          </div>
          <?php endwhile;
          else :
              echo "No Posts";
          endif;
          ?>

          <!-- LEFT LAST -->
          <?php $my_query = new WP_Query(array(
                'post_type' => 'post',               
                'meta_key' => "Grouping",
                'meta_value' => "CollectionLeftLast",
                'posts_per_page' => 1
            ))?>  
           <?php if($my_query->have_posts()) : while($my_query->have_posts()) : $my_query->the_post();?>
          <div class="flex justify-between flex-col md:flex-row gap-10 mb-10">
            <div class="collection__item__img basis-1/2">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-[450px] object-cover', 'alt' => esc_attr(get_the_title())]); ?>
              <?php endif; ?>              
            </div>
            <div class="collection__item__content basis-1/2">
              <div
                class="flex flex-col justify-center items-start w-[80%] h-[80%] mx-auto"
              >
                <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
                <h3><?php the_title()?></h3>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 20) ?>
                </p>
                <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
              </div>
            </div>
          </div>
          <?php endwhile;
          else :
              echo "No Posts";
          endif;
          ?>
        </div>
      </div>
    </section>

    <!-- News Leter -->
    <section
      class="newsletter h-[50vh] grid place-content-center bg-cover bg-no-repeat bg-center"
    >
      <div class="newsletter__content max-w-[750px] w-full text-center px-1">
        <h2>Get out weekly Newsletter</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima
          molestiae earum quam eos veritatis saepe explicabo cupiditate facere
          harum animi.
        </p>
        <form action="">
          <div class="">
            <input type="text" placeholder="Email" />
            <button class="btn btn--accent">Subscribe</button>
          </div>
        </form>
      </div>
    </section>

    <!-- Classic na may Rating -->
    <section class="classic mb-20">
      <div class="container mx-auto">
        <h2 class="mb-20">Recipe classic</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

          <?php $classic = new WP_Query(array(
                'post_type' => 'classic',
                'posts_per_page' => -1
            ))?>  
           <?php if($classic->have_posts()) : while($classic->have_posts()) : $classic->the_post();?>
          <div class="classic__item flex gap-4">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => '', 'alt' => esc_attr(get_the_title())]); ?>
              <?php endif; ?>
            <!-- <img src="https://via.placeholder.com/200x200" alt="" /> -->
            <div class="classic__item__content">
              <small><?php echo get_post_meta(get_the_ID(), 'Dish', true)?></small>
              <h4><?php the_title()?></h4>
              <ul class="flex gap-2 mb-4">
                <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
                <li><i class="<?php echo get_post_meta(get_the_ID(), 'icon', true)?> text-accent"></i></li>
              </ul>
              <a href="<?php the_permalink()?>">Get Recipe Here</a>
            </div>
          </div>
          <?php endwhile;
          else:
            echo "no posts";
          endif;
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </section>

    


<?php get_footer()?>