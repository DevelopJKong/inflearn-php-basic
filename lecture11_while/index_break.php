<?php

/**
 * 
 *  break[Level]
 */
for ($i=0; $i < 10 ; $i++) {
    for ($j=0; $j < 10 ; $j++) { 
        break;  // 레벨을 정해줄수 있다는것이 생각보다 신기한거 같다
                // 예를들면 break 2; 라고 지정해주면 전부 빠져나오는것을 볼수가 있다
    }
    echo $i;
}

$sum = 0;
for ($i=0; $i <10 ; $i++) { 
    for ($j=0; $j <10 ; $j++) { 
        continue 2;     //continue 까지도 레벨을 줄수가 있는데 이 부분도 제대로 알아두어야 할거 같다
    }
    $sum += $i;
}

echo $sum;