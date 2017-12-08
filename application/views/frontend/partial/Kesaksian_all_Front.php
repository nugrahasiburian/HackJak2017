<style>
	/**************** STYLE KESAKSIAN *************/
	#kesaksian_all .row.thumbnail .thumbnail_image{
		float:left;
	}
	#kesaksian_all .row.thumbnail .thumbnail_text{
		padding-left:2%;
		overflow: hidden;
	}
	#kesaksian_all .row.thumbnail .thumbnail_text .time{
		float:right;
		margin-right:3%;
		padding:0px;
		font-size:13px;
	}
	#kesaksian_all .row.thumbnail .thumbnail_text .title{
		clear:both;
	}
	
	/*Setting Responsive Thumbnail*/
	@media screen and (min-width:1193px){
		#kesaksian_all .row.thumbnail .thumbnail_image{
			width:200px;
			height:150px;
		}
		#kesaksian_all .row.thumbnail .thumbnail_text{
			max-height:130px;
		}
	}
	@media screen and (max-width:1192px){
		#kesaksian_all .row.thumbnail .thumbnail_image{
			width:150px;
			height:110px;
		}
		#kesaksian_all .row.thumbnail .thumbnail_text{
			max-height:105px;
		}
	}
	@media screen and (max-width:650px){
		#kesaksian_all .row.thumbnail .thumbnail_text .title{
			max-height:110px;
		}
		#kesaksian_all .content_preview{
			display:none;
		}
	}
</style>
<div id="kesaksian_all" class="my_background_white">
	<div class="container">
    <p class="my_h3">FORMULIR FEEDBACK TAMAN</p>
        <i>Isilah formulir dibawah ini dengan lengkap untuk memberikan pendapat/feedback mengenai Taman.</i>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
        
        <form id="mendaftar_murid" action="<?php echo base_url()."";?>" method="post">
            <div class="form-group row">
                <label class="col-md-2">Nama Pengunjung</label>
                <div class=" col-md-4">
                    <input id="nama_murid" name="nama_murid" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2">Nama Taman</label>
                <div class=" col-md-4">
                    <input id="nama_murid" name="nama_murid" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2">Komentar</label>
                <div class=" col-md-4">
                    <textarea id="komentar" name="komentar" class="form-control"></textarea>
                </div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center col-md-offset-4 col-md-4">
                    <button type="submit" class="btn btn-success col-md-12 col-sm-12 col-xs-12 padding_vertical_10"><b>SUBMIT</b></button>
                    </div>
                </div>
            </div>
      	</form>
        <br />
    </div>
</div>