<h5 class="sidebar-header">Last Login : <?php echo date('d M Y') ?></h5>
<ul class="nav nav-pills nav-stacked">
    <li class="nav-dropdown active open">
        <a href="<?php echo base_url('admin') ?>" title="Dashboards">
            <i class="fa fa-home"></i> Dashboards
        </a>
    </li>
    <li class="nav-dropdown">
        <a href="#" title="Posts">
            <i class="fa fa-lg fa-fw fa-camera"></i> Media
        </a>
        <ul class="nav-sub">
            <li>
                <a href="<?php echo base_url('admin/media/')?>" title="Galleries">
                    <i class="fa fa-fw fa-caret-right"></i> Media
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/media/add')?>" title="Add new media">
                    <i class="fa fa-fw fa-caret-right"></i> Add
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-dropdown">
        <a href="#" title="Pages">
            <i class="fa fa-lg fa-fw fa-book"></i> Pages
        </a>
        <ul class="nav-sub">
            <li>
                <a href="<?php echo base_url('admin/pages/')?>" title="Members">
                    <i class="fa fa-fw fa-caret-right"></i> Pages
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/pages/add')?>" title="Add New Page">
                    <i class="fa fa-fw fa-caret-right"></i> Add
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-dropdown">
        <a href="#" title="Posts">
            <i class="fa fa-lg fa-fw fa-file-o"></i> Posts
        </a>
        <ul class="nav-sub">
            <li>
                <a href="<?php echo base_url('admin/posts/')?>" title="Post list">
                    <i class="fa fa-fw fa-caret-right"></i> Posts
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Add
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Categories
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Tags
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-dropdown">
        <a href="#" title="Posts">
            <i class="fa fa-lg fa-fw fa-shopping-cart"></i> Shops
        </a>
        <ul class="nav-sub">
            <li>
                <a href="<?php echo base_url('admin/posts/')?>" title="Post list">
                    <i class="fa fa-fw fa-caret-right"></i> Products
                </a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/posts/')?>" title="Post list">
                    <i class="fa fa-fw fa-caret-right"></i> Add Products
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Category
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Tags
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Settings
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-dropdown">
        <a href="#" title="Posts">
            <i class="fa fa-lg fa-fw fa-users"></i> Users
        </a>
        <ul class="nav-sub">
            <li>
                <a href="<?php echo base_url('admin/posts/')?>" title="Post list">
                    <i class="fa fa-fw fa-caret-right"></i> Users
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Add
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/users/profile')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Profile
                </a>
            </li>
            <li>
                <a href="<?php  echo base_url('admin/posts/add')?>" title="Add new posts">
                    <i class="fa fa-fw fa-caret-right"></i> Groups
                </a>
            </li>
        </ul>
    </li>
    
</ul>

<h5 class="sidebar-header">Summary</h5>
<ul class="sidebar-summary">
    <li>
        <div class="mini-chart mini-chart-block">
            <div class="chart-details">
                <div class="chart-name">Total Sales</div>
                <div class="chart-value">$261,885</div>
            </div>
            <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
        </div>
    </li>
    <li>
        <div class="mini-chart mini-chart-block">
            <div class="chart-details">
                <div class="chart-name">Total Customers</div>
                <div class="chart-value">12,491</div>
            </div>
            <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
        </div>
    </li>
    <li>
        <div class="mini-chart mini-chart-block">
            <div class="chart-details">
                <div class="chart-name">Traffic</div>
                <div class="chart-value">945,013</div>
            </div>
            <div id="mini-chart-sidebar-3" class="chart pull-right"></div>
        </div>
    </li>
</ul>