<?php
	function getDayToHari($var){
		if($var == 'Sun'){return 'Minggu';}
		if($var == 'Mon'){return 'Senin';}
		if($var == 'Tue'){return 'Selasa';}
		if($var == 'Wed'){return 'Rabu';}
		if($var == 'Thu'){return 'Kamis';}
		if($var == 'Fri'){return 'Jumat';}
		if($var == 'Sat'){return 'Sabtu';}
	}
	function getMonthToBulan_English($var){
		if($var == '01'){return 'January';}
		if($var == '02'){return 'February';}
		if($var == '03'){return 'March';}
		if($var == '04'){return 'April';}
		if($var == '05'){return 'May';}
		if($var == '06'){return 'June';}
		if($var == '07'){return 'July';}
		if($var == '08'){return 'August';}
		if($var == '09'){return 'September';}
		if($var == '10'){return 'October';}
		if($var == '11'){return 'November';}
		if($var == '12'){return 'December';}
	}
	function getMonthToBulan($var){
		if($var == '01'){return 'Januari';}
		if($var == '02'){return 'Februari';}
		if($var == '03'){return 'Maret';}
		if($var == '04'){return 'April';}
		if($var == '05'){return 'Mei';}
		if($var == '06'){return 'Juni';}
		if($var == '07'){return 'Juli';}
		if($var == '08'){return 'Agustus';}
		if($var == '09'){return 'September';}
		if($var == '10'){return 'Oktober';}
		if($var == '11'){return 'Nopember';}
		if($var == '12'){return 'Desember';}
	}
	function getJam($var){
		$datetime = new DateTime($var);
		return $datetime->format('H');
	}
	function getMenit($var){
		$datetime = new DateTime($var);
		return $datetime->format('i');
	}
	function getDayHuruf($var){
		$datetime = new DateTime($var);
		return getDayToHari($datetime->format('D'));
	}
	function getDayAngka($var){
		$datetime = new DateTime($var);
		return $datetime->format('d');
	}
	function getMonth_English($var){
		$datetime = new DateTime($var);
		return getMonthToBulan_English($datetime->format('m'));
	}
	function getMonth($var){
		$datetime = new DateTime($var);
		return getMonthToBulan($datetime->format('m'));
	}
	function getMonthAngka($var){
		$datetime = new DateTime($var);
		return $datetime->format('m');
	}
	function getYear($var){
		$datetime = new DateTime($var);
		return $datetime->format('Y');
	}
	function getDateTimeNow(){
		date_default_timezone_set('Asia/Jakarta');
		return date("Y-m-d H:i:s");
	}
	
	function getArrayofMenu($data){
		$row = array(array());
		for($i=0;$i<sizeof($data);$i++){
			if($data[$i]['menu_parent'] == 0){ //menu parent
				$row[$i][0] = $data[$i];
			}else{
				if(searchMenuParent($data[$i]['menu_parent'],$row) != -1){ //parent dari sub menu ketemu
					$row[searchMenuParent($data[$i]['menu_parent'],$row)][sizeof($row[searchMenuParent($data[$i]['menu_parent'],$row)])] = $data[$i];
				}
			}
		}
		return $row;
	}
	function searchMenuParent($value, $array){
		for($i=0;$i<sizeof($array);$i++){
			if($value == $array[$i][0]->menu_rank){
				return $i;
			}
		}
		return -1;
	}
	
	function setContentAdjustToHeight($content, $length){
		echo substr($content,0,$length);
		if(strlen($content) > $length){
			echo " ...";
		}
	}
	function embededYoutube($url){
		$link=str_replace('<p>https://www.youtube.com/watch?v=', '', $url);
		$link=str_replace('</p>', '', $link);
		$data='<object width="425" height="350" data="http://www.youtube.com/v/'.$link.'" type="application/x-shockwave-flash">
		<param name="src" value="http://www.youtube.com/v/'.$link.'" />
		</object>';
		return $data;
	}
	function getstringLowerDashed($string){
		$string = preg_replace('/[^\p{L}\p{N}\s]/u', '', $string);
		$splited = explode(" ", $string);
		$output = implode(" ", $splited);
		return str_replace(' ', '-', strtolower($output));
	}
	function limit_text($text, $limit) {
      	if (str_word_count($text, 0) > $limit) {
          	$words = str_word_count($text, 2);
         	 $pos = array_keys($words);
          	$text = substr($text, 0, $pos[$limit]) . '...';
      	}
      	return $text;
    }
?>