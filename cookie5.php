<p>usuwanie ciasteczka.</p>
<?php
$cookie_name = "user";
setcookie($cookie_name , " ", time() - 3600);
if(!isset($_COOKIE[$cookie_name])){
    echo "Ciacho: " . $cookie_name . "ni ma";

} else {
    echo "Ciacho " . $cookie_name . "jest!";
    echo "Wartosc ciacha to: " . $_COOKIE[$cookie_name];
}
?>
