<style>
	#menu_edit .image {
		width: 330px;
		height: 250px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#menu_edit .image img {
		width:100%;
		height:100%;
	}
	.form-group {
		margin:10px 0px;
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

<div id="menu_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah Menu Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Menu";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/menu/".$type_new_or_edit."/save";?>" method="post" onsubmit="enabledAllUniqueSelect()">
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/><?php
                    if($type_new_or_edit=="create-new"){
						$batas_atas_urutan = sizeof($urutan_menu)+1;
					}else{
						$batas_atas_urutan = sizeof($urutan_menu);
					}?>
                    <input type="hidden" name="batas_atas_urutan" value="<?php echo $batas_atas_urutan;?>" />
                    <input type="hidden" name="batas_atas_checkbox_user_type" value="<?php echo sizeof($list_of_user_type);?>" />
                    <div class="form-group row">
                        <label for="nama_menu" class="col-md-2">Nama Menu : </label>
                        <div class=" col-md-4">
                            <textarea name="nama_menu" class="form-control" onchange="change_MenuBaru(this)"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['nama_menu'];}?></textarea>
                        </div>
                    </div><?php
					
					if($selected_content_detail[0]['is_front']=="yes"){?>
                    <div class="form-group row">
                        <label for="cover_image" class="col-md-2">Image :</label>
                        <div class="col-md-6">
                            <div class="image" onclick="openKCFinder(this)"><?php if($type_new_or_edit=="edit"){?>
                                <img src="<?php echo $selected_content_detail[0]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
                                }?>
                                <div style="margin:5px">Click here to choose an image</div>
                            </div>
                            <input type="hidden" name="cover_image" id="image_input" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['cover_image'];}?>' />
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default" id="image" onclick="resetGambarKCFinder(this)">Hapus Gambar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-2">Deskripsi : </label>
                        <div class=" col-md-7">
                            <textarea name="deskripsi" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['deskripsi'];}?></textarea>
                        </div>
                    </div><?php
					}?>
                    
                    <div class="form-group row">
                        <label for="deskripsi" class="col-md-2">Menu Parent : </label>
                        <div class=" col-md-4">
                        	<select name="menu_parent" class="form-control">
                            	<option value=0>Tidak Ada</option><?php
								for($i=0;$i<sizeof($list_of_menu_front);$i++){?>
									<option value="<?php echo $list_of_menu_front[$i]['id'];?>"><?php echo $list_of_menu_front[$i]['nama_menu'];?></option><?php
								}?>
                            </select>
                        </div>
                   	</div>
                    <div class="form-group row">
                        <label for="is_front" class="col-md-2">Does Menu Showed on FrontEnd?</label>
                        <div class=" col-md-2">
                        	<select name="is_front" class="form-control">
                            	<option value=""></option>
                                <option value="yes" <?php if($type_new_or_edit=="edit"){ if($selected_content_detail[0]['is_front']=="yes"){echo "selected";}}?>>Yes</option>
                                <option value="no" <?php if($type_new_or_edit=="edit"){ if($selected_content_detail[0]['is_front']=="no"){echo "selected";}}?>>No</option>
                            </select>
                        </div>
                        <label for="is_back" class="col-md-2">Does Menu Showed on Backend? </label>
                        <div class=" col-md-2">
                        	<select name="is_back" class="form-control">
                            	<option value=""></option>
                                <option value="yes" <?php if($type_new_or_edit=="edit"){ if($selected_content_detail[0]['is_back']=="yes"){echo "selected";}}?>>Yes</option>
                                <option value="no" <?php if($type_new_or_edit=="edit"){ if($selected_content_detail[0]['is_back']=="no"){echo "selected";}}?>>No</option>
                            </select>
                        </div>
                   	</div>
                    <div class="form-group row">
                        <label for="is_front" class="col-md-12">Can Be Accessed By?</label><?php
						$arr_id_user_type = explode(",",$selected_content_detail[0]['id_user_type']);
						for($i=0;$i<sizeof($list_of_user_type);$i++){?>
							<div class=" col-md-2">
								<input type="checkbox" name="user_type_<?php echo $i;?>" value="<?php echo $list_of_user_type[$i]['id'];?>" <?php if(in_array($list_of_user_type[$i]['id'],$arr_id_user_type)){?> checked='checked'<?php }?>/> 
								<?php echo $list_of_user_type[$i]['name_user_type'];?>
							</div><?php
						}?>
                   	</div>
                    <div class="form-group row">
                    	<table class="table table-striped">
                            <tr><th>Urutan</th><th>Nama Menu</th></tr><?php
                            for($urutan=1;$urutan<=$batas_atas_urutan;$urutan++){?>
                                <tr><td><?php echo $urutan;?></td>
                                <td>
                                    <select name="select_<?php echo $urutan;?>" onclick="changeUniqueSelect();">
                                        <option value="<?php echo "opsi_".$urutan;?>"></option><?php
                                        for($select=0;$select<sizeof($urutan_menu);$select++){?>
                                            <option value="<?php echo $urutan_menu[$select]['id'];?>" <?php if($urutan_menu[$select]['urutan']==$urutan){echo "selected";}?>>
                                                <?php echo $urutan_menu[$select]['nama_menu'];?>
                                            </option><?php
                                        }
                                        if($type_new_or_edit=="create-new"){?>
                                            <option class="option_new" value="new"></option><?php
                                        }?>
                                    </select>
                                </td></tr><?php
                            }?>
                        </table>
                   	</div>
                    <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>	
<script>
	function change_MenuBaru(data){
		arr_elemen = document.getElementsByClassName('option_new');
		for($i=0;$i<arr_elemen.length;$i++){
			arr_elemen[$i].innerHTML  = data.value;
		}
	}
</script>