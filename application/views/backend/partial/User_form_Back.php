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

<div id="user_type_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah User Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit User";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/user/".$type_new_or_edit."/save";?>" method="post">
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label for="username" class="col-md-2">Username : </label>
                        <div class=" col-md-4">
                            <input name="username" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['username'];}?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_email" class="col-md-2">User Email : </label>
                        <div class=" col-md-4">
                            <input name="user_email" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['user_email'];}?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="user_password" class="col-md-2">User Password : </label>
                        <div class=" col-md-4">
                            <input name="user_password" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['user_password'];}?>" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_user_type" class="col-md-2">User Type : </label>
                        <div class=" col-md-4">
                            <select name="id_user_type">
								<option value=""></option><?php
                            	for($i=0;$i<sizeof($list_of_user_type);$i++){?>
                                	<option value="<?php echo $list_of_user_type[$i]['id'];?>" <?php if($type_new_or_edit=="edit"){
										$arr_id_user_type = explode(",",$selected_content_detail[0]['id_user_type']);
										if(in_array($list_of_user_type[$i]['id'],$arr_id_user_type)){echo "selected";}}?>>
										<?php echo $list_of_user_type[$i]['name_user_type'];?>
                                  	</option><?php
								}?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_kota" class="col-md-2">Kota : </label>
                        <div class=" col-md-4">
							<select name="id_kota">
								<option value=""></option><?php
								for($i=0;$i<sizeof($list_of_kota);$i++){?>
                                <option value="<?php echo $list_of_kota[$i]['id'];?>" <?php if($type_new_or_edit=="edit"){ if($list_of_kota[$i]['id']==$selected_content_detail[0]['id_kota']){?> selected="selected"<?php }}?>><?php echo $list_of_kota[$i]['nama_kota'];?></option><?php
								}?>
                          	</select>
                        </div>
                    </div>
                    <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>