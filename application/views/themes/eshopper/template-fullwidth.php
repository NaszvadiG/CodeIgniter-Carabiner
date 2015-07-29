<!DOCTYPE html>
<html lang="en">
    <head>
        <?php ctPartial('header') ?>
    </head><!--/head-->

    <body>
        <header id="header"><!--header-->
            <?php ctPartial('top') ?>
            <!--/header_top-->
            <?php ctPartial('top-middle') ?>
            <!--/header-middle-->
            <?php ctPartial('top-bottom') ?>
            <!--/header-bottom-->
        </header><!--/header-->
        <?php ($ctTemplate_slider ? ctPartial('inc/slider') : "" ); ?>
        <!--/slider-->
        <?php ctPartial('inc/header-adv'); ?>

        <?php ctPartial($view) ?>


        <footer id="footer"><!--Footer-->
            <?php ctPartial('footer') ?>
            <?php ctPartial('footer-widgets') ?>
            <?php ctPartial('footer-copyright') ?>
        </footer><!--/Footer-->
        <?php ctPartial('footer-scripts') ?>
    </body>
</html>