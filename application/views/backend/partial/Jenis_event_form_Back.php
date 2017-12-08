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

<div id="jenis_event_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah Jenis Event Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Jenis Event";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/jenis-event/".$type_new_or_edit."/save";?>" method="post" onclick="changeUniqueSelect();" onsubmit="enabledAllUniqueSelect()">
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <?php
                    if($type_new_or_edit=="create-new"){
						$batas_atas = sizeof($urutan_jenis_event)+1;
					}else{
						$batas_atas = sizeof($urutan_jenis_event);
					}?>
                    <input type="hidden" name="batas_atas" value="<?php echo $batas_atas;?>" />
                    <div class="form-group row">
                        <label for="nama_jenis_event" class="col-md-2">Jenis Event : </label>
                        <div class=" col-md-4">
                            <textarea name="nama_jenis_event" class="form-control" onchange="change_MenuBaru(this)"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['nama_jenis_event'];}?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    	<table class="table table-striped">
                            <tr><th>Urutan</th><th>Jenis Event</th></tr><?php
                            for($urutan=1;$urutan<=$batas_atas;$urutan++){?>
                                <tr><td><?php echo $urutan;?></td>
                                <td>
                                    <select name="select_<?php echo $urutan;?>" onchange="changeUniqueSelect()">
                                        <option value="<?php echo "opsi_".$urutan;?>"></option><?php
                                        for($select=0;$select<sizeof($urutan_jenis_event);$select++){?>
                                            <option value="<?php echo $urutan_jenis_event[$select]['id'];?>" <?php if($urutan_jenis_event[$select]['urutan']==$urutan){echo "selected";}?>>
                                                <?php echo $urutan_jenis_event[$select]['nama_jenis_event'];?>
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