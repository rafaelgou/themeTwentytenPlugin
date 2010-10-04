# themeTwentytenPlugin #

TwentyTen Wordpress theme version under symfony sfThemePlugin, as in
<http://2010dev.wordpress.com/> or <http://wordpress.org/extend/themes/twentyten>.

Goal: start point to migrate others Wordpress Templates.

It's not a goal to clone Wordpress functions, but theme's visual (XHTML + CSS), with zero
change in CSS, and adapting the XHTML to symfony's template system.

## Requirement ##

**sfThemePlugin**

<http://www.symfony-project.org/plugins/sfTheme2Plugin>

*From sfTheme2Plugin README*

*Because a dead plugin named sfThemePlugin is parked at the symfony-project site,
this package is just a placeholder for the real sfThemePlugin which is located at
<http://github.com/weaverryan/sfThemePlugin>.*

While waiting [weaverryan pull requests on sfThemePlugi](http://github.com/weaverryan/sfThemePlugin)
to be accepted, you must use my fork:

  * Instaling Requirement

        cd /path_to_symfony_project/
        git submodule add git://github.com/rafaelgou/sfThemePlugin.git plugins/sfThemePlugin
        cd plugins/sfThemePlugin
        git submodule init
        git submodule update

  * Activate the plugin in the `config/ProjectConfiguration.class.php` (if not instaled via package)

        class ProjectConfiguration extends sfProjectConfiguration
        {
          public function setup()
          {
            $this->enablePlugins(array(
              'sfThemePlugin',
              '...'
            ));
          }
        }


## Instalation ##

  * Install the plugin (via a package - not avaliable yet)

        ./symfony plugin:install themeTwentytenPlugin

  * Install the plugin (via a GitHub)

        cd /path_to_symfony_project/
        git submodule add git://github.com/rafaelgou/sfThemePlugin.git plugins/themeTwentytenPlugin
        git submodule init
        git submodule update

  * Activate the plugin in the `config/ProjectConfiguration.class.php` (if not instaled via package)

          [php]
          class ProjectConfiguration extends sfProjectConfiguration
          {
            public function setup()
            {
              $this->enablePlugins(array(
                'sfThemePlugin',
                'themeTwentytenPlugin',
                '...'
              ));
            }
          }

  * Publish assets for the plugin (if not instaled via package)

        ./symfony plugin:publish-assets

  * Clear Cache (if not instaled via package)

        ./symfony cc

   * Optionally, activate the demo module in `apps/YOUR_APPLICATION/config/settings.yml`

        all:
          .settings:
            enabled_modules: [default, ( ...other stuff ), theme_twentyten_demo]

And you can access it with `http://www.your_symfony_domain.com/theme_twentyten_demo` and
the XHTML Test Page in `http://www.your_symfony_domain.com/theme_twentyten_demo/xhtmlTestPage`.

## Using themeTwentytenPlugin ##

It's important start reading sfThemePlugin documentation:
<http://www.symfony-project.org/plugins/sfTheme2Plugin/0_8_0?tab=plugin_readme>

###Activating twentyten theme###

Edit your `apps/YOUR_APPLICATION/config/settings.yml`

        all:
          theme:
            controller_options:
              default_theme:   twentyten

And it's done.

### Templates avaliables ###

Two templates are avaliables:

  * twentyten
  * twentyten_onecolumn-page

Under sfThemePlugin structure, both are called *theme*. So, must refered them as themes, not
as templates, unlike Wordpress.

More information you can get bellow on *themeTwentytenPlugin internals*.

##themeTwentytenPlugin internals##

Wordpress has a lot of functions to use inside off a theme. There'is not really interesting
to "clone" Wordpress funcionality - well, just use Wordpress, it's great. But symfony
has a lot of funcionalities, really cools, but no template themes.

The [sfSympalPlugin](http://www.symfony-project.org/plugins/sfSympalPlugin) is a CMS plugin
with a interesting theme manager, fortunately avaliable as standand alone plugin.

After some adjustments, it's now possible to create themes plugins, with the following structure.

###Directory and file structure###

        |-- config
        |   `-- app.yml
        |-- i18n
        |   `-- mytheme.pt_BR.xml
        |-- modules
        |   `-- theme_mytheme_demo
        |       |-- actions
        |       |   `-- actions.class.php
        |       |-- lib
        |       |   `-- Basetheme_mytheme_demoActions.class.php
        |       `-- templates
        |           |-- indexSuccess.php
        |           `-- xhtmlTestPageSuccess.php
        |-- templates
        |   |-- _footer.php
        |   |-- _header.php
        |   |-- _nav.php
        |   |-- _sidebar.php
        |   |-- mytheme.php
        |   `-- mytheme_onecolumn-page.php
        `-- web
            |-- images
            |   `-- image1.png
            |   `-- image2.png
            `-- style.css

###Configuring the TwentyTen theme###

You can access the theme configuration on `themeTwentytenPlugin/config/app.yml`

        all:
          theme:
            themes:

              twentyten:
                layout:       twentyten
                templates_dir: themeTwentytenPlugin/templates/
                stylesheets:  [../themeTwentytenPlugin/style.css]
                javascripts:  []
                # theme specific
                header_image: path.jpg

              # other wordpress template (sfThemePlugin theme or subtheme)
              twentyten_onecolumn-page:
                layout:       twentyten_onecolumn-page
                templates_dir: themeTwentytenPlugin/templates/
                stylesheets:  [../themeTwentytenPlugin/style.css]
                javascripts:  []
                # theme specific
                header_image: sunset.jpg

First, the "id" of the themes are under all/theme/themes YAML tree:

        all:
          theme:
            themes:
              twentyten:
              twentyten_onecolumn-page:

The options:

        layout:       twentyten
        templates_dir: themeTwentytenPlugin/templates/

are mandatory. **layout** is the template file with `.php` extension under **templates_dir**.
See *Directory and file structure* above.

The options:

        stylesheets:  [../themeTwentytenPlugin/style.css]
        javascripts:  []

are optionals, but at least **stylesheets** are almost mandatory. It can point to
any CSS file, a array of CSS files. The default location (under `web` directory inside the plugin,
with no `css/` for easy importing from Wordpress themes) are referenced with `../`.

This is because symfony looks for stylesheets under `web/css`, and as `web/` directory
is public, and the assets for de plugin are linked under web/themeTwentytenPlugin. This
practice makes really simple import Wordpress themes (and other kind of themes as well).

The same principals applys the **javascripts**.

###Internationalizing strings###

To facilitate, the sfThemePlugin already loads I18N helper.

All theme specific translation relies under `i18n/` directory, with the format:

        themename.lang.xml
        # Example:
        mytheme.pt_BR.xml
        # or in case
        twentyten.pt_BR.xml

In templates you can do string translations as simple as:

        <?php echo __('About', '', 'twentyten') ?>

or, with parameters, as simple as:

        <?php echo __('Posted on %1%', array('%1%'=>'08 set 2010'), 'twentyten') ?>

You can, of course, use others translations avaliable on the project, passing other
catalogues as third parameter of function.

The `i18ntwentyten.pt_BR.xml` of themeTwentytenPlugin is just an example, don't want to
be a complete translation for the theme (as I don't know your focus).

###Creating new "Wordpress template" (sfThemePlugins theme or subthemes)###

Edit `themeTwentytenPlugin/config/app.yml` and add your template information:

        all:
          theme:
            themes:

              twentyten:
        # ( ...other stuff )
              twentyten_newtemplate:
                description:   Wordpress TwentyTen
                layout:        twentyten_newtemplate
                templates_dir: themeTwentytenPlugin/templates/
                stylesheets:  [../themeTwentytenPlugin/style.css]
                javascripts:  []
                # theme specific
                header_image: sunset.jpg

Create the template file under `themeTwentytenPlugin/templates/`, that **MUST** be
the `layout` option followed by `.php` extension. A good start is to copy from another
template:

        cd themeTwentytenPlugin/templates/
        cp twentyten.php twentyten_newtemplate.php

To get any config information, use in template the `sf_user` variable:

        # _header.php
        <?php echo image_tag('../themeTwentytenPlugin/images/headers/' .
                      $sf_user->getThemeConfig('header_image'),
                      array('alt'=>'Header Images')) ?>


You **MUST** use the theme name as a prefix, as symfony can get this name as global
templates directly. So, is a REALLY BAD idea use names as `layout.php`.

Just edit the template as a normal symfony template, of course you **MUST** include the
content somewhere with the code:

        <?php echo $sf_content ?>

Mimeting the Wordpress templates, *header*, *footer*, *nav* and *sidebar* are symfony partials,
as *_header.php*, *_footer.php*, *_nav.php* and *_sidebar.php*
- and only visible for the plugin itself. This is, saying again, to "clone" the Wordpress
templates, but not mandatory.

But the important thing is that you can't call this partials with `include_partial` function
inside the templates as you used to - symfony won't find them, even if you user the

        <?php include_partial('global/header') ?>

syntax. The framework will look at `apps/YOUR_APPLICATION/templates` directory, so, it's useless.

The right way is to use `include_theme_partial` as you can see in
`themeTwentytenPlugin/templates/twentyten.php` template

        <?php include_theme_partial('header') ?>

        <div id="main">

        <?php include_theme_partial('sidebar') ?>

        <div id="container">
          <div id="content">

        <?php echo $sf_content ?>
          </div><!-- #content -->
        </div><!-- #container -->

        </div><!-- #main -->

        <?php include_theme_partial('footer') ?>

##Converting a Wordpress Theme##

An advice: it could hard, depending on complexity of the theme. This guidelines were used to
create this plugin, so, you can use as a good start point.

**IMPORTANT**: sfThemePlugin must be installed, of course. You'd better play a little with
themeTwentytenPlugin before go ahead.

###First: create a plugin###

Don't just copy this plugin! Make your own clean plugin! You'd better install and use the
[sfTaskExtraPlugin](http://www.symfony-project.org/plugins/sfTaskExtraPlugin) that
turns the work so much simple - that's what we're going to guide you know.

        ./symfony plugin:install sfTaskExtraPlugin

Now, considering you are going to create the theme 'Basic', use the followings command:

        ./symfony generate:plugin themeBasicPlugin
        ./symfony generate:plugin-module themeBasicPlugin theme_basic_demo

to create the plugin and a demo module (really usefull as we'll soon).

Create the missing directories:

        mkdir plugins/themeBasicPlugin/templates
        mkdir plugins/themeBasicPlugin/web

If you want to internatinalized the theme, create also:

      mkdir plugins/themeBasicPlugin/i18n

Unpack the Wordpress Theme under plugins/themeBasicPlugin/web, with no root directory,
getting something like that:

        `-- web
          |-- 404.php
          |-- archive.php
          |-- attachment.php
          |-- author.php
          |-- category.php
          |-- comments.php
          |-- editor-style-rtl.css
          |-- editor-style.css
          |-- footer.php
          |-- functions.php
          |-- header.php
          |-- images
          |   |-- headers
          |   |   |-- berries-thumbnail.jpg
          |   |   |-- berries.jpg
          |   |   |-- cherryblossoms-thumbnail.jpg
          |   |   |-- cherryblossoms.jpg
          |   |   |-- concave-thumbnail.jpg
          |   |   |-- concave.jpg
          |   |   |-- fern-thumbnail.jpg
          |   |   |-- fern.jpg
          |   |   |-- forestfloor-thumbnail.jpg
          |   |   |-- forestfloor.jpg
          |   |   |-- inkwell-thumbnail.jpg
          |   |   |-- inkwell.jpg
          |   |   |-- path-thumbnail.jpg
          |   |   |-- path.jpg
          |   |   |-- sunset-thumbnail.jpg
          |   |   `-- sunset.jpg
          |   `-- wordpress.png
          |-- index.php
          |-- languages
          |   |-- pt_BR.mo
          |   |-- pt_BR.po
          |   `-- twentyten.pot
          |-- license.txt
          |-- loop.php
          |-- onecolumn-page.php
          |-- page.php
          |-- rtl.css
          |-- screenshot.png
          |-- search.php
          |-- sidebar-footer.php
          |-- sidebar.php
          |-- single.php
          |-- style.css
          `-- tag.php

You must left only images, CSS and JS files. So, in this case, you will remain with just:

        |-- images
        |   |-- headers
        |   |   |-- berries-thumbnail.jpg
        |   |   |-- berries.jpg
        |   |   |-- cherryblossoms-thumbnail.jpg
        |   |   |-- cherryblossoms.jpg
        |   |   |-- concave-thumbnail.jpg
        |   |   |-- concave.jpg
        |   |   |-- fern-thumbnail.jpg
        |   |   |-- fern.jpg
        |   |   |-- forestfloor-thumbnail.jpg
        |   |   |-- forestfloor.jpg
        |   |   |-- inkwell-thumbnail.jpg
        |   |   |-- inkwell.jpg
        |   |   |-- path-thumbnail.jpg
        |   |   |-- path.jpg
        |   |   |-- sunset-thumbnail.jpg
        |   |   `-- sunset.jpg
        |   `-- wordpress.png
        |-- editor-style-rtl.css
        |-- editor-style.css
        |-- rtl.css
        `-- style.css

As we want a basic support, so we just need the `style.css` stylesheet.

###Activating the new plugin####

  * Activate the plugin in the `config/ProjectConfiguration.class.php`

        [php]
        class ProjectConfiguration extends sfProjectConfiguration
        {
          public function setup()
          {
            $this->enablePlugins(array(
              'sfThemePlugin',
              'themeBasicPlugin',
              '...'
            ));
          }
        }

  * Publish assets for the plugin

        ./symfony plugin:publish-assets

  * Clear Cache (if not instaled via package)

        ./symfony cc

   * Activate the demo module in `apps/YOUR_APPLICATION/config/settings.yml`

        all:
          .settings:
            enabled_modules: [default, ( other stuff ), theme_basic_demo]

###Configuring first theme####

Create the file `plugins/themeBasicPlugin/config/app.yml`, pointing to the CSS and JS
files in your theme:

        all:
          theme:
            themes:
              basic:
                description:   Basic Theme
                layout:        basic
                templates_dir: themeBasicPlugin/templates/
                stylesheets:  [../themeBasicPlugin/style.css]
                javascripts:  []

And create the themeBasicPlugin/templates/basic.php

        touch plugins/themeBasicPlugin/templates/basic.php

To facilitate the conversion, let's create some demo pages. The most simple is use the XHTML Test Page
as index of the demo. Copy from the themeTwentyentPlugin as the following command:

        cp plugins/themeTwentytenPlugin/modules/theme_twentyten_demo/templates/xhtmlTestPageSuccess.php \
        plugins/themeBasicPlugin/modules/theme_basic_demo/templates/indexSuccess.php

and create the action in plugins/themeBasicPlugin/modules/theme_basic_demo/action/actions.class.php

        <?php

        require_once dirname(__FILE__).'/../lib/Basetheme_basic_demoActions.class.php';

        /**
         * theme_twentyten_demo actions.
         *
         * @package    themeBasicPlugin
         * @subpackage theme_basic_demo
         * @author     Your name here
         * @version    SVN: $Id: actions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
         */
        class theme_basic_demoActions extends Basetheme_basic_demoActions
        {

          public function executeIndex(sfWebRequest $request)
          {
          }

        }

Now you have a test page accessible from `http://www.your_symfony_domain.com/theme_basic_demo?sf_theme=basic`.

Note that we didn't set this theme as default (see "Configuring the TwentyTen theme") as is useless, so,
using `?sf_theme=basic` puts in the session this theme as active. Enough for developing.

###The hard part###

Well, this part is as artesanal as the complexity of the Wordpress Theme. Use the following as
guidelines:

  1. Get the `index.php` in the Wordpress Theme and convert to
     `plugins/themeBasicPlugin/templates/basic.php`
  1. "Clone" the Wordpress calls - `get_header()`, `get_footer()`, `get_sidebar()`, etc -
     as partials - i.e, `_header.php`, `_footer.php`, `_sidebar.php`, etc.
  1. Simplify. Use less HTML as possible.
  1. The `_header.php` and `_footer.php` in themeTwentytenPlugin has a good basic structure.
     You should think about star with then and merge your on stuff.
  1. Don't try to clone everything. Is better do it when you need, if you need. Just in case
     generally you won't need a lot of things.
  1. Remember: each "Wordpress template" will be "sfThemePlugin theme". It's almost the same thing,
     but in other terms
  1. Keep the things organized: prefix the templates with the theme name.

###When is finished###

Back to the sfTaskExtraPlugin. It will help to package the plugin

      ./symfony plugin:package themeBasicPlugin

Now inside the themeBasicPlugin you get the package, something like themeBasicPlugin.tar.gz,
and you can install in others projects.

Or, better, plublish in symfony repository...

<http://www.symfony-project.org/jobeet/1_4/Doctrine/en/20#chapter_20_contributing_a_plugin>

## Previews ##

### Home Page ###

![Preview themeTwentytenPlugin home](http://github.com/rafaelgou/themeTwentytenPlugin/raw/master/docs/home.jpg)

### Home Page pt_BR (i18n example)###

![Preview themeTwentytenPlugin home pt_BR](http://github.com/rafaelgou/themeTwentytenPlugin/raw/master/docs/home_pt_BR.jpg)

### XHTML Elements Demo ###

![Preview themeTwentytenPlugin XHTML Elements Demo](http://github.com/rafaelgou/themeTwentytenPlugin/raw/master/docs/html_elements_demo.jpg)

