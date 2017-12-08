<style>
	#sosmed_edit .image {
		width: 60px;
		height: 60px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#sosmed_edit .image img {
		width:100%;
		height:100%;
	}
	.form-group {
		margin:10px 0px;
	}
	#sosmed_edit .jam.col-md-1{
		width:120px;
	}
	#sosmed_edit .tanggal.col-md-2{
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

<div id="sosmed_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tulis Sosmed Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Sosmed";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/sosmed/".$type_new_or_edit."/save";?>" method="post" >
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label for="nama" class="col-md-2">Nama : </label>
                        <div class=" col-md-4">
                            <input name="nama" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['nama_sosmed'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-md-2">Image :</label>
                        <div class="col-md-6">
                            <div class="image" onclick="openKCFinder(this)"><?php if($type_new_or_edit=="edit"){?>
                                <img src="<?php echo $selected_content_detail[0]['image'];?>" alt="Cover Image" width="100%" height="100%"><?php
                                }?>
                                <div style="margin:5px">Click here to choose an image</div>
                            </div>
                            <input type="hidden" name="image" id="image_input" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['image'];}?>' />
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default" id="image" onclick="resetGambarKCFinder(this)">Hapus Gambar</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="link" class="col-md-2">Link : </label>
                        <div class=" col-md-4">
                            <textarea name="link" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['link'];}?></textarea>
                        </div>
                    </div>
                    <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>