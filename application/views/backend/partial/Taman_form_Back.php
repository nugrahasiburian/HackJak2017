<style>
	#taman_edit .cover_image {
		width: 330px;
		height: 250px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	.form-group {
		margin:10px 0px;
	}
	.form-group label, .form-group>div{
		padding:0px;
	}
	textarea{
		width:100%;
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

<div id="taman_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tambah Data Taman Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Info Taman";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/taman/".$type_new_or_edit."/save";?>" method="post" >
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label for="cover_image" class="col-md-2">Gambar Taman :</label>
                        <div class="col-md-6">
                            <div class="cover_image" onclick="openKCFinder(this,'<?php echo $category;?>')"><?php if($type_new_or_edit=="edit"){?> 
                           		<img src="<?php echo $selected_content_detail[0]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"><?php
								}?>
                                <div style="margin:5px">Click here to choose an image</div>
                            </div>
                            <input type="hidden" name="cover_image" id="cover_image_input" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['cover_image'];}?>' />
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default" id="cover_image" onclick="resetGambarKCFinder(this)">Hapus Gambar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_taman" class="col-md-2">Nama Taman : </label>
                        <div class="col-md-7">
                            <textarea name="nama_taman" id="nama_taman" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['nama_taman'];}?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="isi" class="col-md-12">&nbsp;Infrastruktur : </label>
                        <textarea name="infrastruktur" id="textarea_ckeditor" class="form-control"><?php if($type_new_or_edit=="edit"){ echo $selected_content_detail[0]['infrastruktur'];}?></textarea>
                    </div>
                    <button  type="submit" class="btn btn-primary pull-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>