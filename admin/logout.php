<?php
function __autoload($class_name) {
    require_once('cls/class.' . strtolower($class_name) . '.php');
}
require_once('inc/functions.inc.php');
$url = isset($_GET['url']) ? $_GET['url'] : '';
$session = new SessionManager();
$users = new Users();
$users->push_logs_out();
$users->logout();
if($url) transfers_to($url); else transfers_to('./login.html');
exit;

?>
