<style>
	#logo img{
		max-height:90px;
	}
	/*********************** CSS HALAMAN MENU***********/
	.navbar{
		margin:0;padding:0;
		background-color:white;
		box-shadow: 0 8px 6px -9px #999;
	}
	.navbar .navbar-nav li a, .navbar .nav .dropdown .dropdown-menu li a{ 
		color:black;font-weight:bold;
	}
	.navbar .nav li a:hover, .navbar .navbar-nav li a:hover{
		color:red;background-color: transparent;
	}
	.navbar .navbar-nav > li > a:hover, .navbar .navbar-nav > li > a:focus, 
	.navbar .navbar-nav > li.open > a, .navbar .navbar-nav > li.open > a:hover, .navbar .navbar-nav > li.open > a:focus,
	.navbar .nav .dropdown .dropdown-menu li a:hover{
		color:red;background-color: white;border-bottom:solid 4px red;
	}
	.navbar .nav .dropdown .dropdown-menu li a{
		line-height:30px;
	}
	.navbar > .container .navbar-brand{
		padding:0; 
	}
	.dropdown-menu > li{
		padding:0px;
	}
	
	nav.shrink .navbar-nav{
		margin-top:0%;
	}
	@media(min-width:768px){
		#menu{
			margin-bottom:90px;
			background-color:green;
		}
		.navbar > .container .navbar-brand{
			margin-left:40px;
		}
		ul.nav li.dropdown:hover ul.dropdown-menu{
			display:block;
		}
		.navbar-nav{
			float:right;
			margin-top:3%;
		}
	}
	@media(max-width:991px){
		#menu{
			margin-bottom:64px;
			background-color:green;
		}
		.navbar > .container .navbar-brand img{
			height:50px;
			width:auto;
		}
	}
	.navbar .navbar-header #navbar-close{
		padding:4px;
	}
</style>
<div id="menu">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu_content" id="ChangeToggle">
                    <div id="navbar-hamburger">
                        <b class="fa fa-bars" aria-hidden="true">Menu</b>
                    </div>
                    <div id="navbar-close" class="hidden">
                        <span class="glyphicon glyphicon-remove"></span>
                    </div>
                </button>
                <a class="navbar-brand" href="#">
                    <div id="logo"><img src="<?php $browser_info[0]['icon'];?>" /></div>
                </a>
            </div>
            
            <div class="collapse navbar-collapse" id="menu_content">
                <ul class="nav navbar-nav"><?php
                    $arr_menu = getArrayofMenu($menu);
                    for($i=0;$i<sizeof($arr_menu);$i++){
                        if(sizeof($arr_menu[$i])==1){?>
                            <li><a href="<?php echo base_url($arr_menu[$i][0]['tag_name']);?>"><?php echo $arr_menu[$i][0]['nama_menu'];?></a></li><?php
                        }
                        if(sizeof($arr_menu[$i])>1){?>
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown"><?php echo $arr_menu[$i][0]->nama_menu;?><span class="caret"></span></a>
                                <ul class="dropdown-menu"><?php
                                    for($j=1;$j<sizeof($arr_menu[$i]);$j++){?>
                                        <li><a href="<?php echo base_url($arr_menu[$i][$j]->menu_link);?>"><?php echo $arr_menu[$i][$j]->nama_menu;?></a></li><?php
                                    }?>
                                </ul>
                            </li><?php
                        }
                    }?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>