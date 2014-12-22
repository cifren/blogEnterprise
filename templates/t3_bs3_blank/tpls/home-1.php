<?php
/**
 * ------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 * ------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 * ------------------------------------------------------------------------------
 */
defined('_JEXEC') or die;
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>"
      class='<jdoc:include type="pageclass" />'>

    <head>
        <jdoc:include type="head" />
        <?php $this->loadBlock('head') ?>
        <?php $this->addCss('home') ?>
        <?php $this->addStyleSheet(T3_TEMPLATE_URL . '/css/agency.css'); ?>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <?php //$this->addScript(T3_TEMPLATE_URL.'/js/classie.js');  ?>
        <?php //$this->addScript(T3_TEMPLATE_URL.'/js/cbpAnimatedHeader.min.js'); ?>
        <?php $this->addScript(T3_TEMPLATE_URL . '/js/jqBootstrapValidation.js'); ?>
        <?php $this->addScript(T3_TEMPLATE_URL . '/js/contact_me.js'); ?>
        <?php $this->addScript(T3_TEMPLATE_URL . '/js/agency.js'); ?>
    </head>

<body id="page-top" class="index">


    <div class="t3-wrapper"> <!-- Need this wrapper for off-canvas menu. Remove if you don't use of-canvas -->

        <?php $this->loadBlock('header') ?>

        <?php $this->loadBlock('mainnav') ?>

        <?php $this->loadBlock('mainbody-home-1') ?>

        <?php $this->loadBlock('footer')  ?>

    </div>

    <script src="<?php echo T3_TEMPLATE_URL . '/js/classie.js'?>"></script>
    <script src="<?php echo T3_TEMPLATE_URL . '/js/cbpAnimatedHeader.js'?>"></script>
</body>
</html>