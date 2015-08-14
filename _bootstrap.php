<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_name('m2cms_shop');
session_start();

require_once __DIR__.'/inc/config.php';
require_once __DIR__.'/inc/functions.php';

$db = array(
  new MySQLi(get_config('hp', 'hostname'), get_config('hp', 'username'), get_config('hp', 'password')),
  new MySQLi(get_config('sv', 'hostname'), get_config('sv', 'username'), get_config('sv', 'password')),
);

if (filesize(__DIR__.'/inc/config.php') == 0) {
		redirect('install');
} else {
	if ($db[0]->connect_errno || $db[1]->connect_errno) {
		redirect('offline');
		exit;
	}
}

if (isset($_SESSION['id'])) {
  $query = "SELECT login, coins, jcoins FROM account.account WHERE login = ?";
  $stmt = $db[1]->prepare($query);
  $stmt->bind_param('i', $_SESSION['id']);
  $stmt->execute();
  $stmt->bind_result(set_config('user', 'name'), set_config('user', 'coins'), set_config('user', 'jcoins'));
  $stmt->free_result();
  unset($query);
}
