<?php
header('Content-Type: application/json; charset=utf-8');
include "../include/config.php";

global $oCore;
$oInet = $oCore;

$_RESULT = array();


if (isset($_REQUEST['a'])) {
	$requestType = $_REQUEST['a'];
	$requestData = $_REQUEST['data'];

	if ($requestType == 'SAVE_USER') {
		$result = $oInet->SQLSelect('SELECT * FROM auto_group');

		$_RESULT['result'] = $result;
		$_RESULT['exitCode'] = 0;
	}
}

echo json_encode($_RESULT, JSON_UNESCAPED_UNICODE);