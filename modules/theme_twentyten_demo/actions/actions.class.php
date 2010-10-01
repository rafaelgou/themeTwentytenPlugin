<?php

require_once dirname(__FILE__).'/../lib/Basetheme_twentyten_demoActions.class.php';

/**
 * theme_twentyten_demo actions.
 * 
 * @package    themeTwentytenPlugin
 * @subpackage theme_twentyten_demo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
class theme_twentyten_demoActions extends Basetheme_twentyten_demoActions
{

  public function executeIndex(sfWebRequest $request)
  {
  }

  public function executeXhtmlTestPage(sfWebRequest $request)
  {
    $this->loadTheme('twentyten','onecolumn-page');
  }
  
}
