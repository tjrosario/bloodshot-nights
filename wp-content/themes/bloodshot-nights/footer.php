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
		<div class="site-footer__top wrapper">
      <div class="col-a span-cols3">
        <div class="company-hours">
          <h6>Opening Hours</h6>
          <div class="content">
            <div><?=$theme_options['company_hours_1'] ?></div>
            <div><?=$theme_options['company_hours_2'] ?></div>
          </div>
        </div>
      </div>

      <div class="col-b span-cols6">
        <div class="top">
          <div class="company-address">
            <div class="content">
              <?=$company_address['company_address_line1'] ?>,
              <?=$company_address['company_address_city'] ?>,
              <?=$company_address['company_address_state'] ?>
              <?=$company_address['company_address_zip'] ?>
            </div>
          </div>
        </div>
        <div class="bottom clear">
          <div class="span-cols6 col-a">
            <div class="company-phone">
              <h6>Tel</h6>
              <div class="content">
                <?=$theme_options['company_phone'] ?>
              </div>
            </div>
          </div>
          <div class="span-cols6 last col-b">
            <div class="company-social">
              <h6>Find Us</h6>
              <div class="content">
                <ul class="social">
                  <?php if (strlen($theme_options['social_facebook']) > 0) { ?>
                  <li><a href="<?=$theme_options['social_facebook']?>" rel="external" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <? } ?>
                  <?php if (strlen($theme_options['social_twitter']) > 0) { ?>
                  <li><a href="<?=$theme_options['social_twitter']?>" rel="external" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <? } ?>
                  <?php if (strlen($theme_options['social_instagram']) > 0) { ?>
                  <li><a href="<?=$theme_options['social_instagram']?>" rel="external" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                  <? } ?>
                  <?php if (strlen($theme_options['social_email']) > 0) { ?>
                  <li><a href="<?=$theme_options['social_email']?>" rel="external" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
                  <? } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-c span-cols3">
        
        <!-- Begin MailChimp Signup Form -->

        <div id="mc_embed_signup">
          <h6>Newsletter</h6>
        <form action="//sidetripmedia.us12.list-manage.com/subscribe/post?u=6b5ad2335cb6166a1128ee48f&amp;id=a61b083e00" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
          
        <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
        <div class="mc-field-group">
          <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
        </label>
          <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter your email address">
        </div>
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6b5ad2335cb6166a1128ee48f_a61b083e00" tabindex="-1" value=""></div>
            <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        <!--End mc_embed_signup-->
      </div>
    </div>
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
