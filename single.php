<?php get_header()?>

<?php if(have_posts()) :while(have_posts()) :the_post();?>
<!-- BANNER? -->
    <section class="single bg-light_accent py-20 mb-[300px]">
      <div class="container px-4 mx-auto">
        <div class="single__content flex justify-between items-end">
          <h1 class="max-w-[550px] w-full mb-0">
            <?php the_title()?>
          </h1>
          <p class="font-bold">
            Published: <span class="font-normal">4/4/2021</span>
          </p>
        </div>

        <div
          class="single__meta py-4 border-b border-t border-gray-100 mt-10 -mb-[220px]"
        >
          <ul class="flex justify-between">
            <li><span class="font-bold">Level:</span> Easy</li>
            <li><span class="font-bold">Cooking Time:</span> 42mins</li>
            <li><span class="font-bold">Servings:</span> 3-4 persons</li>
          </ul>
        </div>

        <div class="grid grid-cols-[2fr_1fr] gap-10 translate-y-[260px]">
          <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full object-cover h-[450px]', 'alt' => esc_attr(get_the_title())]); ?>
            <?php endif; ?>
          <div class="bg-accent text-white px-10 py-14">
            <h3>Ingredients</h3>
            <?php
              $blocks = parse_blocks($post->post_content);
                foreach ($blocks as $block) {
                  if ($block['blockName'] == 'core/list') {
                    echo render_block($block);
                  }
                }?>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile;
        else:
            echo "no pos";
    endif;
    ?>



    <!-- BOTTOM PART -->
    <section>
      <div class="container mx-auto px-6">
        <h3 class="text-accent mb-10">Direction</h3>

        <div class="grid grid-cols-[2fr_1fr] gap-10">
          <main>
            <?php
              $blocks = parse_blocks($post->post_content);
                foreach ($blocks as $block) {
                  if ($block['blockName'] == 'core/paragraph') {
                    echo render_block($block);
                  }
                }?>
          </main>
          <aside>
            <h4 class="mb-10">Looking for something else</h4>
            <div class="recipe__card flex gap-5 mb-5">
              <img src="https://via.placeholder.com/120x120" alt="" />
              <div>
                <small>Pasta</small>
                <h5>Shepherd Pie</h5>
                <ul class="flex gap-1">
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                </ul>
                <a href="#">Get recipe</a>
              </div>
            </div>

            <div class="recipe__card flex gap-5 mb-5">
              <img src="https://via.placeholder.com/120x120" alt="" />
              <div>
                <small>Pasta</small>
                <h5>Shepherd Pie</h5>
                <ul class="flex gap-1">
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                </ul>
                <a href="#">Get recipe</a>
              </div>
            </div>

            <div class="recipe__card flex gap-5 mb-5">
              <img src="https://via.placeholder.com/120x120" alt="" />
              <div>
                <small>Pasta</small>
                <h5>Shepherd Pie</h5>
                <ul class="flex gap-1">
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                </ul>
                <a href="#">Get recipe</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </section>

<?php get_footer()?>