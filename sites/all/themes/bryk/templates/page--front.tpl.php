<?php
?>
  <?php print render($page['header']); ?>

  <div id="wrapper">
    <div id="container" class="clearfix">

      <div id="header">
        <div id="logo-floater">
            <?php if ($logo): ?>
                <a href="<?php print $front_page; ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print $site_name_and_slogan ?>" />
                </a>
            <?php endif; ?>
        </div>
          <ul class="links">
              <li class="fb">
                  <a href="http://www.facebook.com/pages/GeekHub/158983477520070"> </a>
              </li>
              <li class="vk">
                  <a href="http://vkontakte.ru/geekhub"> </a>
              </li>
              <li class="tw">
                  <a href="http://twitter.com/#!/geek_hub"> </a>
              </li>
              <li class="yb">
                  <a href="http://www.youtube.com/user/GeekHubchannel"> </a>
              </li>
          </ul>
          <span class="line"></span>
        <?php if ($primary_nav): print $primary_nav; endif; ?>

      </div> <!-- /#header -->

      <div id="center"><div id="squeeze"><div class="right-corner"><div class="left-corner">
          <?php print $breadcrumb; ?>
          <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
          <a id="main-content"></a>
          <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
          <?php print render($title_prefix); ?>
          <?php if ($title): ?>
            <h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
          <?php endif; ?>
          <?php print render($title_suffix); ?>
          <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
          <?php print render($tabs2); ?>
          <?php print $messages; ?>
          <?php print render($page['help']); ?>
          <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
          <div class="clearfix">
            <?php print render($page['content']); ?>
          </div>
          <?php print $feed_icons ?>
          <?php print render($page['footer']); ?>
      </div></div></div></div> <!-- /.left-corner, /.right-corner, /#squeeze, /#center -->


    </div> <!-- /#container -->
  </div> <!-- /#wrapper -->
