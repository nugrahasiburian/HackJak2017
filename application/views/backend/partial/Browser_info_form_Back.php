<style>
	#browser_info_edit .icon {
		width: 60px;
		height: 60px;
		overflow: hidden;
		cursor: pointer;
		background: #000;
		color: #fff;
	}
	#browser_info_edit .icon img {
		width:100%;
		height:100%;
	}
	.form-group {
		margin:10px 0px;
	}
	#browser_info_edit .jam.col-md-1{
		width:120px;
	}
	#browser_info_edit .tanggal.col-md-2{
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

<div id="browser_info_edit">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php if($type_new_or_edit=="create-new"){ echo "Tulis Browser Info Baru";}elseif($type_new_or_edit=="edit"){ echo "Edit Browser Info";}?></span></span>
            </div>
            <div class="panel-body">
                <form action="<?php echo base_url()."admin/browser-info/".$type_new_or_edit."/save";?>" method="post" >
                    <input type="hidden" name="id" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['id'];}?>"/>
                    <div class="form-group row">
                        <label for="site_name" class="col-md-2">Nama Situs : </label>
                        <div class=" col-md-4">
                            <input name="site_name" class="form-control" value="<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['site_name'];}?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="title" class="col-md-2">Judul : </label>
                        <div class=" col-md-8">
                            <textarea name="title" class="form-control"><?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['title'];}?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="icon_input" class="col-md-2">Icon :</label>
                        <div class="col-md-6">
                            <div class="icon" onclick="openKCFinder(this)"><?php if($type_new_or_edit=="edit"){?>
                                <img src="<?php echo $selected_content_detail[0]['icon'];?>" alt="Icon" width="100%" height="100%"><?php
                                }?>
                                <div style="margin:5px">Click here to choose an icon</div>
                            </div>
                            <input type="hidden" name="icon" id="icon_input" value='<?php if($type_new_or_edit=="edit"){echo $selected_content_detail[0]['icon'];}?>' />
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-default" id="icon" onclick="resetGambarKCFinder(this)">Hapus Gambar</button>
                        </div>
                    </div>
                    <input type="submit" name="Submit" />
                </form>
            </div>
        </div>
    </div>
</div>