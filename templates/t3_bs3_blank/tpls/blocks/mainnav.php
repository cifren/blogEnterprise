<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>

<!-- MAIN NAVIGATION -->
<!-- nav id="t3-mainnav" class="wrap navbar navbar-default t3-mainnav">
        <div class="container">

<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">

    <?php /* if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
      <?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
      <i class="fa fa-bars"></i>
      </button>
      <?php endif ?>

      <?php if ($this->getParam('addon_offcanvas_enable')) : ?>
      <?php $this->loadBlock ('off-canvas') ?>
      <?php endif ?>

      </div>

      <?php if ($this->getParam('navigation_collapse_enable')) : ?>
      <div class="t3-navbar-collapse navbar-collapse collapse"></div>
      <?php endif?>

      <div class="t3-navbar navbar-collapse collapse">
      <jdoc:include type="<?ph echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') */ ?>
</div>

</div>
</nav -->

<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#">Collective Freelance</a>
            <?php if ($this->countModules('languageswitcherload')) : ?>
                <!-- LANGUAGE SWITCHER -->

                <a class="languageswitcherload"></a>
                <jdoc:include type="modules" name="<?php $this->_p('languageswitcherload') ?>" style="raw" />
                <!-- //LANGUAGE SWITCHER -->
            <?php endif ?>
        </div>
        <div class="nav navbar-nav navbar-right "> 
            <?php if ($this->countModules('menu-1')) : ?>
                <jdoc:include type="modules" name="<?php $this->_p('menu-1') ?>" style="raw" />
            <?php endif ?>
        </div>

    </div><!-- /.navbar-collapse -->
</nav>


