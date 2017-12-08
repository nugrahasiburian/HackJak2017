<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
	#jenis_event_show_list_back .panel-group .panel .panel-body #create_new_button{
		float:left;
	}
	#jenis_event_show_list_back .panel-group .panel .panel-body #search_box{
		float:right;
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Urutan","Pulau",""];
	$arr_thead_width = ["2%","83%","15%"];
	
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
<div id="jenis_event_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span>
            </div>
            <div class="panel-body">
                <a id="create_new_button" href="<?php echo base_url()."admin/jenis-event/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_jenis_event_content);$i++){?>
                            <tr>
                            	<td><?php echo $all_jenis_event_content[$i]['urutan'];?></td>
                                <td><?php echo $all_jenis_event_content[$i]['nama_jenis_event'];?></td>
                                <td>
                                    <a href="<?php echo base_url()."admin/jenis-event/edit/".$all_jenis_event_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/jenis-event/delete/".$all_jenis_event_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>