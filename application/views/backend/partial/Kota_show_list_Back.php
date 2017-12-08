<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
	#kota_show_list_back .panel-group .panel .panel-body #create-new_button{
		float:left;
	}
	#kota_show_list_back .panel-group .panel .panel-body #search_box{
		float:right;
	}
	@media screen and (max-width:600px){
		#kota_show_list_back .panel-group .panel .panel-body #search_box{
			width:210px;
		}
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Kota","Area",""];
	$arr_thead_width = ["20%","65%","15%"];
	
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
<div id="kota_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span>
            </div>
            <div class="panel-body">
                <a id="create-new_button" href="<?php echo base_url()."admin/kota/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <div id="search_box">
                    <form id="myForm" method="post" action="<?php echo base_url()."admin/kota";?>" class="col-md-12 col-sm-12 col-xs-12">
                        <select name="id_pulau_select_box" class="form-control id_pulau_select_box" onchange="submitForm('myForm')">
                        	<option value="">Nama Pulau</option><?php
							for($i=0;$i<sizeof($list_of_pulau);$i++){?>
								<option value="<?php echo $list_of_pulau[$i]['id'];?>" <?php if($list_of_pulau[$i]['id']==$id_pulau_select_box){echo "selected";}?>>
									<?php echo $list_of_pulau[$i]['nama_pulau'];?>
                              	</option><?php
							}?>
                        </select>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_kota_content);$i++){?>
                            <tr>
                            	<td><?php echo $all_kota_content[$i]['nama_pulau'];?></td>
                            	<td><?php echo $all_kota_content[$i]['nama_kota'];?></td>
                                <td>
                                    <a href="<?php echo base_url()."admin/kota/edit/".$all_kota_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/kota/delete/".$all_kota_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>