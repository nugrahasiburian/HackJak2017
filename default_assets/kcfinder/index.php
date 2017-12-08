<?php
if(!isset($_SESSION['login'])){
	echo "Tidak boleh";
}else{
	require "browse.php";
}
?>