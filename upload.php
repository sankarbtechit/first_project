<?php
	// requires php5
	define('UPLOAD_DIR', 'uploadedFiles/');
	$img = $_REQUEST['file'];
	$img = str_replace('data:image/png;base64,', '', $img);
	$img = str_replace(' ', '+', $img);
	$data = base64_decode($img);
	$file = UPLOAD_DIR . uniqid() . '.png';
	$success = file_put_contents($file, $data);
	print $success ? "Success" : 'Unable to save the file.';
?>