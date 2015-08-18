<!doctype html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html> <!--<![endif]-->
    <head>
        <?php ctPartial('header', null, 'admin'); ?>

        <?php $this->carabiner->display('admin', 'css'); ?>
        <?php $this->carabiner->display('admin-theme', 'css'); ?>
        <?php $this->carabiner->display('admin-fonts', 'css'); ?>
        <?php ctCarabinerDisplay($carabiner_css); ?>

        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="">
        <header>
            <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
                <?php ctPartial('logo', NULL, 'admin'); ?>
                <?php ctPartial('top-navigation', NULL, 'admin'); ?>
            </nav>
        </header>
        <div class="page-wrapper">
            <aside class="sidebar sidebar-default">
                <nav>
                    <?php ctPartial('sidebar-navigation', NULL, 'admin'); ?>
                </nav>
            </aside>

            <div class="page-content">
                <div class="page-subheading page-subheading-md">
                    <ol class="breadcrumb">
                        <li class="active"><a href="javascript:;"><?php echo (isset($page_title) ? $page_title : 'Dashboard'); ?></a></li>
                    </ol>
                </div>
                <div class="page-heading page-heading-md">
                    <h2><?php echo (isset($page_title) ? $page_title : 'Dashboard'); ?></h2>
                </div>

                <div class="container-fluid-md">
                    <?php ctView($view) ?>
                </div>

            </div>
        </div>

        <?php $this->carabiner->display('admin', 'js'); ?>
        <!--[if lt IE 9]>
        <script src="dist/assets/plugins/flot/excanvas.min.js"></script>
        <![endif]-->
        <?php ctCarabinerDisplay($carabiner_js, 'js'); ?>
        <?php $this->carabiner->display($carabiner_js_pages, 'js'); ?>


    </body>
</html>
