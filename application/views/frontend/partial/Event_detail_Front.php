<style>
	/********** STYLE DETAIL EVENT *********/
	#event_detail .container{
		max-width:750px;
	}
	#event_detail{
		padding-top:30px;
	}
	#event_detail .container .cover_image img{
		width:100%;
		max-height:400px;
	}
	#event_detail .container .body{
		padding:10px 0;
	}
	
	/********** STYLE MORE RESOURCE EVENT *********/
	#event_more_resources .container{
		max-width:750px;
	}
	#event_more_resources .row.thumbnail .thumbnail_image{
		float:left;
	}
	#event_more_resources .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#event_more_resources .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#event_more_resources .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#event_more_resources .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#event_more_resources .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#event_more_resources .row.thumbnail .thumbnail_image{
			width:150px;
			height:130px;
		}
		#event_more_resources .row.thumbnail .thumbnail_text{
			max-height:125px;
		}
	}
	@media screen and (max-width:650px){
		#event_more_resources .row.thumbnail .thumbnail_image{
			display:none;
		}
		#event_more_resources .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
	}
	.fb-like, .fb-like span, .fb-like.fb_iframe_widget span iframe {
		width: 100% !important;
	}
</style>

<div id="event_detail">
    <div class="container"><?php
        for($i=0;$i<sizeof($event_detail);$i++){?>
        	<div class="text_center"><span class="my_h1"><?php echo $event_detail[$i]['nama_jenis_event'];?></span><br /><span class="my_h3"><?php echo "Area : ".$event_detail[$i]['nama_area'];?></span></div>
            <div class="cover_image"><img src="<?php echo $event_detail[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></div>
            <div class="body"><?php
				$startDatetime = $event_detail[$i]['start_date'];
				$endDatetime = $event_detail[$i]['end_date'];
				
				$jamStart = getJam($startDatetime).":".getMenit($startDatetime);
				$hariStart = getDayHuruf($startDatetime);
				$tanggalStart = getDayAngka($startDatetime)." ".getMonth($startDatetime)." ".getYear($startDatetime);
				$jamEnd= getJam($endDatetime).":".getMenit($endDatetime);
				$hariEnd = getDayHuruf($endDatetime);
				$tanggalEnd = getDayAngka($endDatetime)." ".getMonth($endDatetime)." ".getYear($endDatetime);
				if($tanggalStart == $tanggalEnd){
					$waktu = $hariStart.", ".$tanggalStart."<br>pkl.".$jamStart."-".$jamEnd;
				}else{
					$waktu = $hariStart.", ".$tanggalStart." pkl.".$jamStart." s/d<br>".$hariEnd.", ".$tanggalEnd." pkl.".$jamEnd;
				}?>
				<table>
					<tr><td>Tema</td><td>:</td><td><?php echo $event_detail[$i]['title'];?></td></tr>
                    <tr><td>Waktu</td><td> : </td><td><?php echo $waktu;?></td></tr>
                    <tr><td>Lokasi</td><td>:</td><td><?php echo $event_detail[$i]['lokasi'];?></td></tr>
                    <tr><td colspan="3"><?php echo $event_detail[$i]['keterangan'];?></td></tr>
              	</table>
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
<div id="event_more_resources" class="my_background_grey">
    <div class="container">
        <span class="my_h4">Kegiatan Lainnya</span>
        <div class="row"><?php
            for($i=0;$i<sizeof($event_more_resources);$i++){?>
            	<a class="remove_decoration" href="<?php echo base_url()."event/".$event_more_resources[$i]['id']."/".getstringLowerDashed($event_more_resources[$i]['title']);?>">
                    <div class="row thumbnail">
                        <div class="thumbnail_image"><?php
                            if($event_more_resources[$i]['cover_image'] != ""){?>
                            	<img src="<?php echo $event_more_resources[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
                            }else{?>
                                <img alt="no_image" src="<?php echo base_url().'images/no_image.jpg';?>" /><?php
                            }?>
                        </div>
                        <div class="thumbnail_text">
                            <div class="title my_font_red"><b><?php echo strtoupper($event_more_resources[$i]['nama_jenis_event']);?></b></div>
                            <div class="content_preview"><p><?php
								$startDatetime = $event_more_resources[$i]['start_date'];
								$endDatetime = $event_more_resources[$i]['end_date'];
								
								$jamStart = getJam($startDatetime).":".getMenit($startDatetime);
								$hariStart = getDayHuruf($startDatetime);
								$tanggalStart = getDayAngka($startDatetime)." ".getMonth($startDatetime)." ".getYear($startDatetime);
								$jamEnd= getJam($endDatetime).":".getMenit($endDatetime);
								$hariEnd = getDayHuruf($endDatetime);
								$tanggalEnd = getDayAngka($endDatetime)." ".getMonth($endDatetime)." ".getYear($endDatetime);
								if($tanggalStart == $tanggalEnd){
									$waktu = $hariStart.", ".$tanggalStart." pkl.".$jamStart."-".$jamEnd;
								}else{
									$waktu = $hariStart.", ".$tanggalStart." pkl.".$jamStart." s/d<br>".$hariEnd.", ".$tanggalEnd." pkl.".$jamEnd;
								}?>
								<table>
									<tr><td>Area</td><td>:</td><td><?php echo $event_more_resources[$i]['nama_area'];?></td></tr>
                                    <tr><td>Tema</td><td>:</td><td><?php echo $event_more_resources[$i]['title'];?></td></tr>
									<tr><td>Waktu</td><td> : </td><td><?php echo $waktu;?></td></tr>
									<tr><td>Lokasi</td><td>:</td><td><?php echo $event_more_resources[$i]['lokasi'];?></td></tr>
								</table>
                            </p></div>
                        </div>
                    </div>
				</a><?php
            }?>
        </div>
    </div>
</div>