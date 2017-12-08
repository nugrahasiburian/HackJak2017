<style>
	/************* STYLE EVENT ***************/
	.nav li a{
		padding-bottom:0px;
		padding-left:0px;
		padding-right:0px;
		margin:10px 7px;
	}
	#event_all .container #list_of_event_on_home .nav li a:hover, #event_all .container #list_of_event_on_home .tab-content .nav li a:hover{
		background-color:transparent;
		border:solid 1px transparent;
	}
	#event_all .container #list_of_event_on_home .nav li.active a, #event_all .container #list_of_event_on_home .tab-content .nav li.active a{
		background-color:transparent;
		color:white;
		border:solid 1px transparent;
		border-bottom:solid 1px white;
	}
	
	@media screen and (min-width:1000px){
		#event_all .container #list_of_event_on_home .tab-content{
			padding-top:20px;
		}
		#event_all .container #list_of_event_on_home .tab-content>div{
			min-height:250px;
		}
	}
	@media screen and (min-width:610px) and (max-width:999px){
		#event_all .container #list_of_event_on_home .tab-content{
			padding-top:20px;
		}
		#event_all .container #list_of_event_on_home .tab-content>div{
			min-height:400px;
		}
		
	}
	@media screen and (max-width:611px){
		#event_all .container #list_of_event_on_home .tab-content>div{
			min-height:400px;
		}
	}
</style>


<div id="event_all"class="my_background_black">
    <div class="container">
    	<div id="list_of_event_on_home">
            <p class="my_h3 padding_top_20px"><a href="<?php echo base_url()."event";?>">EVENT SION</a></p>
            <div class="line-heading-1"></div>
            <div class="line-heading-3"></div>
            <ul class="nav nav-tabs"><?php
				for($i=0;$i<sizeof($pulau_indonesia);$i++){
					if($pulau_indonesia[$i]['urutan']>0 || $pulau_indonesia[$i]['urutan']==0-2){?>
                        <li class="<?php if($pulau_indonesia[$i]['urutan']==0-2){echo "active";}?>">
                            <a data-toggle="tab" href="#pulau<?php echo $pulau_indonesia[$i]['id'];?>"><?php echo $pulau_indonesia[$i]['nama_pulau'];?></a>
                        </li><?php
					}
				}?>
          	</ul>
            <!--Bagian Content Pulau -->
            <div class="tab-content"><?php
				for($i=0;$i<sizeof($pulau_indonesia);$i++){
					$cElementPulauFound = $cElementKotaFound = 0;?>
					<div id="pulau<?php echo $pulau_indonesia[$i]['id'];?>" class="tab-pane fade <?php if($i==0){echo "in active";}?>"><?php
						if($pulau_indonesia[$i]['urutan']>0){?>
                            <ul class="nav nav-tabs"><?php
                                for($j=0;$j<sizeof($kota_kota);$j++){
                                    if($pulau_indonesia[$i]['id']==$kota_kota[$j]['id_pulau']){?>
                                        <li class="<?php if($cElementPulauFound==0){echo "active";}?>">
                                            <a data-toggle="tab" href="#<?php echo $kota_kota[$j]['id'];?>"><?php echo $kota_kota[$j]['nama_kota'];?></a>
                                        </li><?php
                                        $cElementPulauFound++;
                                    }
                                }?>
                            </ul>
                            
                            <!--Bagian Content Kota -->
                            <div class="tab-content"><?php
                                for($j=0;$j<sizeof($kota_kota);$j++){
                                    if($pulau_indonesia[$i]['id']==$kota_kota[$j]['id_pulau']){?>
                                        <div id="<?php echo $kota_kota[$j]['id'];?>" class="tab-pane fade <?php if($cElementKotaFound==0){echo "in active";}?>"><?php
                                        for($k=0;$k<sizeof($jenis_event);$k++){?>
                                            <div class="col-md-3 my_font_white">
                                                <b class="my_font_grey"><?php echo $jenis_event[$k]['nama_jenis_event'];?></b><?php
                                                for($l=0;$l<sizeof($event);$l++){
                                                    if($event[$l]['id_kota']==$kota_kota[$j]['id'] && $event[$l]['id_jenis_event']==$jenis_event[$k]['id']){?>
                                                    	<a href="<?php echo base_url()."event/".$event[$l]['id']."/".getstringLowerDashed($event[$l]['title']);?>" >
                                                            <div class="my_font_white"><?php
                                                                $startDatetime = $event[$l]['start_date'];
                                                                $endDatetime = $event[$l]['end_date'];
                                                                
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
                                                                <table class="small_font_size_p">
                                                                    <tr><td>Area</td><td> : </td><td><?php echo $event[$l]['nama_area'];?></td></tr>
                                                                    <tr><td>Tema</td><td> : </td><td><?php echo $event[$l]['title'];?></td></tr>
                                                                    <tr><td>Waktu</td><td> : </td><td><?php echo $waktu;?></td></tr>
                                                                    <tr><td>Lokasi</td><td> : </td><td><?php echo $event[$l]['lokasi'];?></td></tr>
                                                               	</table>
                                                            </div>
														</a><?php
                                                    }
                                                }?>
                                            </div><?php
                                        }?>
                                        </div><?php
                                        $cElementKotaFound++;
                                    }
                                }?>
                            </div><?php
                        }else{
							for($l=0;$l<sizeof($event);$l++){
								if($event[$l]['id_kota']==0-2){?>
									<a href="<?php echo base_url()."event/".$event[$l]['id']."/".getstringLowerDashed($event[$l]['title']);?>" >
                                        <div class="my_font_white"><?php
                                            $startDatetime = $event[$l]['start_date'];
                                            $endDatetime = $event[$l]['end_date'];
                                            
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
                                            <table class="small_font_size_p">
                                                <tr><td>Tema</td><td> : </td><td><?php echo $event[$l]['title'];?></td></tr>
                                                <tr><td>Waktu</td><td> : </td><td><?php echo $waktu;?></td></tr>
                                                <tr><td>Lokasi</td><td> : </td><td><?php echo $event[$l]['lokasi'];?></td></tr>
                                           </table>
                                        </div>
									</a><?php
								}
							}
						}?>
                   	</div><?php
				}?>
            </div>
       	</div>
   	</div>
</div>