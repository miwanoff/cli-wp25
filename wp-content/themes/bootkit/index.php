<?php
wp_head(); // тут автоматично буде підключено файл functions.php
echo "<h1>WP</h1>";
$str      = 'Kit';
echo $str = apply_filters('my_filter1', $str); // <strong>Kit</strong>

echo apply_filters('my_filter2', $str); // Hello Kit