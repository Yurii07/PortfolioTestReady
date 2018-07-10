
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Testing</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Exo+2:300,400" rel="stylesheet">

    <link rel="stylesheet" href="libs/revealator/fm.revealator.jquery.css">
    <!-- <script src="js/jquery-1.11.3.min.js"></script> -->
    <script src="libs/revealator/fm.revealator.jquery.js"></script>

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
      'after' => '(066) 660-49-29<br>(066) 660-49-39<br><a class="write-us" href="#">Написать нам</a>',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',
) );  ?>

</nav>
</div>
</header>