<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Magnus
 */
?>

	</section><!-- #content -->

  <?php
    $theme_options = get_option('my_theme_settings');
    $company_address = $theme_options['company_address_group'];
  ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-footer__top wrapper"></div>
    <div class="site-footer__btm wrapper align-center">
      <div class="copyright">
        &copy; <?=$theme_options['copyright'] ?>
      </div>
    </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
