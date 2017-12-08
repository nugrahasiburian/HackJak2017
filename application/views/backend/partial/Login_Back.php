<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $css_template;?>
</head>
<style>
	.row{
		margin:0px;
		padding:0px;
	}
	#login{
		max-height: 200px;
		max-width: 400px;
		margin:5% auto;
	}
	.margin-vertical-20px{
		margin:20px 0;
	}
</style>
<body style="visibility: hidden;" onload="js_Load()">
    <div id="template_header">
        <?php echo $header;?>
    </div>
    <div class="container">
        <div id="login" class="row">
          <form action="<?php echo base_url()."admin/login";?>" method="post" >
                <fieldset>
                    <legend>Halaman Login</legend>
                        <div class="form-group row">
                            <label>User Email</label>
                            <div>
                                <input type="text"  class="form-control" name="txt_user_email" placeholder="User Email" value="<?php echo set_value('txt_user_email'); ?>"/>
                                <span class="text-danger"><?php echo form_error('txt_user_email'); ?></span>
                           </div>
                       </div>
                       
                       <div class="form-group row">
                            <label for="txt_user_password">Password</label>
                            <div>
                                <input class="form-control" id="txt_user_password" name="txt_user_password" placeholder="Password" type="user_password" value="<?php echo set_value('txt_user_password'); ?>" />
                                <span class="text-danger"><?php echo form_error('txt_user_password'); ?></span>
                            </div>
                       </div>
                                      
                       <div class="form-group row">
                            <div class="text-center">
                                <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary margin-vertical-20px" value="Login" />
                            </div>
                       </div>
                </fieldset>
          </form><?php 
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }?>
        </div>
   	</div>
    <div id="template_footer">
        <?php echo $footer;?>
    </div>
</body>
</html>