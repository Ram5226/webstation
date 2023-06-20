<?php
/*
 * This template for displaying the header
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes();  ?>" class="no-js">

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head()  ?>
</head>

<body <?php body_class(); ?>>

  <header class="<?php echo get_theme_mod('webstation_menu_position');  ?>" id="header_area">
    <div class="container">
      <div class="header_wrapper">
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_theme_mod('webstation_logo'); ?>" alt="">
          </a>
        </div>
        <div class="menu_area">
          <?php wp_nav_menu(array(
            'theme_location' => 'main_menu',
            'menu_id' => 'nav'
          ));  ?>
        </div>
      </div>
    </div>
  </header>