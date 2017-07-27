function byKeySet($query_str, $key="sl"){
	$all_ar=$this->byKey($query_str);
	return $this->array2set($all_ar, $key);
}
