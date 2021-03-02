<?
	function plus($a, $b)
	{
		if ($a < $b)
		{
			$sum = 0;
			for ($i=$a; $i<=$b; $i++)
			{
				$sum = $sum + $i;
			}
		}
		else
		{
			$sum = 0;
			for ($i=$b; $i<=$a; $i++)
			{
				$sum = $sum + $i;
			}
		}
		return $sum;
	}
	
	$result = plus($num1, $num2);

		
	echo "첫번째 입력한 숫자 : $num1 , 두번째 입력한 숫자 : $num2 <br>";
	echo "총 합계 : $result";

?>