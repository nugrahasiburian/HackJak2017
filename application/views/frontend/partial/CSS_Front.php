<title><?php echo $browser_info[0]['title'];?></title>

<meta charset="utf-8">
<meta name="description" content="Sion Ministry | Menjadi Tempat Persemaian bagi Mahasiswa  untuk Memberkati Kampus Sendiri, Kampus-Kampus, sampai ke Bangsa-Bangsa">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--Helper Function-->
<?php include "customized_assets/functions.php";?>

<meta property='og:site_name' content='<?php echo $browser_info[0]['site_name'];?>' >
<meta property='og:type' content='<?php if(isset($og_fb[0]['title'])){echo "article";} if(isset($og_fb[0]['menu_name'])){echo "website";}?>'>
<?php
	$uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<meta property='og:url' content='<?php echo $uri;?>' >
<meta property='og:title' content='<?php if(isset($og_fb[0]['title'])){echo $og_fb[0]['title'];} if(isset($og_fb[0]['menu_name'])){echo $og_fb[0]['menu_name'];}?>' >
<meta property="og:description" content="<?php if(isset($og_fb[0]['content'])){echo limit_text($og_fb[0]['content'],20);}?>" />
<?php
if(isset($og_fb[0]['cover_image'])){?>
	<meta property='og:image' content='<?php echo base_url().$og_fb[0]['cover_image'];?>'><?php
}?>
<meta property="article:author" content="https://www.facebook.com/sionministry" />
<meta property="article:publisher" content="https://www.facebook.com/sionministry" />
           
<!--Styles-->
<link rel="icon" href="<?php echo $this->config->item('base_image_url').$browser_info[0]['icon'];?>" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."default_assets/css/bootstrap.min.css";?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()."default_assets/css/datepicker.min.css";?>"/>