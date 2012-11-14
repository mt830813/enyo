<?php
$method = @$_SERVER['REQUEST_METHOD'];
switch ($method) {
	case 'GET':
		// Set a custom HTTP response code: pick a working one (no clue)
		//$this->header('HTTP/1.1 500: Internal Server Error');
		//header('HTTP/1.1 500 Internal Server Error');
		//http_response_code(500); // php >= 5.4
		header('X-PHP-Response-Code: 500', true, 500); // php >= 4.3

		header('Content-Type: text/plain; charset=x-user-unparseable');

		echo "my error description";
		break;
	default:
		echo "invalid method";
}
?>