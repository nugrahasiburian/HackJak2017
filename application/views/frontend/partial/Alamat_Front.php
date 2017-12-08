<style>
	/************* STYLE ALAMAT ***************/
	.nav li a{
		padding-bottom:0px;
		padding-left:0px;
		padding-right:0px;
		margin:10px 7px;
	}
	#alamat .container #list_of_alamat .nav li a:hover, #alamat .container #list_of_alamat .tab-content .nav li a:hover{
		background-color:transparent;
		border:solid 1px transparent;
	}
	#alamat .container #list_of_alamat .nav li.active a, #alamat .container #list_of_alamat .tab-content .nav li.active a{
		background-color:transparent;
		border:solid 1px transparent;
		border-bottom:solid 1px #CC3300;
		color:#CC3300;
	}
	
	@media screen and (min-width:1000px){
		#alamat .alamat_text{
			padding-top:20px;
		}
		#alamat .container #list_of_alamat .tab-content>div{
			min-height:100px;
		}
	}
	@media screen and (min-width:610px) and (max-width:999px){
		#alamat .container #list_of_alamat .tab-content{
			padding-top:20px;
		}
		#alamat .container #list_of_alamat .tab-content>div{
			min-height:400px;
		}
		
	}
	@media screen and (max-width:611px){
		#alamat .container #list_of_alamat .tab-content>div{
			min-height:400px;
		}
	}
</style>

<div id="alamat"class="my_background_white">
    <div class="container">
    	<div id="list_of_alamat">
            <p class="my_h3 padding_top_20px"><a href="<?php echo base_url()."event";?>">ALAMAT SEKRETARIAT SION DI SELURUH INDONESIA</a></p>
            <div class="line-heading-1"></div>
            <div class="line-heading-2"></div>
            <ul class="nav nav-tabs"><?php
				for($i=0;$i<sizeof($pulau_indonesia);$i++){
					if($pulau_indonesia[$i]['urutan']>0 || $pulau_indonesia[$i]['urutan']==-1){?>
                        <li class="<?php if($pulau_indonesia[$i]['urutan']==-1){echo "active";}?>">
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
                                        <div id="<?php echo $kota_kota[$j]['id'];?>" class="tab-pane fade <?php if($cElementKotaFound==0){echo "in active";}?>">
                                            <div class="row alamat_text"><?php
                                                for($l=0;$l<sizeof($alamat_sekre);$l++){
                                                    if($alamat_sekre[$l]['id_kota']==$kota_kota[$j]['id']){?>
                                                        <div class="row col-md-3">
                                                            <table class="small_font_size_p">
                                                                <tr class="bold my_font_grey"><td>Area</td><td>:</td><td><?php echo $alamat_sekre[$l]['nama_area'];?></td></tr>
                                                                <tr><td>Alamat</td><td>:</td><td><?php echo $alamat_sekre[$l]['alamat'];?></td></tr>
                                                                <tr><td>No.HP</td><td>:</td><td><?php echo $alamat_sekre[$l]['no_hp'];?></td></tr>
                                                            </table>
                                                        </div><?php
                                                    }
                                                }?>
                                            </div>
                                        </div><?php
                                        $cElementKotaFound++;
                                    }
                                }?>
                            </div><?php
						}else{?>
							<div class="row alamat_text"><?php
								for($l=0;$l<sizeof($alamat_sekre);$l++){
									if($alamat_sekre[$l]['id_kota']==-1){?>
										<div class="row col-md-3">
											<table class="small_font_size_p">
												<tr class="bold my_font_grey"><td>Area</td><td>:</td><td><?php echo $alamat_sekre[$l]['nama_area'];?></td></tr>
												<tr><td>Alamat</td><td>:</td><td><?php echo $alamat_sekre[$l]['alamat'];?></td></tr>
												<tr><td>No.HP</td><td>:</td><td><?php echo $alamat_sekre[$l]['no_hp'];?></td></tr>
											</table>
										</div><?php
									}
								}?>
							</div><?php
						}?>
					</div><?php
				}?>
            </div>
       	</div>
   	</div>
</div>