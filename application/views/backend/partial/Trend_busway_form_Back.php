<style>
	#trend_busway .nav li a{
		color:black;
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
<div id="trend_busway">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah Menu Trend Busway";}elseif($type_new_or_edit=="edit"){ echo "Edit Trend Busway";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/trend_busway/".$type_new_or_edit."/save";?>" method="post" onclick="changeUniqueSelect();" onsubmit="enabledAllUniqueSelect()">
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){ echo $selected_submenu_detail[0]['id'];}?>" /><?php
                    if($type_new_or_edit=="create-new"){
						$batas_atas = sizeof($urutan_trend_busway)+1;
					}else{
						$batas_atas = sizeof($urutan_trend_busway);
					}?>
                    <input type="hidden" name="batas_atas" value="<?php echo $batas_atas;?>" />
                    <div class="form-group row">
                        <label for="judul" class="col-md-2">Judul : </label>
                        <div class="col-md-3">
                            <input id="<?php if($type_new_or_edit=="edit"){ echo $selected_submenu_detail[0]['id'];}?>" type="text" class="form-control " name="judul" value="<?php if($type_new_or_edit=="edit"){echo $selected_submenu_detail[0]['name'];}?>" onchange="change_MenuBaru(this)"/>
                        </div>                           
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-md-12">Isi : </label>
                        <div>
                            <textarea name="isi" id="textarea_ckeditor"><?php if($type_new_or_edit=="edit"){ echo $selected_submenu_detail[0]['content'];}?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="urutan" class="col-md-12">Urutan : </label>
                    	<div>
                            <table class="table table-striped">
                            	<tr><th>Urutan</th><th>Trend Busway</th></tr><?php
								for($urutan=1;$urutan<=$batas_atas;$urutan++){?>
                            		<tr><td><?php echo $urutan;?></td>
                                    <td>
                                    	<select name="select_<?php echo $urutan;?>" onchange="changeUniqueSelect()">
											<option value="<?php echo "opsi_".$urutan;?>"></option><?php
											for($select=0;$select<sizeof($urutan_trend_busway);$select++){?>
                                        		<option value="<?php echo $urutan_trend_busway[$select]['id'];?>" <?php if($urutan_trend_busway[$select]['urutan']==$urutan){echo "selected";}?>>
													<?php echo $urutan_trend_busway[$select]['name'];?>
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
                   	</div>
                    <input type="submit" value="Submit" />
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