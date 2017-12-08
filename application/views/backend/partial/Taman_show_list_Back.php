<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
	#taman_show_list_back .panel-group .panel .panel-body a{
		float:left;
	}
	#taman_show_list_back .panel-group .panel .panel-body .search_box form{
		float:right;
	}
	@media screen and (max-width: 800px) {
		#taman_show_list_back thead th#_1, #taman_show_list_back thead th#_3, #taman_show_list_back tbody td#_1, #taman_show_list_back tbody td#_3 {
			display:none;
		}
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Gambar Taman","Nama Taman","Infrastruktur",""];
	$arr_thead_width = ["20%","20%","30%","15%"];
	
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
<div id="taman_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span><br />
            </div>
            <div class="panel-body">
                <a href="<?php echo base_url()."admin/taman/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_taman_content);$i++){?>
                            <tr>
                            	<td id="_1"><img src="<?php echo $all_taman_content[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></td>
                                <td id="_2"><?php echo $all_taman_content[$i]['nama_taman'];?></td>
                                <td id="_3"><?php echo setContentAdjustToHeight($all_taman_content[$i]['infrastruktur'],200);?></td>
                                <td>
                                    <a href="<?php echo base_url()."admin/taman/edit/".$all_taman_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/taman/delete/".$all_taman_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>