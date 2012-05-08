<?php
/**
 * @version     $Id: index.php 21720 2012-02-18 12:35:15Z fordarnold $
 * @package     Joomla.Site
 * @copyright   Copyright (C) 2012 Meridian Softech (U) Ltd. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// check modules
$showSidebar        = ($this->countModules('newatomic-sidebar'));

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <!-- The following JDOC Head tag loads all the header and meta information from your site config and content. -->
        <jdoc:include type="head" />

        <meta charset="utf-8">
        <!-- Mobile viewport optimized: j.mp/bplateviewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        
        <!-- START Foundation: The following lines load the Foundation CSS Framework files -->
        
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/globals.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/typography.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/grid.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/ui.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/forms.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/orbit.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/reveal.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/mobile.css" type="text/css">
        <!-- END Foundation -->
        
        <!-- My Stylesheet -->
        
        <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/css/style.css" type="text/css">

        <!-- END My Stylesheet-->
        
        <!--[if lt IE 9]>
            <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/new_atomic/foundation/stylesheets/ie.css" type="text/css">
        <![endif]-->
        
        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?php echo $this->baseurl ?>/templates/new_atomic/favicon.ico" type="image/ico">
        
    </head>
    <body>
        <!-- Start BODY container -->
        <div class="container">
            <header>
                <div class="row">

                    <!-- LOGO -->
                    <div class="seven columns">
                        <a href="<?php echo $this->baseurl ?>">
                            <h1><?php echo $app->getCfg('sitename'); ?></h1>
                        </a>
                    </div>
                    <!-- END LOGO -->

                    <!-- SEARCH MODULE -->
                    <?php if($this->countModules('newatomic-search')) : ?>
                        <div class="five columns">    
                            <jdoc:include type="modules" name="newatomic-search" />
                        </div>
                    <?php endif; ?>
                    <!-- END SEARCH MODULE -->

                </div>
                <div class="row">
                    
                    <!-- TOP MENU MODULE -->
                    <?php if($this->countModules('newatomic-topmenu')) : ?>
                        <nav class="twelve columns">
                            <jdoc:include type="modules" name="newatomic-topmenu" />
                        </nav>
                    <?php endif; ?>
                    <!-- END TOP MENU MODULE -->

                </div>
            </header>
            
            <div id="main-content">
                <div class="row">

                    <!-- MAIN CONTENT -->
                    <div class="<?php echo $showSidebar ? 'eight' : 'twelve'; ?> columns">

                        <!-- SLIDESHOW 
                        <div class="row">
                            <div class="twelve columns">
                                <div id="slideshow"> 
                                     <img src="<?php //echo $this->baseurl ?>/templates/new_atomic/images/slideshow/slide1.png"/>
                                     <img src="<?php //echo $this->baseurl ?>/templates/new_atomic/images/slideshow/slide2.png"/>
                                     <img src="<?php //echo $this->baseurl ?>/templates/new_atomic/images/slideshow/slide3.png"/>
                                     <img src="<?php //echo $this->baseurl ?>/templates/new_atomic/images/slideshow/slide4.png"/>
                                     <img src="<?php //echo $this->baseurl ?>/templates/new_atomic/images/slideshow/slide5.png"/>
                                </div>
                            </div>
                        </div>
                        END SLIDESHOW -->

                        <p>

                        <div class="row">
                            <div class="twelve columns">
                                <jdoc:include type="message" />
                            </div>
                        </div>
                        <div class="row">
                            <section class="twelve columns">
                                <jdoc:include type="component" />
                            </section>
                        </div>

                        <hr />

                        <div class="row">
                            <!-- BOTTOM LEFT MODULE -->
                            <?php if($this->countModules('newatomic-bottomleft')) : ?>
                            <div class="six columns">
                                <jdoc:include type="modules" name="newatomic-bottomleft" style="xhtml" />
                            </div>
                            <?php endif; ?>
                            <!-- END BOTTOM LEFT MODULE -->

                            <!-- BOTTOM MIDDLE MODULE -->
                            <?php if($this->countModules('newatomic-bottommiddle')) : ?>
                            <div class="six columns">
                                <jdoc:include type="modules" name="newatomic-bottommiddle" style="xhtml" />
                            </div>
                            <?php endif; ?>
                            <!-- END BOTTOM MIDDLE MODULE -->

                        </div>

                    </div>
                    <!-- END MAIN CONTENT -->

                    <!-- SIDEBAR RIGHT MODULE -->
                    <?php if($this->countModules('newatomic-sidebar')) : ?>
                    <aside class="four columns">
                        <jdoc:include type="modules" name="newatomic-sidebar" style="xhtml" />
                    </aside>
                    <?php endif; ?>
                    <!-- END SIDEBAR RIGHT MODULE -->

                </div> 
            </div>

            <hr />
            
            <footer class="row">
                <div id="copyright" class="row">
                    <p class="four columns offset-by-eight">Design by <a href="http://meridiansoftech.net">Meridian Softech</a> &copy; <?php echo date('Y');?></p>
                </div>
            </footer>
        </div> 
        <!-- End BODY container -->

        <!-- Included Head.JS File : Loads Javascript files asynchronously (no blocking) -->
        <script src="<?php echo $this->baseurl ?>/templates/new_atomic/javascript/head.load.min.js"></script>
        
        <!-- Import all other JS files from Foundation using HeadJS -->
        <script type="text/javascript">
        head.js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/jquery.min.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/jquery.reveal.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/jquery.orbit-1.3.0.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/forms.jquery.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/jquery.customforms.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/jquery.placeholder.min.js")
            .js("<?php echo $this->baseurl ?>/templates/new_atomic/foundation/javascripts/app.js");
        </script>
        <!-- End Combine and Compress These JS Files -->
        
    </body>
</html>