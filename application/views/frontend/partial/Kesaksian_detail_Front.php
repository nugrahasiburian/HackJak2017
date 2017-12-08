<style>
	/********** STYLE DETAIL KESAKSIAN *********/
	#kesaksian_detail .container{
		max-width:750px;
	}
	#kesaksian_detail .container .cover_image img{
		width:100%;
		max-height:400px;
	}
	
	/********** STYLE MORE RESOURCE KESAKSIAN *********/
	#kesaksian_more_resources .container{
		max-width:750px;
	}
	#kesaksian_more_resources .row.thumbnail .thumbnail_image{
		float:left;
	}
	#kesaksian_more_resources .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#kesaksian_more_resources .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#kesaksian_more_resources .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#kesaksian_more_resources .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#kesaksian_more_resources .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#kesaksian_more_resources .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#kesaksian_more_resources .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#kesaksian_more_resources .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#kesaksian_more_resources .content_preview{
			display:none;
		}
	}
	.fb-like, .fb-like span, .fb-like.fb_iframe_widget span iframe {
		width: 100% !important;
	}
</style>

<div id="kesaksian_detail">
    <div class="container"><?php
        foreach ($kesaksian_detail as $kesaksian_detail){?>
            <div class="small_font_size_p text_center padding_top_30px"><?php
                echo strtoupper(getDayHuruf($kesaksian_detail->times).", ".getDayAngka($kesaksian_detail->times)." ".getMonth($kesaksian_detail->times)." ".getYear($kesaksian_detail->times));?>
            </div>
            <div class="my_h1 text_center"><?php
                echo $kesaksian_detail->title;?>
            </div>
            
            <div class="cover_image"><img src="<?php echo $kesaksian_detail->cover_image;?>" alt="Cover Image" width="100%" height="100%"></div>
            <div class="author padding_vertical_20">
                <b>Article by </b><?php echo $kesaksian_detail->author;?>
            </div>
            <div class="body"><?php
                echo $kesaksian_detail->content;?>
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
<div id="kesaksian_more_resources" class="my_background_grey">
    <div class="container">
        <span class="my_h4">Kesaksian Lainnya</span>
        <div class="row"><?php
            foreach ($kesaksian_more_resources as $kesaksian_more_resources){?>
            	<a class="remove_decoration" href="<?php echo base_url()."kesaksian/".$kesaksian_more_resources->id."/".getstringLowerDashed($kesaksian_more_resources->title);?>">
                    <div class="row thumbnail">
                        <div class="thumbnail_image"><?php
                            if($kesaksian_more_resources->cover_image != ""){
                                echo $kesaksian_more_resources->cover_image;
                            }else{?>
                                <img alt="no_image" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                            }?>
                        </div>
                        <div class="thumbnail_text">
                            <div class="time"><?php echo getDayHuruf($kesaksian_more_resources->times).", ".getDayAngka($kesaksian_more_resources->times)." ".getMonth($kesaksian_more_resources->times)." ".getYear($kesaksian_more_resources->times);?></div>
                            <div class="title my_font_red"><b><?php echo strtoupper($kesaksian_more_resources->title);?></b></div>
                            <div class="content_preview"><p><?php echo strip_tags($kesaksian_more_resources->content);?></p></div>
                        </div>
                    </div>
				</a><?php
            }?>
        </div>
    </div>
</div>