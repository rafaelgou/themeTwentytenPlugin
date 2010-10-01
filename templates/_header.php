<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>

  <body>

<div id="wrapper">

<div id="header">

  <div id="masthead">

    <div id="branding">

      <h1 id="site-title">
        <span>
          <a href="<?php url_for('@homepage', true) ?>" title="<?php echo __($sf_response->getTitle(), '', 'twentyten') ?>"><?php echo __($sf_response->getTitle(), '', 'twentyten') ?></a>
        </span>
      </h1>

      <div id="site-description"><?php $metas = $sf_response->getMetas(); echo ( $metas['description'] ) ? __($metas['description'], '', 'twentyten') : ''; ?></div>

      <?php echo image_tag('../themeTwentytenPlugin/images/headers/' .
              $sf_user->getThemeConfig('header_image'),
              array('alt'=>'Header Images')) ?>

    </div><!-- #branding -->

<?php include_theme_partial('nav') ?>

  </div><!-- #masthead -->

</div><!-- #header -->
