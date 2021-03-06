<!doctype html>
<html class="no-js">
    <head>
        <?php ctPartial('header', null, 'admin'); ?>
        <?php $this->carabiner->display('admin-css-login'); ?>
        
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/veneto-admin.min.css">
        <link rel="stylesheet" href="demo/css/demo.css">
        <link rel="stylesheet" href="dist/assets/font-awesome/css/font-awesome.css">
        <!--[if lt IE 9]>
        <script src="dist/assets/libs/html5shiv/html5shiv.min.js"></script>
        <script src="dist/assets/libs/respond/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="body-sign-in">
        <div class="container">
            <div class="panel panel-default form-container">
                <div class="panel-body">
                    <form role="form">
                        <h3 class="text-center margin-xl-bottom">Welcome Back!</h3>

                        <div class="form-group text-center">
                            <label class="sr-only" for="email">Email Address</label>
                            <input type="email" class="form-control input-lg" id="email" placeholder="Email Address">
                        </div>
                        <div class="form-group text-center">
                            <label class="sr-only" for="password">Password</label>
                            <input type="password" class="form-control input-lg" id="password" placeholder="Password">
                        </div>

                        <a href="index.html" class="btn btn-primary btn-block btn-lg">SIGN IN</a>
                    </form>
                </div>
                <div class="panel-body text-center">
                    <div class="margin-bottom">
                        <a class="text-muted text-underline" href="javascript:;">Forgot Password?</a>
                    </div>
                    <div>
                        Don't have an account? <a class="text-primary-dark" href="pages-sign-up.html">Sign up here</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
