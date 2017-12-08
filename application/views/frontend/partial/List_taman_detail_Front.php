<style>
	/********** STYLE DETAIL TAMAN DETAIL *********/
	#list_taman_detail p, #list_taman_detail h2{
		font-size:18px;
		line-height:20px;
		margin:20px 0;
	}
	#list_taman_detail .container{
		max-width:750px;
	}
	#list_taman_detail .container .cover_image img{
		width:100%;
		max-height:400px;
	}
	
	.fb-like, .fb-like span, .fb-like.fb_iframe_widget span iframe {
		width: 100% !important;
	}
</style>

<div id="list_taman_detail">
    <div class="container"><?php
        for($i=0;$i<sizeof($list_taman_detail);$i++){?>
            <div class="my_h1 text_center"><?php
                echo $list_taman_detail[$i]['nama_taman'];?>
            </div>
            
            <div class="cover_image"><img src="<?php echo $list_taman_detail[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></div>
            <div class="p_content_detail"><?php
                echo $list_taman_detail[$i]['infrastruktur'];?>
            </div><?php
        	$uri = "http://www.".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			?>
            <div class="fb-like" data-href=<?php echo $uri;?>" data-layout="standard" data-action="like" data-size="large" data-show-faces="true" data-share="true" data-adapt-container-width="true"></div>
            <a href="https://twitter.com/home?status=<?php echo $uri;?>">
				<img src="https://goo.gl/images/zjRGwl" alt="Twitter Logo" width="150" height="41" />
			</a><?php
        }?>
    </div>
</div>