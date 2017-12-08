<style>
	@media (min-width: 991px) {
		.sidebar-nav .navbar li {
			float: none;
			display: block;
		}
	}
	@media (max-width: 990px) {
		.navbar-header {
			float: none;
		}
		.navbar-left,.navbar-right {
			float: none !important;
		}
		.navbar-toggle {
			display: block;
		}
		.navbar-collapse {
			border-top: 1px solid transparent;
			box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
		}
		.navbar-fixed-top {
			top: 0;
			border-width: 0 0 1px;
		}
		.navbar-collapse.collapse {
			display: none!important;
		}
		.navbar-nav {
			float: none!important;
			margin-top: 7.5px;
		}
		.navbar-nav>li {
			float: none;
		}
		.navbar-nav>li>a {
			padding-top: 10px;
			padding-bottom: 10px;
		}
		.collapse.in{
			display:block !important;
		}
	}
</style>

<div class="sidebar-nav">
    <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_content" id="ChangeToggle">
                <div id="navbar-hamburger">
                    <b class="fa fa-bars" aria-hidden="true">Menu</b>
                </div>
                <div id="navbar-close" class="hidden">
                    <span class="glyphicon glyphicon-remove"></span>
                </div>
            </button>
        </div>

        <div class="navbar-collapse collapse" id="menu_content">
            <ul class="nav navbar-nav"><?php
                for($i=0;$i<sizeof($list_of_menu_parent);$i++){?>
                    <li><a href=<?php echo base_url()."admin/".$list_of_menu_parent[$i]['tag_name'];?>><?php echo $list_of_menu_parent[$i]['nama_menu'];?></a></li><?php 
                }?>
                <li><a href="<?php echo base_url()."admin/logout";?>">Logout</a></li>
            </ul>
        </div>
    </div>
</div>