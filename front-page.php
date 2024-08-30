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
            

          <div class="grid__item text-center">
            <a href="#">
              <img
                src="https://via.placeholder.com/350x500"
                alt=""
                class="w-full h-[500px] object-cover mb-4"
              />
              <small>Pasta</small>
              <h3>Pesto Lasagna Rolls</h3>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quibusdam dolorum, molestias ea provident dolores labore odit
                placeat voluptas tempore sed.
              </p>
            </a>
          </div>

          
        </div>
      </div>
    </section>


<?php get_footer()?>