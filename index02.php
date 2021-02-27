<?


	$num_str = strlen($num);
	
	echo "strlen() 함수 사용 : $num_str <br>";

	$num_front = substr($num, 0, 6);
	$num_back = substr($num, 6, 13);

	echo "substr() 함수 사용 : $num_front , $num_back <br>";

	if ($num_back[1] == 2)
	{
		echo "여성";
	}
	else
	{
		echo "남성";
	}

	
?>