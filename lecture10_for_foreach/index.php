<?php
/**
 * for.
 *
 */
for($i = 1; $i <= 10; $i++){
    echo $i;
}

/**
 * for with array
 */

$message = [
    'Hello, world',
    'Who are you?',
    'Bye'
];

//PHP_EQL 은 php 에서 \n 와 비슷한것이라고 생각하면 될거 같다

//여기서 알아둬야 할것은 java나 javascript에서는 length 만큼 이라고 해주는데
//php에서는 count 함수 안에 넣어주고 활용을한다는것을 기억해두어야 겠다
for ($i=0; $i < count($message); $i++) { 
   echo $message[$i] . PHP_EOL;
}