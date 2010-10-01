<div id="footer">
  <div id="colophon">

    <div id="footer-widget-area">

      <div id="first" class="widget-area">
        <ul class="xoxo">
        <li id="recent-posts-2" class="widget-container widget_recent_entries">
          <h3 class="widget-title"><?php echo __('Recent Topics', '', 'twentyten') ?></h3>
          <ul>
            <li><a href="">Lorem ipsum dolor sit amet 1</a></li>
            <li><a href="">Lorem ipsum dolor sit amet 2</a></li>
            <li><a href="">Lorem ipsum dolor sit amet 3</a></li>
          </ul>
        </li>
        </ul>
      </div><!-- #first .widget-area -->

      <div id="second" class="widget-area">
        <ul class="xoxo">
          <li id="pages-3" class="widget-container widget_pages">
            <h3 class="widget-title"><?php echo __('Pages', '', 'twentyten') ?></h3>
            <ul>
              <li>
                <a href="<?php echo url_for('@homepage') ?>" title="<?php echo __('Home', '', 'twentyten') ?>"><?php echo __('Home', '', 'twentyten') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_twentyten_demo/index') ?>" title="<?php echo __('Blog', '', 'twentyten') ?>"><?php echo __('Blog', '', 'twentyten') ?></a>
              </li>
              <li>
                <a href="" title="<?php echo __('Settings', '', 'twentyten') ?>"><?php echo __('Settings', '', 'twentyten') ?></a>
                <ul class='children'>
                  <li>
                    <a href="" title="<?php echo __('Users', '', 'twentyten') ?>"><?php echo __('Users', '', 'twentyten') ?></a>
                  </li>
                  <li>
                    <a href="" title="<?php echo __('Preferences', '', 'twentyten') ?>"><?php echo __('Preferences', '', 'twentyten') ?></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="" title="<?php echo __('About', '', 'twentyten') ?>"><?php echo __('About', '', 'twentyten') ?></a>
              </li>
              <li>
                <a href="" title="<?php echo __('Help', '', 'twentyten') ?>"><?php echo __('Help', '', 'twentyten') ?></a>
              </li>
              <li>
                <a href="<?php echo url_for('theme_twentyten_demo/xhtmlTestPage') ?>" title="<?php echo __('XHTML Test Page', '', 'twentyten') ?>"><?php echo __('XHTML Test Page', '', 'twentyten') ?></a>
              </li>
            </ul>
          </li>
        </ul>
      </div><!-- #second .widget-area -->

    </div><!-- #footer-widget-area -->

    <div id="site-info">
      <a href="<?php url_for('@homepage', true) ?>" title="<?php echo __($sf_response->getTitle(), '', 'twentyten') ?>"><?php echo __($sf_response->getTitle(), '', 'twentyten') ?></a>
		</div><!-- #site-info -->

    <div id="site-generator">
      <?php echo __('Powered by', '', 'twentyten') ?><br/>
      <a href="http://wordpress.org/">WordPress</a> and
      <a href="http://www.symfony-project.org/" style="background:none; padding-left: 0">symfony, The PHP Framework</a>
    </div><!-- #site-generator -->

  </div><!-- #colophon -->
</div><!-- #footer -->

</div><!-- #wrapper -->

  </body>
</html>
