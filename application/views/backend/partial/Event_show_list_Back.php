<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
	
	#event_show_list_back .panel-group .panel .panel-body #create_new_button{
		float:left;
		width:30%;
	}
	#event_show_list_back .panel-group .panel .panel-body #search_box{
		float:right;
		width:30%;
	}
	
	@media screen and (max-width:600px){
		#event_show_list_back .panel-group .panel .panel-body #search_box{
			width:210px;
		}
	}
	@media screen and (max-width: 800px) {
		#event_show_list_back thead th#_0, #event_show_list_back thead th#_2, #event_show_list_back tbody td#_0, #event_show_list_back tbody td#_2 {
			display:none;
		}
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Cover Image","Kegiatan","Keterangan",""];
	$arr_thead_width = ["25%","30%","30%","15%"];
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	if(isset($_SESSION['is_success_operation_to_sql'])){
		$myVar = $_SESSION['is_success_operation_to_sql'];
		if($myVar == "success_insert"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> disimpan.</div>";
		}elseif($myVar == "success_delete"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> dihapus.</div>";
		}
		unset($_SESSION['is_success_operation_to_sql']);
	}
?>
<div id="event_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span><br />
                &emsp;&emsp;<span><?php echo getMonthToBulan($month)." ".$year;?></span>
            </div>
            <div class="panel-body">
                <a id="create_new_button" href="<?php echo base_url()."admin/event/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <div id="search_box">
                    <form id="myForm" method="post" action="<?php echo base_url()."admin/event";?>" class="col-md-12 col-sm-12 col-xs-12">
                        <select name="id_kota_select_box" class="form-control id_kota_select_box" onchange="submitForm('myForm')">
                        	<option value="">Nama Kota</option><?php
							for($i=0;$i<sizeof($list_of_kota);$i++){?>
								<option value="<?php echo $list_of_kota[$i]['id'];?>" <?php if($list_of_kota[$i]['id']==$id_kota_select_box){echo "selected";}?>>
									<?php echo $list_of_kota[$i]['nama_kota'];?>
                              	</option><?php
							}?>
                        </select>
                        <select name="jenis_event_select_box" class="form-control jenis_event_select_box" onchange="submitForm('myForm')">
                        	<option value="">Jenis Kegiatan</option><?php
							for($i=0;$i<sizeof($list_of_jenis_event);$i++){?>
								<option value="<?php echo $list_of_jenis_event[$i]['id'];?>" <?php if($list_of_jenis_event[$i]['id']==$jenis_event_select_box){echo "selected";}?>>
									<?php echo $list_of_jenis_event[$i]['nama_jenis_event'];?>
                              	</option><?php
							}?>
                        </select>
                   		<input type="text" name="date_search_box" class="form-control datepicker_month_year" onchange="submitForm('myForm')" placeholder="Kegiatan di Bulan" readonly="readonly">
                    </form>
                </div>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_event_content);$i++){?>
                            <tr>
                                <td id="_0"><img src="<?php echo $all_event_content[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></td>
                                <td id="_1"><?php echo $all_event_content[$i]['title'];?><br>
                                    <?php
									$startDatetime = $all_event_content[$i]['start_date'];
									$endDatetime = $all_event_content[$i]['end_date'];
									
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
                                        <tr><td><?php echo $waktu;?></td></tr>
                                        <tr><td><?php echo $all_event_content[$i]['lokasi'];?></td></tr>
                                  	</table>
                                </td>
                                <td id="_2"><?php echo setContentAdjustToHeight($all_event_content[$i]['keterangan'],200);?></td>
                                <td>
                                    <a href="<?php echo base_url()."admin/event/edit/".$all_event_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/event/delete/".$all_event_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>