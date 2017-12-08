<style>
/******************** STYLE PROFIL *************/
	#paket_les, #pencarian_taman{
		padding: 20px 0;
	}
	#paket_les img{
		max-width:500px;
		height:auto;
	}
	@media screen and (max-width:770px){
		#paket_les img{
			width:100%;
			height:auto;
		}
	}
	
	.panel-default > a:before {
		float: right !important;
		font-family:'Glyphicons Halflings';
		content:"\e114";
		padding: 10px 20px;
	}
	.panel-default > a.collapsed:before {
		float: right !important;
		content:"\e080";
	}
	.panel-default > a, .panel-default > a:hover{
		font-weight:bold;
		text-decoration:none;
		color: white;
	}
	.panel-heading {
		background-color: #428bca;
	}
	.panel-heading:hover{
		cursor:pointer;
		background-color: #d9534f;
	}
</style>
<div id="pencarian_taman" class="my_background_white">
	<div class="container">
    	<p class="my_h3">PENCARIAN TAMAN</p>
        <i>Isilah formulir dibawah ini dengan lengkap untuk menampilkan lokasi taman.</i>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
        
        <form id="cari_taman" action="<?php echo base_url()."list-taman";?>" method="post">
            <div class="form-group row">
                <label class="col-md-2">Kelurahan : </label>
                <div class=" col-md-3">
                    <input type="text" id="nama_kelurahan" name="nama_kelurahan" class="form-control"/>
                </div>
            </div>
            <br /><br />
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center col-md-offset-4 col-md-4">
                    <button type="submit" class="btn btn-success col-md-12 col-sm-12 col-xs-12 padding_vertical_10"><b>CARI</b></button>
                    </div>
                </div>
            </div>
      	</form>
    </div>
</div>