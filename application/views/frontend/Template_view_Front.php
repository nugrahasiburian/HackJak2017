<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $css_template;?>
    <style>
    /******************GENERAL STYLE *********************/
    body{
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
    }
	
	/*Style Text Size*/
	p{
		font-size:15px;
		line-height:23px;
	}
	.small_font_size_p{
		font-size:13px;
	}
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
	blockquote h2{
		font-size:15px;
	}
	/* Style Text Position */
	.text_center{
		text-align:center;
	}
	.padding_vertical_20{
		padding:20px 0px;
	}
	
	.padding_top_20px{
		padding-top:20px;
	}
	.padding_top_30px{
		padding-top:30px;
	}
	
	/*Style font color */
	.my_font_red{
		color:#CC3300;
	}
	.my_font_white{
		color:white;
	}
	.my_font_grey{
		color:#999999;
	}
	.my_font_black{
		color:black;
	}
	a.remove_decoration{
		color:black;
		text-decoration:none;
	}
	
	/*Style Background color*/
	.my_background_grey{
		background-color:#EBEBEB;
	}
	.my_background_white{
		background-color:white;
	}
	.my_background_black{
		background-color:#333333;
	}
	
	/*Style Others*/
    .line-heading-1{
        width:100px;height:5px;background-color:#CC0000;
    }
    .line-heading-2{
        width:100%;height:2px;background-color:#E4E4E4;margin-bottom:10px;
    }
	.line-heading-3{
        width:100%;height:2px;background-color:#666666;margin-bottom:10px;
    }
	.line-heading-4{
        width:100%;height:2px;background-color:white;margin-bottom:10px;
    }
	
	/* Style Thumbnail*/
	.row{
		margin:auto;
	}
	.row.thumbnail{
		margin:1% 0;
	}
	.row.thumbnail{
		padding:0px;
	}
	.row.thumbnail img{
		width:100%;
		height:100%;
	}
	/******* STyle Table *******/
	.table_same_height{
	  	display: table;
	  	border-collapse: separate;
	 	border-spacing: 20px 0px;
	}
	.row_same_height{
		display:table-row;
	}
	.cell_same_height{
	  display:table-cell;
	  padding-left:5px;
	  width:20%;
	  border-bottom:solid 1px #999999;
	  border-right:solid 1px #999999;
	}
	table tr td{
		line-height:15px;
		vertical-align: top;
  		text-align: left;
	}
	table{
		margin-bottom:20px;
	}
</style>
</head>
<body id="template_footer">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.9";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="header">
		<?php echo $menu;?>
    </div>
    <div id="body">
		<?php echo $body;?>
   	</div>
    <div id="footer">
		<?php echo $footer;?>
    </div>
</body>
</html>