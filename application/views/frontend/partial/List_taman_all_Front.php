<style>
	/***************** STYLE LIST TAMAN ALL ***********/
	#list_taman_all .row.thumbnail .thumbnail_image{
		float:left;
	}
	#list_taman_all .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#list_taman_all .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#list_taman_all .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#list_taman_all .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#list_taman_all .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#list_taman_all .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#list_taman_all .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#list_taman_all .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#list_taman_all .content_preview{
			display:none;
		}
	}
</style>
<div id="list_taman_all" class="my_background_white">
	<div class="container">
        <p class="my_h3 padding_top_20px"><a class="remove_decoration" href="<?php echo base_url()."list-taman";?>">LIST TAMAN</a></p>
        <div class="row"><?php
			if(empty($list_taman)){
				echo "Tidak ada List_taman";
			}else{
				for($i=0;$i<sizeof($list_taman);$i++){?>
					<a class="remove_decoration" href="<?php echo base_url()."list-taman/".$list_taman[$i]['id']."/".getstringLowerDashed($list_taman[$i]['nama_taman']);?>">
                        <div class="row thumbnail">
                            <div class="thumbnail_text">
                                <div class="title my_font_red"><b><?php echo strtoupper($list_taman[$i]['nama_taman']);?></b></div>
                                <div class="content_preview"><p>
									<?php echo "Lokasi : ".strip_tags($list_taman[$i]['nama_kelurahan']).", ".strip_tags($list_taman[$i]['nama_kecamatan']).", ".strip_tags($list_taman[$i]['nama_kabupaten']);?>
                                </p></div>
                            </div>
                        </div>
					</a><?php
				}
			}?>
        </div>
    </div>
</div>