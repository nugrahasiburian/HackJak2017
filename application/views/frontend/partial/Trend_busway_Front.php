<style>
/******************** STYLE trend_busway *************/
	#trend_busway .panel-group{
		float:left;
	}
	@media screen and (min-width:770px){
		.panel-group{
			width:40%;
			margin-right:10%;
		}
		.myIframe {
			width:40%;
		}
	}
	@media screen and (max-width:770px){
		.panel-group{
			width:100%;
		}
		.myIframe {
			width:100%;
		}
	}
	.panel-heading:hover{
		cursor:pointer;
	}
	.panel-heading.accordion-toggle:before {
		/* symbol for "opening" panels */
		font-family:'Glyphicons Halflings';
		/* essential for enabling glyphicon */
		content:"\e114";
		float: right;
		color: grey;
		margin-top:-5px;
	}
	.panel-heading.accordion-toggle.collapsed:before {
		/* symbol for "collapsed" panels */
		content:"\e080";
	}
	.myIframe {
		position: relative;
		overflow: auto; 
		border: solid black 1px;
		height: 250px;
		margin-bottom:2%;
		border:none;
	}
	.myIframe object {
		position: absolute;
		top: 0;
		left: 0;
		width:100%;
		height:100%;
		border:none;
	}
</style>
<div id="trend_busway">
    <div class="container">
        <h3>TREND PENGGUNAAN BUSWAY</h3>
        <div class="line-heading-1"></div>
        <div class="line-heading-2"></div>
        <ul class="nav nav-tabs"><?php
            for($i=0;$i<sizeof($trend_busway);$i++){?>
            	<li class="<?php if($i==0){ echo "active";}?>">
                	<a data-toggle="tab" href="#<?php echo $trend_busway[$i]['id'];?>"><?php echo $trend_busway[$i]['name'];?></a>
               	</li><?php
			}?>
      	</ul>
        <div class="tab-content"><?php
			for($i=0;$i<sizeof($trend_busway);$i++){?>
            	<div id="<?php echo $trend_busway[$i]['id'];?>" class="tab-pane fade <?php if($i==0){ echo "in active";}?>">
                	<h4><?php echo $trend_busway[$i]['name'];?></h4>
                    <?php
					if($trend_busway[$i]['tag_name']=='video'){?>
                    	<div class='myIframe'>
						<?php echo embededYoutube($trend_busway[$i]['content']);?>
                        </div><?php
					}else{?>
						<p><?php echo $trend_busway[$i]['content'];?></p><?php
					}?>
				</div><?php
           	}?>
     	</div>
  	</div>
</div>
