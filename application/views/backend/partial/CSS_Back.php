<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $browser_info[0]['title'];?></title>
<!--Styles-->
<link rel="icon" href="<?php echo $browser_info[0]['icon'];?>" />

<script type="text/javascript">
	  var stylesheet = document.createElement('link');
	  stylesheet.href = '<?php echo base_url()."default_assets/css/bootstrap.css";?>';
	  stylesheet.rel = 'stylesheet';
	  stylesheet.type = 'text/css';
	  document.getElementsByTagName('head')[0].appendChild(stylesheet);
	  
	  var stylesheet = document.createElement('link');
	  stylesheet.href = '<?php echo base_url()."default_assets/css/datepicker.min.css";?>';
	  stylesheet.rel = 'stylesheet';
	  stylesheet.type = 'text/css';
	  document.getElementsByTagName('head')[0].appendChild(stylesheet);
</script>
<!--Helper Function-->
<?php include "customized_assets/functions.php";?>

<style>
    /******************GENERAL STYLE *********************/
    body{
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
    }
    .line-heading-1{
        width:100px;height:5px;background-color:#CC0000;
    }
    .line-heading-2{
        width:100%;height:2px;background-color:#E4E4E4;margin-bottom:10px;
    }
</style>
