<style>
	#footer{
		background-color:#A4000D;
	}
	#footer>.container>#sosmed{
		float:right;
	}
	#footer>.container>#sosmed a:hover, #footer>.container>#sosmed a:focus{
		color:white;
	}
	#footer>.container>#sosmed>#item_sosmed{
		width:150px;
		float:left;
		padding:10px 0;
	}
	#footer>.container>div>#text{
		padding-right:30px;
	}
	#footer>.container>#copyright{
		clear:both;
		padding-top:40px;
		padding-bottom:10px;
	}
	#footer #logo{
		width:30px;
		background-color:white;
		padding:3px;
		border-radius: 3px;
	}
	#footer img{
		width:100%;
		height:100%;
		border-radius: 2px;
	}
	#footer #logo,#footer #text{
		float:left;
	}
</style>
<div id="footer" class="my_font_white">
    <div class="container">
        <div id="sosmed">
        	<p>Our Social Media Channel</p><?php
			for($i=0;$i<sizeof($sosmed);$i++){?>
                <div id="item_sosmed">
					<div id="logo"><img src="<?php echo $sosmed[$i]['image'];?>" alt="" width="100%" height="100%"/></div>
                    <div id="text">&nbsp;<a target = '_blank' href="<?php echo $sosmed[$i]['link'];?>" class="my_font_white"><?php echo $sosmed[$i]['nama_sosmed'];?> </a></div>
                </div><?php
          	}?>
       	</div>
        
        <p id="copyright" class="text_center">© Copyright 2017 HackJak2017</p>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>customized_assets/kamus_javascriptss.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>default_assets/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
	$('.datepicker_month_year').datepicker({
		autoclose: true,
		minViewMode: 1,
		format: 'mm/yyyy'
	});
	$(function() {
		$('.datepicker_month_year').change(function() {
			$("form#datepicker_form").submit();
		});
	});
	
	$("#nama_kecamatan").change(function() {
	  if ($(this).data('options') === undefined) {
		/*Taking an array of all options-2 and kind of embedding it on the select1*/
		$(this).data('options', $('#nama_kelurahan option').clone());
	  }
	  var id = $(this).val();
	  var options = $(this).data('options').filter('[value=' + id + ']');
	  $('#nama_kelurahan').html(options);
	});
</script>