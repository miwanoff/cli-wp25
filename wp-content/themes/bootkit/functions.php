<?php

function my_filter_function1($str)
{
    $str = '<strong>' . $str . '</strong>';
    return $str; // Повертаємо змінене значення!
}

add_filter('my_filter1', 'my_filter_function1');

function my_filter_function2($str)
{
    return '<h2>Hello ' . $str . '!</h2>'; // Повертаємо змінене значення!
}
add_filter('my_filter2', 'my_filter_function2');

function my_action_function()
{
    echo 'Сталася подія "my_action"!'; // Нічого не повертаємо!
}
add_action('my_action', 'my_action_function');

function my_action_function1($text)
{
    echo 'Відбулася подія "my_action"!' . $text;
}
add_action('my_action1', 'my_action_function1');