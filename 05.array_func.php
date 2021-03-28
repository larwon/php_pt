<?php 
    /*$score = array(87, 76, 98, 87, 87, 93, 79, 85, 88, 63);
    $sum = 0;
    $count = 0;

    for ($i=0; $i<=$count; $i++) {
        $sum = $sum + $score[$i];
        $count++;
    }
    $avg = $sum/$count;
    echo "합계 : $sum<br>";
    echo "평균 : $avg";*/

    $num = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);
    $count = 10;

    echo "정렬 전 : ";
    for ($a = 0; $a < 10; $a++) {
        echo $num[$a]." ";
    }
    echo "<br>";

    for ($i = $count-2; $i >= 0; $i--){
        for ($j = 0; $j <= $i; $j++) {
            if ($num[$j] > $num[$j+1]) {
                $tmp = $num[$j];
                $num[$j] = $num[$j+1];
                $num[$j+1] = $tmp;
            }
        }
    }
    echo "버블 정렬(오름차순) 후 : ";   
    for ($a = 0; $a < 10; $a++)		// 버블 정렬 후 배열의 원소 출력	⑦
    echo $num[$a]." ";
?>

