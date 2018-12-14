<?php

if (!defined('DOKU_INC')) {
    die();
}

?>

<? tpl_includeFile('header.html'); ?>
<link href="css/userstyle.css" rel="stylesheet">

<nav class="navbar navbar-expand-md navbar-dark">

    <div class="navbar_main">
        
        <!-- [ Logo / Brand ] -->
        <div class="navbar-item" id="navbar_brand">
            <?php
                // Get logo either out of the template images folder or data/media folder
                $logoSize = array();
                $logo = tpl_getMediaFile(array(':wiki:logo.png', 'images/logotype.png', 'images/logo.png', 'images/ccextractor_logotype.png' ), false, $logoSize);
                // Display logo in a link to the home page
                tpl_link(
                    wl(),
                    '<img src="'.$logo.'" '.$logoSize[1].' alt="" />'
                );
            ?>
        </div>
        
        <!-- [ Navbar Toggler | Font-Awesome Bars Icon ] -->
        <button class="navbar-toggler" id="main_navbar-menu" type="button" data-toggle="collapse" data-target="#navbar_contents" aria-controls="navbar_contents" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars" style="color: #189FA9;"></i>
        </button>
        <!-- [ Navbar Items ] -->
        <div class="collapse navbar-collapse mr-auto" id="navbar_contents">
            <!-- [ Left-side Search Form ] -->
            <div class="search mr-auto" id="searchform">
                <?php tpl_searchform_ccextractor() ?>
            </div>
            
            <div class="tools_dropdown mr-auto">
                <?php if (!empty($_SERVER['REMOTE_USER'])) { ?>
                        
                <!-- [ User / Admin Tools Dropdown ] -->
                <li class="nav-item dropdown ml-auto">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarusertools" role="button" aria-haspopup="true" aria-expanded="false" title="<?php $lang['loggedinas'] . $_SERVER['REMOTE_USER'] ?>">
                        <?php print '<i class="fas fa-user-circle" style="font-size: 2rem; color: #189FA9;"></i>'/* . ucfirst(editorinfo($_SERVER['REMOTE_USER'], true)); */?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarusertools">
                        <?php
                            echo (new \dokuwiki\Menu\UserMenu())->getListItems('action dropdown-item nav-item ', false);
                        ?>
                    </ul>
                </li>
                    
                <?php } else { ?>
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarlogin" role="button" aria-haspopup="true" aria-expanded="false" title="<?php $lang['loggedinas'] . $_SERVER['REMOTE_USER'] ?>">
                            <?php print '<i class="fas fa-sign-in-alt" style="font-size: 2rem; color: #189FA9;"></i>'/* . ucfirst(editorinfo($_SERVER['REMOTE_USER'], true)); */?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarlogin">
                            <?php
                                echo (new \dokuwiki\Menu\UserMenu())->getListItems('action nav-link ', false);
                            ?>
                        </ul>
                <?php } ?>
                        
                <!-- Page Tools -->
                
                <li class="nav-item dropdown ml-auto">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarpagetools" role="button" aria-haspopup="true" aria-expanded="false" title="<?php'.$lang['loggedinas'].$_SERVER['REMOTE_USER'].'?>">
                        <span class="dropdown_links pull-left"><i class="fas fa-sliders-h" style="font-size: 1.75rem; color: #189FA9;"></i></span>
                    </a>

                    <ul id="pagetools_navbar" class="dropdown-menu"  aria-labelledby="navbarpagetools">
                        
                    <?php echo (new \dokuwiki\Menu\PageMenu())->getListItems('action dropdown-item nav-item ', false); ?>
                        
                    <!-- Site Tools -->
                    <?php echo(new \dokuwiki\Menu\SiteMenu())->getListItems('action dropdown-item nav-item ', false); ?>

                    </ul>
                </li>     
            </div>
        </div>
    </div>
</nav>