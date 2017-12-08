<style>
	/********** STYLE DETAIL PENGAJARAN *********/
	#pengajaran_detail p, #pengajaran_detail h2{
		font-size:18px;
		line-height:30px;
		margin:20px 0;
	}
	#pengajaran_detail .container{
		max-width:750px;
	}
	#pengajaran_detail .container .cover_image img{
		width:100%;
		max-height:400px;
	}
	
	/********** STYLE MORE RESOURCE PENGAJARAN *********/
	#pengajaran_more_resources .container{
		max-width:750px;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_image{
		float:left;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#pengajaran_more_resources .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#pengajaran_more_resources .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#pengajaran_more_resources .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#pengajaran_more_resources .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#pengajaran_more_resources .content_preview{
			display:none;
		}
	}
	.fb-like, .fb-like span, .fb-like.fb_iframe_widget span iframe {
		width: 100% !important;
	}
</style>

<div id="pengajaran_detail">
    <div class="container"><?php
        for($i=0;$i<sizeof($pengajaran_detail);$i++){?>
            <div class="small_font_size_p text_center padding_top_30px"><?php
                echo strtoupper(getDayHuruf($pengajaran_detail[$i]['times']).", ".getDayAngka($pengajaran_detail[$i]['times'])." ".getMonth($pengajaran_detail[$i]['times'])." ".getYear($pengajaran_detail[$i]['times']));?>
            </div>
            <div class="my_h1 text_center"><?php
                echo $pengajaran_detail[$i]['title'];?>
            </div>
            
            <div class="cover_image"><img src="<?php echo $pengajaran_detail[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></div>
            <div class="author padding_vertical_20">
                <b>Article by </b><?php echo $pengajaran_detail[$i]['author'];?>
            </div>
            <div class="p_content_detail"><?php
                echo $pengajaran_detail[$i]['content'];?>
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
<div id="pengajaran_more_resources" class="my_background_grey">
    <div class="container">
        <span class="my_h4">Pengajaran Lainnya</span>
        <div class="row"><?php
            for ($i=0;$i<sizeof($pengajaran_more_resources);$i++){?>
                <a class="remove_decoration" href="<?php echo base_url()."pengajaran/".$pengajaran_more_resources[$i]['id']."/".getstringLowerDashed($pengajaran_more_resources[$i]['title']);?>">
                    <div class="row thumbnail">
                        <div class="thumbnail_image"><?php
                            if($pengajaran_more_resources[$i]['cover_image'] != ""){?>
                            	<img src="<?php echo $pengajaran_more_resources[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
                            }else{?>
                                <img src="<?php echo base_url().'images/no_image.jpg';?>" alt="no_image" /><?php
                            }?>
                        </div>
                        <div class="thumbnail_text">
                            <div class="time"><?php echo getDayHuruf($pengajaran_more_resources[$i]['times']).", ".getDayAngka($pengajaran_more_resources[$i]['times'])." ".getMonth($pengajaran_more_resources[$i]['times'])." ".getYear($pengajaran_more_resources[$i]['times']);?></div>
                            <div class="title my_font_red"><b><?php echo strtoupper($pengajaran_more_resources[$i]['title']);?></b></div>
                            <div class="content_preview"><p><?php echo strip_tags($pengajaran_more_resources[$i]['content']);?></p></div>
                        </div>
                    </div>
				</a><?php
            }?>
        </div>
    </div>
</div>