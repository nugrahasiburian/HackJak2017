<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $css_template;?>
</head>
<style>
	.row{
		margin:0px;
		padding:0px;
	}
	@media screen and (max-width: 990px) {
		.col-md-3#template_body_left, .col-md-9#template_body_right{
			padding:0;	
		}
	}
	
	a.remove_decoration{
		color:black;
		text-decoration:none;
	}
	/* Style font size */
	.my_h1{
		font-size:30px;
	}
	.my_h2{
		font-size:26px;
	}
	.my_h3{
		font-size:23px;
	}
	.my_h4{
		font-size:19px;
	}
	.small_font_size_p{
		font-size:13px;
	}
	
	/*Style font color */
	
	.my_font_white{
		color:white;
	}
	.my_font_grey{
		color:#999999;
	}
	table tr td{
		vertical-align: top;
  		text-align: left;
	}
</style>

<body style="visibility: hidden;" onload="js_Load()">
    <div class="" id="template_header">
        <?php echo $header;?>
    </div>
    <div class="row">
        <div id="template_body_left" class="col-md-3">
            <?php echo $menu;?>
        </div>
        <div id="template_body_right" class="col-md-9">
            <?php echo $body;?>
        </div>
    </div>
    <div class="" id="template_footer">
        <?php echo $footer;?>
    </div>
</body>
</html>