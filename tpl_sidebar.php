<?php
/**
 * @author John Chew
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * CCExtractor Sidebar
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) {
    die();
}
?>

<aside class="col-12 col-md-2 p-0" id="leftsidebar">
    <!-- [ Sidebar ]  -->
    <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start py-2" id="sidebar">
        <div class="collapse navbar-collapse" id="sidebar-collapse">
            <ul class="flex-md-column flex-row navbar-nav" id="sidebar-content" style="list-style-type:none; justify-content: center;">
                <!-- [ Sidebar Page Logo ] -->
                <div class="navbar-item" id="navbar_brand_sidebar">
                <?php
                    // Get logo either out of the template images folder or data/media folder
                    $logoSize = array();
                    $logo = tpl_getMediaFile(array(':wiki:logo.png', 'images/logo_large.png', 'images/logo.png', 'images/ccextractor_logotype.png' ), false, $logoSize);
                    // Display logo in a link to the home page
                    tpl_link(wl(),'<img src="'.$logo.'" '.$logoSize[1].' alt="" />');
                ?>
                </div>
                <div class="sidebar_header">
                    <!-- [ Sidebar Page Title ] -->
                    <h3><?php echo strip_tags($conf['title']) ?></h3>
                </div>
                
                <!-- Sidebar Link Dropdowns -->
                <li class="nav-item">
                    <div data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <span class="fas fa-home">&ensp;</span>
                        <?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                    </div>
                    <ul class="collapse list-unstyled" id="home_dropdown">
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home">&ensp;</i><?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?></div>
                    <ul class="collapse list-unstyled" id="home_dropdown">
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home">&ensp;</i><?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?></div>
                    <ul class="collapse list-unstyled" id="home_dropdown">
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home">&ensp;</i><?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?></div>
                    <ul class="collapse list-unstyled" id="home_dropdown">
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-home">&ensp;</i><?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?></div>
                    <ul class="collapse list-unstyled" id="home_dropdown">
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                        <li>
                            <?php tpl_link(wl('home'),hsc('HOME')); ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>

<div class="sidebar-toggler">
    <button class="navbar-toggler ml-auto;" id="sidebar_button" type="button" data-toggle="collapse" data-target="#leftsidebar" aria-controls="leftsidebar" aria-expanded="true" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
</div>