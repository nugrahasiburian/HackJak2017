

<?php
	$server_host = $_SERVER['HTTP_HOST'];
	
	if(isset($_SESSION['id_user'])){
		$id_user = $_SESSION['id_user'];
		$path = 'default_assets/kcfinder/upload/'.$id_user;
		
		if (!file_exists($path)) {
			mkdir($path, 0755, true);
		}
	
		$category_kcfinder = $this->uri->segment(2);
		$_SESSION['KCFINDER'] = array();
		$_SESSION['KCFINDER']['disabled'] = false; // Activate the uploader,
		$_SESSION['KCFINDER']['uploadURL'] = "upload/".$id_user."/".$category_kcfinder; 
	}
	//$_SESSION['fold_type'] = "media";
?>

<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/bootstrap.min.js"></script>
<script>
	function js_Load(){
		document.body.style.visibility='visible';
	}
	
	var getUrl = window.location;
	if(getUrl.host == "localhost"){
		var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
	}else{
		var baseUrl = getUrl .protocol + "//" + getUrl.host;
	}
	
	$('.datepicker_month_year').datepicker({
		autoclose: true,
		minViewMode: 1,
		format: 'mm/yyyy'
	});
	$('.datepicker_day_month_year').datepicker({
		autoclose: true,
		format: 'dd/MM/yyyy'
	});
	
	function submitForm(id_form){
		$("form#"+id_form).submit();
	}
	
	function changeJam(data){
		if($("#endJam").val()==""){
			$("#endJam").val(data.value).prop('selected', true);
		}
	}
	function enabledAllUniqueSelect(){
		var select_tag = document.getElementsByTagName("select");
		
		//enable all
		for($i=0;$i<select_tag.length;$i++){ //looping sesuai jumlah select
			var option_length = select_tag[$i].options.length;
			for($option=0;$option<option_length;$option++){//looping option
				select_tag[$i].options[$option].disabled = false;
			}
		}
	}
	function changeUniqueSelect(){
		enabledAllUniqueSelect();
		
		var select_tag = document.getElementsByTagName("select");
		//select disable
		for($i=0;$i<select_tag.length;$i++){ //looping sesuai jumlah select
			var select_value = select_tag[$i].options[select_tag[$i].selectedIndex].value;
			
			for($j=0;$j<select_tag.length;$j++){//looping another select
				var option_length = select_tag[$j].options.length;
				for($option=0;$option<option_length;$option++){//looping option
					if(select_value === select_tag[$j].options[$option].value){
						select_tag[$j].options[$option].disabled = true;
					}
				}
				
			}
		}
	}
	
	function resetGambarKCFinder(variabel){
		var id_name_of_reset_button = variabel.getAttribute('id');
		var input_field = document.getElementById(id_name_of_reset_button+'_input');
		input_field.value = '';
		window.KCFinder = null;
	}
	
	CKEDITOR.replace('textarea_ckeditor',{
		height : 370,
		filebrowserBrowseUrl : baseUrl+'/default_assets/kcfinder/browse.php?type=files.',
   		filebrowserImageBrowseUrl : baseUrl+'/default_assets/kcfinder/browse.php?type=images',
   		filebrowserUploadUrl : baseUrl+'/default_assets/kcfinder/upload.php?type=files',
   		filebrowserImageUploadUrl : baseUrl+'/default_assets/kcfinder/upload.php?type=images'
	});
	
	function openKCFinder(variabel,folder) {
		window.KCFinder = {
			callBack: function(url_nya) {
				var class_name_of_field = variabel.getAttribute('class');
				var input_field = document.getElementById(class_name_of_field+'_input');
				input_field.value = url_nya;
				
				window.KCFinder = null;
				var img = new Image();
				img.src = url_nya;
				img.onload = function() {
					variabel.innerHTML = '<img id="img" src="' + url_nya + '" />';
					var img = document.getElementById('img');
					var o_w = img.offsetWidth;
					var o_h = img.offsetHeight;
					var f_w = variabel.offsetWidth;
					var f_h = variabel.offsetHeight;
					if ((o_w > f_w) || (o_h > f_h)) {
						if ((f_w / f_h) > (o_w / o_h))
							f_w = parseInt((o_w * f_h) / o_h);
						else if ((f_w / f_h) < (o_w / o_h))
							f_h = parseInt((o_h * f_w) / o_w);
						img.style.width = f_w + "px";
						img.style.height = f_h + "px";
					} else {
						f_w = o_w;
						f_h = o_h;
					}
					img.style.marginLeft = parseInt((variabel.offsetWidth - f_w) / 2) + 'px';
					img.style.marginTop = parseInt((variabel.offsetHeight - f_h) / 2) + 'px';
					img.style.visibility = "visible";
				}
			}
		};
		window.open(baseUrl+'/default_assets/kcfinder/browse.php?type=images',
			'kcfinder_image', 'status=0, toolbar=0, location=0, menubar=0, ' +
			'directories=0, resizable=1, scrollbars=0, width=800, height=600'
		);
	}
</script>