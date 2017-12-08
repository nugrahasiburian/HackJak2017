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
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah User Authority Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit User Authority";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/user-type/".$type_new_or_edit."/save";?>" method="post">
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label for="name_user_type" class="col-md-2">Type : </label>
                        <div class=" col-md-4">
                            <input name="name_user_type" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['name_user_type'];}?>" />
                        </div>
                    </div>
                    <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>