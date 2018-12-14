<?php
/**
 * @author John Chew
 * @license GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * CCExtractor Footer
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) {
    die();
}
?>

<footer id="dokuwiki__footer" class="footer" style="position: relative; bottom: 0 !important;">
    <br /><br />
    <div class="container-fluid text-center text-md-left" id="footer_container">
        
        <div class="row">
            
            <div class="col-md-6 mt-md-0 mt-3">
                
                <h4>
                    <?php
                    // Get logo either out of the template images folder or data/media folder
                    $logoSize = array();
                    $logo = tpl_getMediaFile(array(':wiki:logo.png','images/logotype.png'), false, $logoSize);
                    // Display logo in a link to the home page
                    tpl_link(
                            wl(),
                            '<img src="'.$logo.'" '.$logoSize[1].' alt="" />'
                            );
                    ?>
                </h4>
                
                <?php if ($conf['tagline']): ?>
                <p class="claim" id="footer_tagline"><?php echo $conf['tagline']; ?></p>
                <?php endif ?>
            
            </div>
            
            <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Links Column -->
        <div class="col">

            <!-- Links -->
            <h5 class="text-uppercase">GENERAL</h5>

            <ul class="footer-list">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col">

            <!-- Links -->
            <h5 class="text-uppercase">SUPPORT</h5>

            <ul class="footer-list">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
        
        </div>
        <hr>
        <div id="license" class="text-center" style="padding-top: 1em;">
        <?php tpl_license(''); ?>
        </div>
        
    </div>
    <br/>
</footer> 