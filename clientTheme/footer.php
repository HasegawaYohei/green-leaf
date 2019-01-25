<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod('understrap_container_type');
?>



<footer class="wrapper">

<div class="container-flud py-4 bg-white">
  <div class="row">
    <div class="col-12 text-center">
      <img src="http://green-leaf.info/wp-content/uploads/2019/01/green_leaf_text_logo.png" class="img-fluid">
    </div>
  </div>
</div>

<div class="container-flud py-3 bg-footer">
  <div class="row">
    <div class="col-12 text-center color-white">
        &copy; GREEN LEAF
    </div>
  </div>
</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
