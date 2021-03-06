<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="<?php echo base_url();  ?>" class="active">Home</a></li>
                        <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('products')?>">Products</a></li>
                                <li><a href="product-details.html">Product Details</a></li> 
                                <li><a href="<?php echo site_url('shops/checkout') ?>">Checkout</a></li> 
                                <li><a href="<?php echo site_url('shops/cart') ?>">Cart</a></li> 
                                <li><a href="<?php echo site_url('shops/login') ?>">Login</a></li> 
                            </ul>
                        </li> 
                        <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                <li><a href="<?php echo site_url('blogs')?>">Blog List</a></li>
                                <li><a href="<?php echo site_url('blogs/detail')?>">Blog Single</a></li>
                            </ul>
                        </li> 
                        <li><a href="404.html">404</a></li>
                        <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div>