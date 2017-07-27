function str($str){
	global $l;
	return mysql_query($l=$str);
}
