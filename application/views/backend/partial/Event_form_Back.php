<style>
	#event_edit .cover_image {
		width: 350px;
		height: 250px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#event_edit .cover_image img {
		width:100%;
		height:100%;
	}
	#event_edit .jam.col-md-1{
		width:120px;
	}
	#event_edit .tanggal.col-md-2{
		width:180px;
	}
</style>

<?php 
	$type_new_or_edit = $this->uri->segment(3);
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	if(isset($_SESSION['is_success_operation_to_sql'])){
		$myVar = $_SESSION['is_success_operation_to_sql'];
		if($myVar == "success_update"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> diedit.</div>";
		}
		unset($_SESSION['is_success_operation_to_sql']);
	}
?>

<div id="event_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create_new"){ echo "Tulis Event Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Event";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/event/".$type_new_or_edit."/save";?>" method="post" >
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label class="col-md-2">Kota : </label>
                        <div class=" col-md-4">
                        <select name="id_kota" class="form-control" onchange="change_Kota(this)">
							<option value="">=======Pilih Kota=======</option><?php
                            for($i=0;$i<sizeof($list_of_kota);$i++){?>
                                <option value="<?php echo $list_of_kota[$i]['id'];?>" <?php if($type_new_or_edit=="edit"){if($list_of_kota[$i]['id']==$selected_content_detail[0]['id_kota']){echo "selected";}}?>>
                                    <?php echo $list_of_kota[$i]['nama_kota'];?>
                                </option><?php
                            }?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="judul" class="col-md-2">Area : </label>
                        <div class=" col-md-4">
                            <select name="id_area" id="select_area" class="form-control" onchange="changeArea(this);">
                                <option value="">=======Pilih Area=======</option><?php
                                for($i=0;$i<sizeof($list_of_area);$i++){
									if($selected_content_detail[0]['id_kota']==$list_of_area[$i]['id_kota']){?>
                                        <option value="<?php echo $list_of_area[$i]['id'];?>" <?php if($type_new_or_edit=="edit"){if($list_of_area[$i]['id']==$selected_content_detail[0]['id_area']){echo "selected";}}?>>
                                            <?php echo $list_of_area[$i]['nama_area'];?>
                                        </option><?php
									}
                                }?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">Jenis Event : </label>
                        <div class=" col-md-5">
                            <select name="id_jenis_event" class="form-control">
								<option value="">=======Pilih Event=======</option><?php
                                for($i=0;$i<sizeof($list_of_jenis_event);$i++){?>
                                    <option value="<?php echo $list_of_jenis_event[$i]['id'];?>" <?php if($type_new_or_edit=="edit"){if($list_of_jenis_event[$i]['id']==$selected_content_detail[0]['id_jenis_event']){echo "selected";}}?>>
                                        <?php echo $list_of_jenis_event[$i]['nama_jenis_event'];?>
                                    </option><?php
                                }?>
                            </select>
                      	</div>
                    </div>
                    
                    <div class="form-group row">
                            <label for="cover_image" class="col-md-2">Cover Image : </label>
                            <div class="col-md-6">
                                <div class="cover_image" onclick="openKCFinder(this)"><?php if($type_new_or_edit=="edit"){?> 
                           			<img src="<?php echo $selected_content_detail[0]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
								}?>
                                <div style="margin:5px">Click here to choose an image</div></div>
                                <input type="hidden" name="cover_image" id="cover_image_input" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['cover_image'];}?>' />
                            </div>  
                            <div class="col-md-2">                     
                            	<button class="btn btn-default" id="cover_image" onclick="resetGambarKCFinder(this)">Hapus Gambar</button>
                           	</div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-md-2">Tema : </label>
                            <div class=" col-md-8">
                            	<textarea name="tema" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['title'];}?></textarea>
                          	</div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-md-2">Waktu : </label>
                            <div class="jam col-md-1">
                                <select name="startJam" class="form-control" onchange="changeJam(this)">
									<option value="">__:__</option><?php
                                    for($i=5;$i<=21;$i+=1){
                                        for($j=0;$j<=30;$j+=30){
                                            $jam_menit = sprintf("%02d", $i).":".sprintf("%02d", $j);
											$jam_menit_selected = getJam($selected_content_detail[0]['start_date']).":".getMenit($selected_content_detail[0]['start_date']);?>
                                            <option value="<?php echo $jam_menit;?>" <?php if($jam_menit==$jam_menit_selected){echo "selected";}?>><?php echo $jam_menit;?></option><?php
                                        }
                                    }?>
                                </select>
                          	</div>
                            <div class="tanggal col-md-2"><?php
								if($type_new_or_edit=="edit"){
									$dd_MM_yyyy_selected = getDayAngka($selected_content_detail[0]['start_date'])."/".getMonth_English($selected_content_detail[0]['start_date'])."/".getYear($selected_content_detail[0]['start_date']);
								}?>
                                
                                <input type="text" name="startTanggal" value="<?php if($type_new_or_edit=="edit"){echo $dd_MM_yyyy_selected;}?>" class="form-control datepicker_day_month_year" readonly="readonly"/>
                           	</div>
                            
                            <p class="col-md-1">s/d</p>
                            <div class="jam col-md-1">
                                <select name="endJam" class="form-control" id="endJam">
									<option value="">__:__</option><?php
                                    for($i=5;$i<=21;$i+=1){
                                        for($j=0;$j<=30;$j+=30){
                                            $jam_menit = sprintf("%02d", $i).":".sprintf("%02d", $j);
											$jam_menit_selected = getJam($selected_content_detail[0]['end_date']).":".getMenit($selected_content_detail[0]['end_date']);?>
                                            <option value="<?php echo $jam_menit;?>" <?php if($jam_menit==$jam_menit_selected){echo "selected";}?>><?php echo $jam_menit;?></option><?php
                                        }
                                    }?>
                                </select>
                          	</div>
                            <div class="tanggal col-md-2"><?php
								if($type_new_or_edit=="edit"){
									$dd_MM_yyyy_selected = getDayAngka($selected_content_detail[0]['end_date'])."/".getMonth_English($selected_content_detail[0]['end_date'])."/".getYear($selected_content_detail[0]['end_date']);
                                }?>
                                <input type="text" name="endTanggal" value="<?php if($type_new_or_edit=="edit"){echo $dd_MM_yyyy_selected;}?>" class="form-control datepicker_day_month_year" readonly="readonly"/>
                           	</div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi" class="col-md-2">Lokasi : </label>
                            <div class="col-md-8">
                                <input type="text" name="lokasi" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['lokasi'];}?>" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="keterangan" class="col-md-12">Keterangan : </label>
                            <textarea name="keterangan" id="textarea_ckeditor"><?php if($type_new_or_edit=="edit"){ echo $selected_content_detail[0]['keterangan'];}?></textarea>
                        </div>
                        <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>
<script>
	function changeArea(selectedObj){
		window.content.localStorage['val_area'] = selectedObj.value;
	}
	function change_Kota(selectObj){
		var idx_kota = selectObj.selectedIndex;// get the index of the selected option
		var val_kota = selectObj.options[idx_kota].value;// get the value of the selected option
		var list_of_area = <?php echo json_encode($list_of_area); ?>;//ubah array PHP sehingga dapat dimengerti oleh javascript
		
		var cSelect = document.getElementById('select_area');// remove the current options from the item select
		var len=cSelect.options.length;
		while (cSelect.options.length > 0) {
			cSelect.remove(0);
		}
		
		var newOption;
		newOption = document.createElement("option");
		newOption.value = "";
		newOption.text = "==== Pilih Area ====";
		try {// add the new option
			cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
		}catch (e) {	
			cSelect.appendChild(newOption);
		}	
		
		for(m=0; m<list_of_area.length; m++){
			newOption = document.createElement("option");
			if(list_of_area[m]["id_kota"] == val_kota){
				newOption.value = list_of_area[m]["id"];
				newOption.text = list_of_area[m]["nama_area"];
				try {// add the new option
					cSelect.add(newOption);  // this will fail in DOM browsers but is needed for IE
				}catch (e) {	
					cSelect.appendChild(newOption);
				}	
			}
		}
		setSelectedValue(cSelect, window.content.localStorage['val_area']);
	}
	function setSelectedValue(selectObj, valueToSet) {
		for (var i = 0; i < selectObj.options.length; i++) {
			if (selectObj.options[i].value == valueToSet) {
				selectObj.options[i].selected = true;
				return;
			}
		}
	}
</script>