<style>
	.table tr td img{
		width:100%;
		height:auto;
	}
	#kesaksian_show_list_back .panel-group .panel .panel-body a{
		float:left;
	}
	#kesaksian_show_list_back .panel-group .panel .panel-body .search_box form{
		float:right;
	}
	@media screen and (max-width: 800px) {
		#kesaksian_show_list_back thead th#_1, #kesaksian_show_list_back thead th#_3, #kesaksian_show_list_back tbody td#_1, #kesaksian_show_list_back tbody td#_3 {
			display:none;
		}
	}
</style>

<?php 
	//Variabel
	$arr_thead_text = ["Tgl.Posting","Cover Image","Judul","Isi",""];
	$arr_thead_width = ["15%","20%","20%","30%","15%"];
	
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
<div id="kesaksian_show_list_back">
    <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="my_h2"><div class="glyphicon glyphicon-pushpin"></div><span>&nbsp;<?php echo $name_of_submenu_parent[0]['nama_menu'];?></span></span><br />
                &emsp;&emsp;<?php echo "Bulan ".getMonthToBulan($month)." ".$year."";?>
            </div>
            <div class="panel-body">
                <a href="<?php echo base_url()."admin/kesaksian/create-new";?>"><button class="btn btn-primary">Buat Baru</button></a>
                <div class="search_box row">
                    <form id="myForm" method="post" action="<?php echo base_url()."admin/kesaksian";?>" class="col-md-4 col-sm-6">
                        <input type="text" name="date_search_box" class="form-control datepicker_month_year" onchange="submitForm('myForm')" placeholder="Pilih Bulan Kesaksian" readonly="readonly">
                    </form>
                </div>
                <table class="table table-striped">
                    <thead><tr><?php
                        for($i=0;$i<sizeof($arr_thead_text);$i++){?>
                            <th width="<?php echo $arr_thead_width[$i];?>" id="<?php echo "_".$i;?>"><?php echo $arr_thead_text[$i];?></th><?php
                        }?>
                    </tr></thead>
                    <tbody><?php
                        for($i=0;$i<sizeof($all_kesaksian_content);$i++){?>
                            <tr>
                                <td id="_0"><?php echo getDayHuruf($all_kesaksian_content[$i]['times']).", <br>".getDayAngka($all_kesaksian_content[$i]['times'])." ".getMonth($all_kesaksian_content[$i]['times'])." ".getYear($all_kesaksian_content[$i]['times']);?></td>
                                <td id="_1"><img src="<?php echo $all_kesaksian_content[$i]['cover_image'];?>" alt="Cover Image" width="100%" height="100%"></td>
                                <td id="_2"><?php echo $all_kesaksian_content[$i]['title']."<br><i class='my_font_grey small_font_size_p'>by ".$all_kesaksian_content[$i]['author']."<i>";?></td>
                                <td id="_3"><?php echo setContentAdjustToHeight($all_kesaksian_content[$i]['content'],200);?></td>
                                <td id="_4">
                                    <a href="<?php echo base_url()."admin/kesaksian/edit/".$all_kesaksian_content[$i]['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                    <a href="<?php echo base_url()."admin/kesaksian/delete/".$all_kesaksian_content[$i]['id'];?>" onclick="return confirm('Apakah yakin ingin Menghapus data?');"><button class="btn btn-danger">Delete</button></a>
                                </td>
                            </tr><?php
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>