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
      <div class="blog-credits">
        <a href="/kontakt">Kontakt</a> | <a href="<?php echo admin_url(); ?>">Login</a> | <a id="blog-title" href="/impressum">Impressum</a>
      </div> <!-- changes on the credits should also be made in inc/jetpack.php for consistency (see infinite footer credits) -->
    </div>
  </div><!-- #infinite-footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
