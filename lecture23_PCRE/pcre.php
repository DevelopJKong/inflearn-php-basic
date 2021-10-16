<?php
//docs.php.net/manual/en/book.pcre.php

/**
 * String Match (Regex)
 * 
 * Case 1 preg_match
 */
//정규표현식은 한번 더 들어야겠다
preg_match('/^(https?\:)\/\/(.*?)(\..*)$/','http://example',$matches);

 /**
  * Case 2
  * preg_match_all
  */
$html =  <<< HTML
    <section>
        <article>
        <h1>Lorem Ipsum</h1>
        </article>
    </section>
HTML;

preg_match_all('/<(h[1-6])>(.*)<\/\\1>/',$html,$matches);

var_dump($matches);
/**
 * Replace
 * 
 * preg_replace();
 */

preg_replace('/^(.*)@(.*)$/','http://$2?user=$1' ,'tbaram10@naver.com');

// preg_replace_callback('/^(.*)@(.*)$/',function($matches){
//         var_dump($matches);
//     },
//     'tbaram10@naver.com'
// );


preg_replace_callback('/^(.*)@(.*)$/',
    function($matches){ 
        [,$username,$domain] = $matches;
        return 'http://' . $domain . '?user=' .$username;
    },
    'tbaram10@naver.com'
);


// preg_replace 와 preg_filter는 동작이 거의 비슷하지만 return 값을 받고 싶을때는 filter를 사용한다
//preg_filter('/^(.*)@(.*)$/','http://$2?user=$1' ,'tbaram10@naver.com');

/**
 * Filter
 * 
 * preg_grep();
 */

preg_grep('/^(.*)@(.*)$/',[
    'php//stdout',
    'tbaram10@naver.com'
]);


/**
 * Escape regex string 
 * 
 * preg_quote();
 * */ 

preg_quote('^().*$?:[]'); 
