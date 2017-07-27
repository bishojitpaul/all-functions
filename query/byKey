function byKey($query_str, $key=""){
	global $msg, $l;

	if($key=="")
	$key="auto";

	if(!$query=mysql_query($l=$query_str)){
		$msg=mysql_error()." on query->byKey";
		return false;
	}
	while($row_ar=mysql_fetch_assoc($query)){
		if($key=="auto")
		$out_ar[]=$row_ar;
		else
		$out_ar[$row_ar[$key]]=$row_ar;
	}

	if($out_ar){
		$msg="OK";
		return $out_ar;
	}
	else{
		$msg="No Row Collectd From DB on query->byKey ($l)";
		return false;
	}
}
