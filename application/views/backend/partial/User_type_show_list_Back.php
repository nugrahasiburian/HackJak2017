<style>
	#user_type_show_list_back .panel-group .panel .panel-body #create-new_button{
		float:left;
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Pulau",""];
	$arr_thead_width = ["85%","15%"];
	
	//Fungsi Bantuan utk Menampilkan Alert Success Operation to SQL
	if(isset($_SESSION['is_success_operation_to_sql'])){
		$myVar = $_SESSION['is_success_operation_to_sql'];
		if($myVar == "success_insert"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> disimpan.</div>";
		}elseif($myVar == "success_delete"){
			echo "<div class='alert alert-success'>Data <strong>berhasil</strong> dihapus.</div>";
		}
		unset($_SESSION['is_success_operation_to_sql']);
	}
?>
<div id="user_type_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span>
            </div>
            <div class="panel-body">
                <a id="create-new_button" href="<?php echo base_url()."admin/user-type/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_user_type_content);$i++){?>
                            <tr>
                                <td><?php echo $all_user_type_content[$i]['name_user_type'];?></td>
                                <td>
                                    <a href="<?php echo base_url()."admin/user-type/edit/".$all_user_type_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/user-type/delete/".$all_user_type_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>