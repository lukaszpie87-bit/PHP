<?php
 function add_some_extra(&$string) {
        $string .= 'and something extra.';
 }

 $str = 'This is string,';
 add_some_extra($str);
 echo $str;