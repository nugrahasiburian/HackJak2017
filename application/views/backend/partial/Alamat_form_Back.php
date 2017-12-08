<style>
	#alamat_edit .cover_image {
		width: 350px;
		height: 250px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#alamat_edit .cover_image img {
		width:100%;
		height:100%;
	}
	#alamat_edit .jam.col-md-1{
		width:120px;
	}
	#alamat_edit .tanggal.col-md-2{
		width:180px;
	}
</style>

<?php 
	$type_new_or_edit = $this->uri->segment(3);
	$category = $this->uri->segment(2);
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	if(isset($_SESSION['is_success_operation_to_sql'])){
		$myVar = $_SESSION['is_success_operation_to_sql'];
		if($myVar == "success_update"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> diedit.</div>";
		}
		unset($_SESSION['is_success_operation_to_sql']);
	}
?>

<div id="alamat_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tulis Alamat Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Alamat";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/alamat-sekre/".$type_new_or_edit."/save";?>" method="post" >
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
                        <label for="alamat" class="col-md-2">Alamat : </label>
                        <div class=" col-md-4">
                            <textarea name="alamat" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['alamat'];}?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-md-2">No.HP : </label>
                        <div class=" col-md-4">
                            <input name="no_hp" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['no_hp'];}?>">
                        </div>
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