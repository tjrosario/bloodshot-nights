<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Magnus
 */

get_header(); ?>

  <?php
    $menu_data = get_post_meta($post->ID, 'menu_section', true);
    $menu_data = maybe_unserialize($menu_data);
    $theme_options = get_option('my_theme_settings');
  ?>

<div class="content-area">
  <div id="sidenav">
    <div class="content">
    	<ul>
      <?php
        foreach ($menu_data as $menu):
          $slug = preg_replace('#[ -]+#', '-', $menu['menu_title']);
          $slug = strtolower($slug);
      ?>
    	
    	<?php if (strlen($menu['menu_title']) > 0) { ?>
    		<li><a href="#<?=$slug?>"><?=$menu['menu_title'];?></a></li>
    	<?php } ?>
    	
    	<?php endforeach; ?>
    	</ul>

      <select>
        <option value="0">Select a Category</option>
        <?php
          foreach ($menu_data as $menu):
            $slug = preg_replace('#[ -]+#', '-', $menu['menu_title']);
            $slug = strtolower($slug);
        ?>
        <option value="#<?=$slug?>"><?=$menu['menu_title'];?></option>
        <?php endforeach; ?>
      </select>

      <a class="button">Order Now</a>
    </div>
  </div>

	<div id="primary" style="background-image: url(<?=$page_bg ?>);">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>

        <!-- locations -->
        <section class="locations" id="locations">
        <?php
          $locations = $theme_options['locations'];
          foreach ($locations as $location):
        ?>
          <div class="location">
            <div class="row location__top">
              <div class="col-a span6">
                <a href="#" class="button">Order Now</a>
              </div>
              <div class="col-b span6 last">
                <?=$location['location_street1'];?><br>
                <?php if (strlen($location['location_street2']) > 0) { ?>
                <?=$location['location_street2'];?><br>
                <?php } ?>
                <?=$location['location_city'];?>, 
                <?=$location['location_state'];?> 
                <?=$location['location_zip'];?><br>
                <?php if (strlen($location['location_phone']) > 0) { ?>
                T:<?=$location['location_phone'];?><br>
                <?php } ?>
              </div>
            </div>
            <div class="services">
              <h6>Delivery from:</h6>
              <ul>
                <?php if (strlen($location['location_grubhub']) > 0) { ?>
                <li><a href="<?=$location['location_grubhub']?>" target="_blank" rel="external"><img src="<?=get_template_directory_uri() . '/images/logo/grubhub.png' ?>"></a></li>
                <?php } ?>
                <?php if (strlen($location['location_doordash']) > 0) { ?>
                <li><a href="<?=$location['location_doordash']?>" target="_blank" rel="external"><img src="<?=get_template_directory_uri() . '/images/logo/doordash.png' ?>"></a></li>
                <?php } ?>
                <?php if (strlen($location['location_postmates']) > 0) { ?>
                <li><a href="<?=$location['location_postmates']?>" target="_blank" rel="external"><img src="<?=get_template_directory_uri() . '/images/logo/postmates.png' ?>"></a></li>
                <?php } ?>
                <?php if (strlen($location['location_uber_eats']) > 0) { ?>
                <li><a href="<?=$location['location_uber_eats']?>" target="_blank" rel="external"><img src="<?=get_template_directory_uri() . '/images/logo/uber_eats.png' ?>"></a></li>
                <?php } ?>
              </ul>
            </div>
          </div>

        <?php endforeach; ?>

        </section>
        <!-- /locations -->

				<section class="menus">
					<div class="masonry-layout">
        <?php
          foreach ($menu_data as $menu):
            $slug = preg_replace('#[ -]+#', '-', $menu['menu_title']);
            $slug = strtolower($slug);
        ?>	
      		<?php if (strlen($menu['menu_title']) > 0) { ?>
      		<div class="menu masonry-layout__panel <?=$menu['menu_width'] ?> <?=$menu['menu_alignment'] ?> <?=$menu['menu_break_after'][0] ?>" style="top:<?=$menu['menu_coordinate_y'] ?>px; margin-left:<?=$menu['menu_coordinate_x'];?>px;" id="<?=$slug?>">
            <header class="menu__header <?=$menu['menu_title_alignment'] ?>">
              <h3 class="menu__category" style="color:<?=$menu['menu_title_color'] ?>; font-family:<?=$menu['menu_title_font'] ?>">
              	<?=$menu['menu_title'];?> 
              	<span class="menu__subtext"><?=$menu['menu_subtext']?></span>
              	<span class="menu__price"><?=$menu['menu_price']?></span>
              </h3>
              <div class="menu__description">
              	<?=$menu['menu_description']?>
              </div>
            </header>

            <?php if(isset($menu['menu_item'])) { ?>
            <div class="menu__items">
              <?php foreach ($menu['menu_item'] as $menu_item): ?>
              <?php if ($menu_item['menu_item_type'][0] != 'addon') { ?>
              <div class="menu__item">
              	<div class="menu__item-header">
	                <h4 class="menu__item-name" style="font-family:<?=$menu_item['menu_item_font']; ?>; color: <?=$menu_item['menu_item_color']; ?>">
	                  <?=$menu_item['menu_item_name']?>
	                  <span class="menu__item-subtext"><?=$menu_item['menu_item_subtext']?></span>
	                </h4>
	                <?php if (strlen($menu_item['menu_item_price1']) > 0) { ?>
	                <p class="menu__item-prices">
	                  <span class="menu__item-price" style="color: <?=$menu_item['menu_item_price_color'] ?>"><?=$menu_item['menu_item_price1'] ?></span>
	                  <?php if (strlen($menu_item['menu_item_price2']) > 0) { ?>
	                  <span class="menu__item-price" style="color: <?=$menu_item['menu_item_price_color'] ?>"><?=$menu_item['menu_item_price2'] ?></span>
	                  <?php } ?>
	                </p>
	                <?php } ?>
	              </div>
                <?php if (strlen($menu_item['menu_item_description']) > 0) { ?>
                <p class="menu__item-description"><?=$menu_item['menu_item_description']?></p>
                <?php } ?>
               <?php
                  $first = $menu_item['menu_subitem'][0];
                  if(strlen($first['menu_subitem_name']) > 0) {
                ?>
                <div class="menu__item-subitems">
                  <?php foreach ($menu_item['menu_subitem'] as $sub_item): ?>
                    <div class="menu__item-subitem">
                      <h5 class="menu__subitem-name">
                      	<?=$sub_item['menu_subitem_name']?>
                      	<span class="menu__subitem-subtext"><?=$sub_item['menu_subitem_subtext']?></span>
                      </h5>
                      <?php if (strlen($sub_item['menu_subitem_price1']) > 0) { ?>
                      <div class="menu__item-price"><?=$sub_item['menu_subitem_price1'] ?></div>
                      <?php } ?>
                      <?php if (strlen($sub_item['menu_subitem_price2']) > 0) { ?>
                      <div class="menu__item-price"><?=$sub_item['menu_subitem_price2'] ?></div>
                      <?php } ?>
                    </div>
                  <?php endforeach; ?>
                </div>
                <?php } ?>
              </div>
              <?php } ?>
              <?php endforeach; ?>
             </div>
            <?php } ?>
      		</div>
      		<?php } ?>
      	<?php endforeach; ?>

      	</div>
				</section>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
