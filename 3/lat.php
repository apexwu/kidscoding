<?php



//$addd = $_GET["addd"];
$addd = $inadds;
$addr_str_array = array($addd);
//$num_addr = count($addr_str);
$addr_latlng_array = array(); //用來存抓到的經緯度
	
    $i=0;
	$addr_str = $addr_str_array[$i];
	$addr_str_encode = urlencode($addr_str);
	$url = "http://maps.googleapis.com/maps/api/geocode/json"
		."?sensor=true&language=zh-TW&region=tw&address=".$addr_str_encode;
	$geo = file_get_contents($url);
	$geo = json_decode($geo,true);
	$geo_status = $geo['status'];
	//echo "$addr_str $geo_status\n";
	if($geo_status=="OVER_QUERY_LIMIT"){ die("地址出現問題!OVER_QUERY_LIMIT"); }
	

	$geo_address = $geo['results'][0]['formatted_address'];
	$num_components = count($geo['results'][0]['address_components']);
	//郵遞區號、經緯度
	$geo_zip = $geo['results'][0]['address_components'][$num_components-1]['long_name'];
	 $geo_lat = $geo['results'][0]['geometry']['location']['lat'];
	$geo_lng = $geo['results'][0]['geometry']['location']['lng'];
	$geo_location_type = $geo['results'][0]['geometry']['location_type'];
/*
location_type 會儲存指定位置的其他相關資料，目前支援的值如下：

"ROOFTOP" 會指出傳回的結果是精準的地理編碼，因為結果中位置資訊的精確範圍已縮小至街道地址。
"RANGE_INTERPOLATED" 表示傳回的結果反映的是插入在兩個精確定點之間 (例如十字路口) 的約略位置 (通常會在街道上)。如果 Geocoder 無法取得街道地址的精確定點地理編碼，就會傳回插入的結果。
"GEOMETRIC_CENTER" 表示傳回的結果是結果的幾何中心，包括折線 (例如街道) 和多邊形 (區域)。
"APPROXIMATE" 表示傳回的結果是約略位置。	
*/
	//if($geo_location_type!="ROOFTOP") continue;

	$addr_latlng_array[$i] = array($geo_lat,$geo_lng);
	sleep(2);
	//echo "<script>alert(\"次數還有:".$geo_lat."\");</script>"; 
	//echo "<br>";
	//echo "<script>alert(\"次數還有:".$geo_lng."\");</script>"; 

	
	 //不能讀太快，每筆要間隔一秒
?>


