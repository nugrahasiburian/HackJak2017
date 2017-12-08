<style>
	/***************** STYLE PENGAJARAN ***********/
	#pengajaran_all .row.thumbnail .thumbnail_image{
		float:left;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#pengajaran_all .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#pengajaran_all .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#pengajaran_all .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#pengajaran_all .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#pengajaran_all .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#pengajaran_all .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#pengajaran_all .content_preview{
			display:none;
		}
	}
</style>
<div id="pengajaran_all" class="my_background_white">
	<div class="container">
        <p class="my_h3 padding_top_20px"><a class="remove_decoration" href="<?php echo base_url()."pengajaran";?>">EVENT</a></p>
        <span><?php echo getMonthToBulan($month)." ".$year;?></span>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
       	<div class="search_box">
            <div class="form-group row">
                <form id="datepicker_form" method="post" action="<?php echo base_url()."pengajaran";?>" class="col-md-4 col-sm-6">
                    <input type="text" name="date_search_box" class="form-control datepicker_month_year" placeholder="Pilih Bulan Penyelenggaraan" readonly="readonly">
                </form>
            </div>
       	</div>
        <div class="row"><?php
			if(empty($pengajaran_based_on_month)){
				echo "Tidak ada Event";
			}else{
				for($i=0;$i<sizeof($pengajaran_based_on_month);$i++){?>
					<a class="remove_decoration" href="<?php echo base_url()."pengajaran/".$pengajaran_based_on_month[$i]['id']."/".getstringLowerDashed($pengajaran_based_on_month[$i]['nama_event']);?>">
                        <div class="row thumbnail">
                            <div class="thumbnail_image"><?php
                                if($pengajaran_based_on_month[$i]['cover_image'] != ""){?>
                                <img src="<?php echo $pengajaran_based_on_month[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
                                }else{?>
                                    <img alt="no_image" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                                }?>
                            </div>
                            <div class="thumbnail_text">
                                <div class="time"><?php echo $pengajaran_based_on_month[$i]['waktu_pelaksanaan'];?></div>
                                <div class="title my_font_red"><b><?php echo strtoupper($pengajaran_based_on_month[$i]['nama_event']);?></b></div>
                                <div class="content_preview"><p><?php echo strip_tags($pengajaran_based_on_month[$i]['keterangan']);?></p></div>
                            </div>
                        </div>
					</a><?php
				}
			}?>
        </div>
    </div>
</div>