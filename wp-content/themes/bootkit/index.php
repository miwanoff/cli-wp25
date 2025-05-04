<?php
wp_head(); // тут автоматично буде підключено файл functions.php

$str      = 'Kit';
echo $str = apply_filters('my_filter1', $str); // <strong>Kit</strong>
