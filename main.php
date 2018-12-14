<?php
/**
 * =============================
 *
 * CCExtractor DokuWiki Template
 * @author John Chew
 * @link https://github.com/johnengelo/ccextractor-dokuwiki
 * @license CC BY-SA 3.0
 *
 * =============================
 */


/* Must be run from within DokuWiki */ 
if (!defined('DOKU_INC')) {
    die();
}

header('X-UA-Compatible: IE=edge,chrome=1');

$hasSidebar = page_findnearest($conf['sidebar']);
$showSidebar = $hasSidebar && ($ACT == 'show');

?>

<!DOCTYPE html>
<html lang="<?php echo $conf['lang']?>" class="no-js">

    <head>
    
        <meta charset="UTF-8" />
        <!-- [ Page Title ] -->
        <title><?php tpl_pagetitle(); ?> :: <?php echo strip_tags($conf['title']) ?></title>
        <script>(function (H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)</script>
        <meta name="viewport" content="width=device-width"/>
        <meta name="author" content="John Chew">
        <?php echo tpl_favicon(array('favicon', 'mobile')) ?>
        <?php tpl_includeFile('meta.html') ?>
        
        <?php tpl_metaheaders() ?>
        
        <!-- [ Must be run after tpl_metaheaders() due to difference in jQuery versions ] -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
        <!-- CCExtractor DokuWiki CSS Stylesheet -->
        <link href="<?php echo tpl_getMediaFile(array("css/userstyle.css")); ?>" rel="stylesheet">
        
    </head>
    
    <body role="document">
    
        <?php
            // Functions Library
            require_once('conf/tpl_template_ccextractor.php');
            // Header File
            include('tpl_header.php');
        ?>
        
        <!-- [ Sidebar ] -->
        <?php if($showSidebar): ?>    
        <!-- [ Aside ] -->
            <div id="dokuwiki__aside">
                <div class="pad aside include group">
                    <h3 class="toggle"><?php echo $lang['sidebar'] ?></h3>
                    <div class="content">
                        <div class="group">
                            <?php tpl_flush() ?>
                            <?php tpl_includeFile('sidebarheader.html') ?>
                            <?php tpl_include_page($conf['sidebar'], true, true) ?>
                            <?php tpl_includeFile('sidebarfooter.html') ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        
        <div class="main">
            
            <!-- [ Content: show, edit, etc., ] -->
            <?php tpl_flush() ?>
            <?php tpl_includeFile('pageheader.html') ?>
            
            <!-- [ Page Content | Start ] -->
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-12 col-md-2 p-0" id="leftsidebar">
                        <nav class="navbar navbar-expand navbar-dark flex-md-column flex-row align-items-start py-2" id="sidebar-left">
                            <div class="collapse navbar-collapse">
                                <ul class="flex-md-column flex-row navbar-nav justify-content-between" id="sidebar-content">
                                    <div class="navbar-item" id="navbar_brand_sidebar">
                                        <?php
                                            // Get logo either out of the template images folder or data/media folder
                                            $logoSize = array();
                                            $logo = tpl_getMediaFile(array(':wiki:logo.png', 'images/logo_large.png', 'images/logo.png', 'images/ccextractor_logotype.png' ), false, $logoSize);
                                            // Display logo in a link to the home page
                                            tpl_link(
                                                wl(),
                                                '<img src="'.$logo.'" '.$logoSize[1].' alt="" />'
                                            );
                                        ?>
                                    </div>
                                    
                                    <li class="nav-item">
                                        <?php tpl_link(wl('home'), hsc('HOME'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php tpl_link(wl('about'), hsc('ABOUT'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php tpl_link(wl('download'), hsc('DOWNLOAD'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php tpl_link(wl('documentation'), hsc('DOCUMENTATION'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                                    </li>
                                    <li class="nav-item">
                                        <?php tpl_link(wl('support'), hsc('SUPPORT'), 'title="Home | CCExtractor" class="nav-link" id="sidebar_nav-item"'); ?>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </aside>
                    <main class="col bg-faded py-3">
                        <div class="jumbotron" id="maincontent_bg" style="border-radius: 0px;">
                            <div class="container">
                                <!-- [ Breadcrumbs | Custom Breadcrumbs ] -->
                                <div class="breadcrumbs">
                                <?php
                                    tpl_youarehere_ccx();
                                ?>
                                </div>
                                
                                
                                
                                <!-- [ Message Area ] -->
                                <?php html_msgarea() ?>
                                <!-- [ Main Page Content - Start ] -->
                                <?php tpl_content($prependTOC = false) ?>
                                <!-- [ Main Content - End] -->
                                
                            </div>
                        </div>
                    </main>
                </div>
            </div>
                        
            <!-- [ Page Content | End ] -->
            
            <?php //tpl_includeFile('pagefooter.html') ?>
            
            <?php //tpl_pageinfo() ?>
            <?php tpl_flush() ?>
            
        </div>

        
        <?php 
            include('tpl_footer.php');
        ?>
        
        <div class="no">
            <?php tpl_indexerWebBug() ?>
        </div>
        <div id="screen__mode" class="no"></div>
        
        
        <!-- [ jQuery CDN - Slim version (=without AJAX) ] -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <!-- [ Popper.JS ] -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <!-- [ Bootstrap JS ] -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</body>

</html>        