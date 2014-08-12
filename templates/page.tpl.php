 <!--page and article template-->
<div id="preheader" style="display:none">
    <?php print $site_name; ?>
</div>
 <!--entete-->
 <?php
      include('header.tpl.php');
    ?>
        <!--controles du slider-->
<div id="mainwrapper" class="ym-wrapper"><!--main content wrapper-->
  <div id="titlebox" class="ym-wbox">
    <h2>
                            <?php print $title; ?></h2>
                        </div>
  <!--main content-->
  <div id="maincontent" class="ym-wbox">
    <div id="maingrid" class="ym-grid linearize-level-1">
        <div id="mainleft" class="ym-g66 ym-gl">
              <div id="unnecessarypadding" class="ym-gbox">
                            <?php print render($page['content']); ?>
                           <!--btn preceden-->
                           <a  class="btn btn-success" type="button" href="javascript:history.back()">Back</a>
                          <div id="comezon" class='lists'>
                                <?php //print render($page['commentregion']); ?>
                          </div>
                  </div><!--ym-gbox-->
        </div><!--mainleft-->
    </div><!--maingrid-->
  </div><!--maincontent-->
<?php
    include('footer.tpl.php');
?>

</div><!--mainwrapper-->
