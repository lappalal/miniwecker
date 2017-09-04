<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Miniwecker
 */

?>

	</div><!-- #content -->
  <div id="colophon">
    <div class="container">
      <div class="blog-info">
        <a id="blog-title" href="<?php echo home_url( '/' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a> <!-- do not change the blog-title portion without knowing perfectly what you are doing -->
      </div>
      <div class="blog-credits">
        <a href="/intern">Intern</a> | <a href="<?php echo admin_url(); ?>">Login</a> | made by <a id="blog-title" href="http:" rel="home">Jakob Sautner</a>
      </div> <!-- changes on the credits should also be made in inc/jetpack.php for consistency (see infinite footer credits) -->
    </div>
  </div><!-- #infinite-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
