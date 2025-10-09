<p>Tworzymy ciasteczko o teminie waznosci 1 doby.</p>
<?php
$cookie_name = "user";
$cookie_value = "John Doe";
$cookie_expire = time() + (24*60*60); //1dzien
setcookie($cookie_name, $cookie_value, $cookie_expire);