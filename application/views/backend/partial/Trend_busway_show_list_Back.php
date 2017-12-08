<style>
	@media screen and (max-width: 800px) {
		#trend_busway_show_list_back thead th#_2,  #trend_busway_show_list_back tbody td#_2{
			display:none;
		}
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Urutan","Nama","Keterangan",""];
	$arr_thead_width = ["2%","20%","63%","15%"];
	
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
<div id="trend_busway_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span>
            </div>
            <div class="panel-body">
            	<a href="<?php echo base_url()."admin/trend-busway/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_trend_busway_content);$i++){?>
                            <tr>
                            	<td id="_0"><?php echo $all_trend_busway_content[$i]['urutan'];?></td>
                            	<td id="_1"><?php echo $all_trend_busway_content[$i]['name'];?></td>
                                <td id="_2"><?php echo $all_trend_busway_content[$i]['content'];?></td>
                                <td id="_3">
                                    <a href="<?php echo base_url()."admin/trend-busway/edit/".$all_trend_busway_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/trend-busway/delete/".$all_trend_busway_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>