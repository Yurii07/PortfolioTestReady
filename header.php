
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>

	<?php wp_head(); ?>
</head>
<body>

<header>
<div class="container">
  <nav class="navbar navbar-expand-lg ">

  <?php the_custom_logo(); ?>

  <?php wp_nav_menu( array(
  'theme_location'  => '',
  'menu'            => '', 
  'container'       => 'ul', 
  'container_class' => 'navbar-nav ml-auto', 
  'container_id'    => '',
  'menu_class'      => 'navbar-nav ml-auto', 
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',
) );  ?>

</nav>
</div>
</header>