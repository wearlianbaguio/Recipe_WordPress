<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <?php wp_head()?>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
  </head>
  <body>
    <header class="py-6">
      <div class="container mx-auto">
        <div class="flex justify-between items-center flex-col md:flex-row">
          <a href="<?php echo site_url('/')?>">TheRecipe</a>
          <ul class="flex gap-5 items-center">
            <?php wp_nav_menu(array(
              'theme_location' => 'header_menu',
              'menu_class' => 'header__nav',  
            ))?>
          </ul>
        </div>
      </div>
    </header>