<?php

$blog = [
    'title' => 'Lorem Ipsum',
    'categories' =>[ 
        'all' =>[ 
            [
                'title' => 'What is Lorem Ipsum?',
                'content' => 'Lorem Ipsum dummy text of the printing'
            ],
            [
                'title' => 'Why do we use it?',
                'content' => 'It is a long established fact that a reader will be distory'
            ],
            [
                'title' => 'Where does it come from?',
                'content' => 'Contrary to popular belief, Lorem Ipsum is not simply '
            ],
        ],
    ],
];

/**
 * Push a element
 * 
 */
array_push($blog['categories']['all'],[
    'title' => 'jeong',
    'content' => 'php developer'
]);
var_dump($blog);

/**
 * Delete a element
 */
// 참고 array_shift도 있지만 pop이나 push 에 비해서 속도가 느리다
// 참고만 해두자
array_pop($blog['categories']['all']);
var_dump($blog);


/**
 * Filtering 
 */
// 그 배열을 필터링 해주는 그 배열만 뽑아주는 그런                               ㅜ  ㅠㅍㅍ
array_filter($blog['categories']['all'],function($post){
    return $post['title'] == 'What is Lorem Ipsum?';
});

/**
 * Validate key
 * 그 배열이 있는지를 확인해주는 그런 함수이다
 */
array_key_exists('title',$blog);

/**
 *  Make an array from another array
 * 새로운 배열을 만들어주는 그런 함수이다
 * 보면 title을 기준으로 새롭게 배열이 만들어진것을 볼수있다 
 */

array_map(function($post){
    return $post['title'];
},$blog['categories']['all']);


/**
 * Find a key
 */

echo array_search('Lorem Ipsum',$blog);


/************************/
/**
 * Generate Numbers array.
 */

 $numbers = [1,2,3,4,5];
 //range(1,5); => 1부터 5까지 배열을 만들어준다

/**
 * Folding
 */
//값을 하나를 만드는 함수이다
//array_reduce 같은 경우에는 제대로 알아둘 필요가 있는거 같다
 array_reduce($numbers,function($carry,$num) {
    return $carry += $num *2;
 });

 /**
  * Check element in array
  */
//찾는 배열에 값이 있는지 없는지 bool 타입으로 반환해준다
  in_array(3,$numbers);


  /**
   * Get array keys
   * 
   */
//키 값만 반환해준다
   var_dump(array_keys($numbers));


/**
 * Get array values
 */

 var_dump(array_values($numbers));

 /**
  * Make a array from variables
  */
//key 값에 대한 value 값을 뽑아줄수 있다
//상당히 유용하게 사용되기 때문에 알아두면 좋다ㄴ
$message = 'Hello, world';
$userCount = 0;
$pi = 3.14;
$is_visited = false;
$temp = null;

compacy('message','userCount','pi','is_visited','temp');
   









