<div<?php print $attributes; ?>>
  <header class="l-header" role="banner">
    <div class="header">
      <div class="container">
        <div class="l-branding">
          <div class="toggle-btn btn-left">
            <button class="toggle main-menu-toggle" data-id="block-system-main-menu"><i class="fa fa-navicon"></i></button>
          </div>

          <?php if ($logo): ?>
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="site-logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
          <?php endif; ?>

          <?php if ($site_name || $site_slogan): ?>
            <?php if ($site_name): ?>
              <h1 class="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>

            <?php if ($site_slogan): ?>
              <h2 class="site-slogan"><?php print $site_slogan; ?></h2>
            <?php endif; ?>
          <?php endif; ?>

          <?php print render($page['branding']); ?>

          <div class="toggle-btn btn-right">
            <button class="toggle search-form-toggle" data-id="block-search-form"><i class="fa fa-search"></i></button>
          </div>
        </div> <!-- l-branding -->

				<?php print render($page['search']); ?>

				<?php print render($page['header']); ?>
      </div>
    </div> <!-- /.header -->

  	<div class="header-top">
  		<div class="container">
        <div class="user-menu-wrapper">
    			<?php print render($page['header_top_left']); ?>
    			<?php print render($page['header_top_right']); ?>
    			<?php print render($page['cart']); ?>
        </div> <!-- /.user-menu-wrapper -->
  		</div>
  	</div> <!-- /.header-top -->

    <div class="navigation-wrapper">
      <div class="container">
        <?php print render($page['navigation']); ?>
      </div>
    </div>
  </header>

	<?php if ($page['banner']): ?>
  	<div id="banner-wrapper">
  		<?php print render($page['banner']); ?>
  	</div>
  <?php endif; ?>

  <?php if ($page['content_top']): ?>
    <div class="l-content-top">
      <div class="container">
        <?php print render($page['content_top']); ?>
      </div>
    </div>
  <?php endif; ?>

  <div class="main-wrapper">
    <div class="container">
    	<?php print $breadcrumb; ?>
      <div class="l-main clearfix">
        <div class="l-content" role="main">
          <?php print render($page['highlighted']); ?>
          <a id="main-content"></a>
          <?php if (!$is_product): ?>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?>
              <h1 class="ttt"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
          <?php endif; ?>
          <?php print $messages; ?>
          <?php print render($tabs); ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <?php print render($page['content']); ?>
          <?php if(! $is_front): ?>
          <?php endif; ?>
        </div>

        <?php print render($page['sidebar_first']); ?>
        <?php print render($page['sidebar_second']); ?>
      </div>
    </div>
  </div>

  <?php if ($page['content_bottom']): ?>
  <div class="l-content-bottom">
    <div class="container">
      <?php print render($page['content_bottom']); ?>
    </div>
  </div>
  <?php endif; ?>

  <footer class="l-footer" role="contentinfo">
    <div class="container">
      <div class="footer-columns clearfix">
        <?php print render($page['footer_first']); ?>
        <?php print render($page['footer_second']); ?>
        <?php print render($page['footer_third']); ?>
        <?php print render($page['footer_fourth']); ?>
      </div>
      <?php print render($page['footer']); ?>
    </div>
  </footer>
</div>
