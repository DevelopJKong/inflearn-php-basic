<?php

/**
 * Read a Line.
 */
$line = readLine();

/**
 * Add history
 */
readline_add_history($line);

/**
 * Clear
 */
readline_clear_history();

//종종 공식문서에는 지원하는데 안되는것들이 있다 이런것들을 참고하면 좋다
